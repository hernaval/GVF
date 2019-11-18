<?php
    class Acceuils extends Controller{
       public $_models = array('Acceuil');
        
        function index(){
            
           $this->render('index');
        }

        public function setCount(){
            $d = $this->Acceuil->count();

            print_r($d);
        }

    }
         
     
?>