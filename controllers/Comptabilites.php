<?php
    class Comptabilites extends Controller{
        public $_models = array('Comptabilite');
        public  $_vv = 20000;
        public  $_dd = 10000;
        public  $_cc = 5000;
        public function compta(){
            $this->renderS('account');
        }

        public function account(){
            $v = $this->_vv * $_POST['vingt'];
            $d = $this->_dd * $_POST['dix'];
            $c = $this->_cc * $_POST['cinq'];
            $somme = $v+$d+$c;
            echo $somme;

            $recette = array(
                'dateCompta' => date("Y-m-d"),
                'recetteDuJour' => $somme
            );
            $this->Comptabilite->hydrate($recette);
            $this->Comptabilite->add();
        }

        public function totalSortie(){
            $date = array(
                'dateCompta' => date('Y-m-d'),
            );
            $this->Comptabilite->hydrate($date);
            $d= $this->Comptabilite->calculDepense(true);
            $somme = 0;
            foreach($d as $row => $value){
                $somme += ($value['PrixAchat']*$value['Quantite']);
                
            }
            echo $somme;
          
        }
        public function revenu(){
            $d= $this->Comptabilite->calculDepense(false);
            $somme = 0;
            foreach($d as $row => $value){
                $somme += ($value['PrixAchat']*$value['Quantite']);
                
            }
            echo $somme;
          
        }
    }

?>