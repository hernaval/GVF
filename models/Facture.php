<?php
    class Facture extends Model{
        private $_table = 'Factures';
        private $_ref;
        private $_dateFacture;
        private $_heureFacture;
        private $_etat;
        private $_idAdmin;

        public function getFacture($ref){
            return $this->select(array(
                'tables' => "$this->_table,Clients,Ventes, Disponibilites ",
                'condition' => " $this->_table.Ref = Ventes.Ref and Ventes.TelephoneClient=Clients.TelephoneClient 
                 and Disponibilites.idFilm = Ventes.IdFilm and Ventes.Ref =  '".$ref."'
                 "
            ),false);
        }

        

        public function factureList(){
            return $this->select(array(
                'tables' => "$this->_table,Ventes,Clients,Disponibilites",
                'condition' => "$this->_table.Ref = Ventes.Ref and Ventes.TelephoneClient = Clients.TelephoneClient 
                and Disponibilites.IdFilm = Ventes.IdFilm
                group by $this->_table.Ref  "
            ),false);
        }

        

        public function setRef($ref){
            $this->_ref = $ref;
        }
        public function setDateFacture($date){
            $this->_dateFacture = $date;
        }
        public function setHeureFacture($h){
            $this->_heureFacture = $h;
        }
        public function setEtat($etat){
            $this->_etat = $etat;
        }
        public function setIdAdmin($id){
            $this->_idAdmin = $id;
        }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }
         
    }
        
    
    
?>