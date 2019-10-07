<?php
    class Disponibilite extends Model{
        private $_table  ='Disponibilites';
        private $_nomQualite;
        private $_idFilm;
        private $_prixFilm;
        private $_nbExemplaire;

        public function get(){
            return $this->select(array(
                'tables' => " $this->_table,Qualites,Films ",
                'condition' => " $this->_table.IdFilm = Films.IdFilm and $this->_table.NomQualite = Qualites.NomQualite "  
            ),false);
        }

        public function find($params){
            return $this->select(array(
                'tables' => " $this->_table,Qualites,Films ",
                'condition' => " $this->_table.IdFilm = Films.IdFilm and $this->_table.NomQualite = Qualites.NomQualite
                 and $this->_table.IdFilm like '%".$params."%'   "  

            ),false);
        }

        public function getNb(){
            return $this->select(array(
                'tables' => $this->_table,
                'condition' => "IdFilm ='".$this->_idFilm."' and NomQualite ='".$this->_nomQualite."' "
            ),false);
        }

        public function getPrix(){
            return $this->select(array(
                'tables' => " $this->_table,Films,Qualites",
                'condition' => " $this->_table.IdFilm = Films.IdFilm and $this->_table.NomQualite = Qualites.NomQualite 
                and Films.IdFilm = '$this->_idFilm' and Qualites.NomQualite = '".$this->_nomQualite."' "  
            ),false);
        }
        
        public function getVirtualMoney($id){
            return $this->select(array(
                'tables' => 'Comptes',
                'condition' => "IdCompte = '".$id."' "
            ),false);
        }

        public function doSales($ref,$tel,$qt,$date){
            $this->insert(array(
                'table' => 'Ventes',
                'column' => "Ref,IdFilm,TelephoneClient,PrixAchat,Quantite,DateAchat,Status",
                'val' => " '".$ref."', '".$this->_idFilm."', '".$tel."', '$this->_prixFilm', '$qt', '".$date."', 'ligne' "
            ));
        }

        public function setPayement($idcompte,$prixDachat){
            $this->update(array(
                'table' => "Comptes",
                'modif' => "VirtualMoney = '$prixDachat' ",
                'condition' => "IdCompte = '".$idcompte."' "
                
            ));
        }

        public function add1($nb){
            $this->update(array(
                'table' => $this->_table,
                'modif' =>" NbExemplaire = $nb ",
                'condition' =>" IdFilm = '".$this->_idFilm."'   "
            ));
        }

        public function vide(){
            return $this->select(array(
                'tables' => "Disponibilites,Films,Qualites",
                'condition' => " Disponibilites.IdFilm = Films.IdFilm and Disponibilites.NomQualite = Qualites.NomQualite
                and Disponibilites.NbExemplaire = 0 "
            ),true);
        }

        public function majNb($idfilm,$n){
            $this->update(array(
                'table' => "Disponibilites",
                'modif' => " NbExemplaire  = NbExemplaire - 1 ",
                'condition' => " idFilm = '$idfilm' and NomQualite = '".$n."' "
            ));
        }

        public function setNomQualite($nom){
            $this->_nomQualite = $nom;
        }
        public function setIdFilm($id){
            $this->_idFilm = $id;
        }
        public function setPrixFilm($prix){
            $this->_prixFilm = $prix;
        }
       
        public function setNbExemplaire($nb){
            $this->_nbExmplaire = $nb;
        }
        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }

    }
?>