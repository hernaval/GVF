<?php
     class Client extends Model{
        private $_table = 'Clients';
        private $_telephoneClient;
        private $_nomClient;
        private $_prenomClient;
        private $_adresse;
        private $_idCompte;

        public function check($tel){
            return $this->select(array(
                'tables' => $this->_table,
                'condition' => "TelephoneClient = '".$tel."' "
            ),true);
        }

        public function add($email,$pass){
            $this->insert(array(
                'table' => "Comptes",
                'column' => "IdCompte,TelephoneClient,Email,MotDePasse,Recuperation",
                'val' => " '".$this->_idCompte."', '".$this->_telephoneClient."', '".$email."', '".$pass."', 'navalona' " 
            ));
        }

        public function ajouter(){
            $this->insert(array(
                'table' => $this->_table,
                "column" =>"TelephoneClient,NomClient,PrenomClient",
                "val" => " '".$this->_telephoneClient."', '".$this->_nomClient."', '".$this->_prenomClient."' "
            ));
        }

        public function count(){
            return $this->select(array(
                'tables' => $this->_table,
                "condition" => "1=1"
            ),true);
        }
        public function get($email){
            return $this->select(array(
                'tables' => 'Comptes',
                'condition' => "Email = '".$email."' "
            ),true);
        }

        public function setSession(){
            return $this->select(array(
                'tables' => $this->_table,
                'condition' => "1=1"
            ),false);
        }
        public function setSession2(){
            return $this->select(array(
                'tables' => 'Comptes',
                'condition' => "1=1"
            ),false);
        }

        public function checkLog($email,$pass){
            return $this->select(array(
                'tables' => 'Comptes',
                'condition' => "Email = '".$email."' and MotDePasse = '".md5($pass)."' "
            ),true);
        }

        public function setTelephoneClient($tel){
            $this->_telephoneClient = $tel;
        }
        public function setNomClient($nom){
            $this->_nomClient = $nom;
        }
        public function setPrenomClient($prenom){
            $this->_prenomClient = $prenom;
        }
        public function setAdresse($ad){
            $this->_adresse = $ad;
        }
        public function setIdCompte($id){
            $this->_idCompte = $id;
        }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }
    }
?>