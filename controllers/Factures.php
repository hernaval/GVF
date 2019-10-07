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

        public function exportFacture(){
            include( ROOT."pdf.php");
            $href = WEBROOT."assets/bootstrap-4.3.1/dist/css/bootstrap.min.css";
            $filename = $_POST['refFacture'].".pdf";
            $html ='<link rel="stylesheet"   href=" ../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css ">';
            $html .= $_POST['facture_content'];

            $pdf = new Pdf();
            $pdf->load_html($html);
            $pdf->render();
            $pdf->stream($filename, array("Attachement"=> false));

        }

        public function liste(){
            $d = array();
            $d['facture'] = $this->Facture->factureList();
            $this->set($d);
            $this->renderS('factureList');
        }
    }   

?>