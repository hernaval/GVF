<?php
    class Comptabilite extends Model{
        private $_table = 'Comptabilites';
        private $_dateCompta;
        private $_recetteDuJour;
        
        public function add(){
            $this->insert(array(
                'table' => $this->_table,
                'column' => 'DateCompta,RecetteDuJour',
                'val' => " '".$this->_dateCompta."', '$this->_recetteDuJour' "
            ));
        }

        public function calculDepense($journaliere){
            if($journaliere == true){
                return $this->select(array(
                    'tables' => 'Ventes',
                    'condition'=> "DateAchat = '".$this->_dateCompta."' "
                ),false);
            }
            else{
                return $this->select(array(
                    'tables' => 'Ventes',
                    'condition'=> " 1=1 "
                ),false);
            }
        }
        public function setDateCompta($date){
            $this->_dateCompta = $date;
        }
        public function setRecetteDuJour($recette){
            $this->_recetteDuJour = $recette;
        }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }
    }
    
?>