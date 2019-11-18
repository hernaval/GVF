<?php
    class Factures extends Controller{
        public $_models = array('Facture');
        public function factureView(){
            if(isset($_SESSION['ref'])){
                $ref = $_SESSION['ref'];
                 $d['facture'] =$this->Facture->getFacture($ref);  
                $this->set($d);
                $this->renderA('facture');
            }

        }

        public function factureViewer($ref){
          
            $d['facture'] =$this->Facture->getFacture($ref);  
            $this->set($d);
            $this->renderA('facture');
            
        }

        public function modif($ref){
            $d['facture'] =$this->Facture->getFacture($ref);  
            $this->set($d);
            $this->renderS('modalEditFacture');
        }

        
        public function liste(){
            $d = array();
            $d['facture'] = $this->Facture->factureList();
            $this->set($d);
            $this->renderS('factureList');
        }
    }   

?>