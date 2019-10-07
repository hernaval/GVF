<?php
    class Gestions extends Controller{
        public $_models = array('Gestion');

        public function maj(){
            $this->renderS('majGestion');
           
        }      

        public function updateGestion(){
            $count = count($_POST['type']);

            for($i=0; $i<$count; $i++){
                $gestion = array(
                    'dateCompta' => date("Y-m-d"),
                    'type' => $_POST['type'][$i],
                    'motif' => $_POST['motif'][$i],
                    'valeur' => $_POST['valeur'][$i],
                    'idAdmin' => $_SESSION['username']
                );
                $this->Gestion->hydrate($gestion);
                $this->Gestion->maj();
                $this->renderS("majGestion");
            }
            
        }

        public function actionView(){
            $d = array();
            $d['action'] = $this->Gestion->get();
            $this->set($d);
            $this->renderS('action');
        }

        public function depense(){
            $date = array(
                'dateCompta' => date("Y-m-d")
            );
            $this->Gestion->hydrate($date);
            $d= $this->Gestion->calculDepenseJ();
            $somme = 0;
            foreach($d as $row => $value){
                $somme += $value['Valeur'];
                
            }
            echo $somme;
          
        }

       
    }
?>