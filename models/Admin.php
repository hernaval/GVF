<?php
    class Admin extends Model{
        //tous les attributs
        private $_idadmin;
        private $_nomadmin;
        private $_prenomadmin;
        private $_fonction;
        private $_passAdmin;
        private $_table ='Admins';
        
       

        

       
        //getters && setters
        public function setIdAdmin($idadmin){
            $this->_idadmin = $idadmin;
        }

        public function getIdAdmin(){
            return $this->_idadmin;
        }

        public function  setPassAdmin($passadmin){
            $this->_passAdmin = $passadmin;
        }

        public function getNbFilm(){
            return $this->select(array(
                'tables' => "Disponibilites,Films,Qualites",
                'condition' => " Disponibilites.IdFilm = Films.IdFilm and Disponibilites.NomQualite = Qualites.NomQualite
                and Disponibilites.NbExemplaire = 0 "
            ),false);
    
        }
        public function getLogin(){
            return $this->select(array(
                'tables' => $this->_table,           
                'condition'=>"IdAdmin = '".$this->_idadmin."' and PassAdmin = '".$this->_passAdmin."' "   
            ),true);
        }
        
    }
?>