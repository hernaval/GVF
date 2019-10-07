<?php
    class Categories extends Controller{

        public $_models = array( 'Categorie');

        
       
        public function index(){
            $d = array();
            
            /*$d['tuto'] = array(
                'titre' => 'Voici mon titre',
                'description' => 'Exemple de description'
            ) ;*/
           //echo  $this->Tutoriel->_table; 
          
           $d['etudiant'] = $this->Categorie->getRead();
           
            $this->set($d);
            $this->render('index');
           
        }

        function index1(){
            $d = array();
            $d['etudiant'] = $this->Categorie->getRead();
            echo json_encode($d);
        }

       
        public function view($matricule){
            
            $d['etudiant'] = $this->Categorie->getRead();
            $d['etudiant'] = $d['etudiant'][0];
            $this->set($d);
            $this->render('viewCategorie');
        }

        

       
        
    }
?>