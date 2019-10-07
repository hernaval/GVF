<?php
    class Acceuils extends Controller{
       public $_models = array('Acceuil');
        
        function index(){
            
           $this->render('index');
        }
    }
?>