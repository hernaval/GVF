<?php
    class Gestion extends Model{
        private $_table = 'Gestions';
        private $_dateCompta;
        private $_idAdmin;
        private $_type;
        private $_motif;
        private $_valeur;

        public function maj(){
            $this->insert(array(
                'table' => $this->_table,
                'column' => "DateCompta,Type,Motif,Valeur,IdAdmin",
                'val' => " '".$this->_dateCompta."', '".$this->_type."', '".$this->_motif."',  '$this->_valeur',  '".$this->_idAdmin."' "
               
            ));
        }

        public function calculDepenseJ(){
            return $this->select(array(
                'tables' => $this->_table,
                "condition" => "DateCompta = '".$this->_dateCompta."' "
            ),false);
        }

        public function get(){
            return $this->select(array(
                'tables' => $this->_table,
                'condition' => "1=1"
                
            ),false);
        }

        public function setDateCompta($date){
            $this->_dateCompta = $date;
        }
        public function setIdAdmin($id){
            $this->_idAdmin = $id;
        }
        public function setType($type){
            $this->_type = $type;
        }
        public function setMotif($motif){
            $this->_motif = $motif;
        }
        public function setValeur($val){
            $this->_valeur = $val;
        }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }

       
    }
?>