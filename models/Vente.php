<?php
    class Vente extends Model{
        private $_table ='ventes';
        private $_ref;
        private $_telephoneClient;
        private $_idFilm;
        private $_idAdmin;
        private $_prixAchat;
        private $_quantite;
        private $_dateAchat;
        private $_status;
        
        //enregistrement complet d'un achat avec la facture
        public function add($facture){
            //insertion de la ref facture
            $this->insert(array(
                'table' => 'Factures',
                'column' => 'Ref,IdAdmin',
                'val' => " '".$facture."', '".$this->_idAdmin."'  "
            ));

            $this->insert(array(
                'table' => $this->_table,
                'column' => "Ref,IdFilm,TelephoneClient,Quantite,PrixAchat,DateAchat,Status",
                'val' => " '".$facture."', '".$this->_idFilm."', '".$this->_telephoneClient."' , 
                 '$this->_quantite', '$this->_prixAchat' , '".$this->_dateAchat."' ,''   "
            ));
            
        }

        //selection des informations completes d'une transaction
        public function get(){
           return $this->select(array(
                'tables' => " $this->_table,clients,films",
                'condition' => " $this->_table.TelephoneClient = clients.TelephoneClient
                 and $this->_table.IdFilm = films.IdFilm group by $this->_table.DateAchat "
            ),false);
        }

        //selection du client correspondant a un num 
        
        public function findExistingClient($tel){
            return $this->select(array(
                'tables' => 'clients',
                'condition' => "TelephoneClient = '$tel' ",
            ),true);
        }

        //selection du prix corres a idFilm et qualilte

        public function getPrix($id,$qal){
            return $this->select(array(
                'tables' => 'disponibilites',
                'condition' => " IdFilm = '$id' and NomQualite = '$qal' "
            ),false);
        }

        //maj des nb exemplaires
        public function majNb($nb,$idfilm,$n){
            $this->update(array(
                'table' => "Disponibilites",
                'modif' => " NbExemplaire  = '$nb' ",
                'condition' => " idFilm = '$idfilm' and NomQualite = '".$n."' "
            ));
        }

        
        function setTelephoneClient($tel){
            $this->_telephoneClient = $tel;
        }
        function setIdFilm($id){
            $this->_idFilm = $id;
        }
        function setIdAdmin($idAdmin){
            $this->_idAdmin = $idAdmin;
        }
        function setQuantite($q){
            $this->_quantite = $q;
        }
        function setPrixAchat($p){
            $this->_prixAchat = $p;
        }
        function setDateAchat($d){
            $this->_dateAchat = $d;
        }
        function setStatus($st){
            $this->_status = $st;
        }

        function getIdFilm(){
            return $this->_idFilm;
        }
        function getTelephoneClient(){
            return $this->_telephoneClient;
        }
        function getDateAchat(){
            return $this->_dateAchat;
        }
        function getPrixAchat(){
            return $this->_prixAchat;
        }
        function getIdAdmin(){
            return $this->_idAdmin;
        }
        

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }


    }
?>