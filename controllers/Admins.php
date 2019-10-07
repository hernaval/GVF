<?php

    class Admins extends Controller{

        public $_models = array( 'Admin');
    
        //redirection vers la page d'authentification
        function loginPage(){
            
            $this->renderA('login');
            $this->Admin->setIdAdmin("naval419");
            $this->Admin->setPassAdmin("navalona");
           
            $a= $this->Admin->getLogin();
            print_r($a);
           
        }

        //check de l'authentification
        public function checkLog(){
            
            $id = $_POST['username'];
            $pass =$_POST['password'];
            $this->Admin->setIdAdmin($id);
            $this->Admin->setPassAdmin($pass);
            $username = $this->Admin->getIdAdmin();
           
            $d = $this->Admin->getLogin();
            if($d > 0){
               
               $_SESSION['username'] = $username;
               header('location:dash');
             
            } else echo "error";
            
        }

        //redirection vers le dashboard de l'admin
        public static function dash(){
            $this->renderS('dashboard');
        }

        //notification et alerte
        public function notification(){
           
                $d = array();
                $d['dispo'] = $this->Admin->getNbFilm();
                print_r($d);
                 $this->set($d);
                $this->renderS('notification');
                
            
        }
        
        public function logout(){
            session_destroy();
    
            header("location:loginPage");
            
        }
    }
        
        
    
?>