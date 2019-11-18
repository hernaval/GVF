<?php 
    class Clients extends Controller{
        public $_models = array('Client');

        public function registration(){
           $this->renderA('register');
        }

        public function checkClient(){
            $tel = $_POST['telephoneClient'];
            $d = $this->Client->check($tel);
            print_r ($d);

        }
        public function checkMail(){
           $mail = $_POST['email'];
           $d = $this->Client->get($mail);
           print_r($d);
        }

        public function ajout(){
            echo $_POST['telephoneClient'];
            $client = array(
                'telephoneClient' =>$_POST['telephoneClient'],
                'nomClient' => $_POST['nomClient'],
                'prenomClient'=> $_POST['prenomClient']
            );
            $this->Client->hydrate($client);
            $this->Client->ajouter();
            
              
        }

        public function countClient(){
            $d = $this->Client->count();

            print_r($d);
        }

        public function createAccount(){
            if(isset($_POST['register'])){
                $pass = md5($_POST['motdepasse']);
                $email = $_POST['email'];
                $client = array(
                    'telephoneClient' => $_POST['telephoneClient'],
                    'idCompte' => $_POST['idCompte'],
                );
               $this->Client->hydrate($client);
               $this->Client->add($email,$pass);

               header('location:sign');
            }

            if(isset($_POST['telephoneClient'])){
               
            }
        
        }


        public function sign(){
            session_destroy();
            $this->renderA('register');
        }

        public function login(){
            $email = $_POST['email'];
            $pass = $_POST['motdepasse'];
            
            $d =$this->Client->checkLog($email,$pass);
            $s = $this->Client->setSession();
            $c = $this->Client->setSession2();
           // print_r($d);
           print_r($c);
            if($d > 0){
                if(isset($_POST['cookie'])){
                    setcookie("clientUser", $email, time() + (86400 * 30), "/");
                }
                else{
                    $_SESSION['clientUser'] = $email;
                    $_SESSION['telephoneClient'] = $s[0]['TelephoneClient'];
                    $_SESSION['idCompte'] = $c[0]['IdCompte'];
                } 
               header("location:loginDone");
            }else{
                echo "error";
            }
        }
        

        public function loginDone(){
            $this->renderA('loginDone');
        }



    }

?>