<?php
    class Disponibilites extends Controller{
        public $_models = array('Disponibilite');

        public function liste(){
            $d = array();

            $d['filmEtPrix']= $this->Disponibilite->get();
            print_r($d);
            $this->set($d);
            $this->renderA('listeEtPrix');
        }

        public function achat($id, $qal){
            echo $id;
            $donnees = array(
                'idFilm' => $id,
                'nomQualite' => $qal
            );
            $this->Disponibilite->hydrate($donnees);
            $d['film'] = $this->Disponibilite->getPrix();
            $this->set($d);
            $_SESSION['NomQualite'] = $qal;
            $this->renderU('sales');
        
           
        }

        

        public function updateSoldeOut(){
            $nb = $_POST['nb'];
            $dispo = array(
                'idFilm' => $_POST['idDufilm'] ,
                //'nomQualite' => $_POST['nomQualite'],  
            );
            $this->Disponibilite->hydrate($dispo);
            $this->Disponibilite->add1($nb);
        }

        public function confirm($id,$prix,$ref){
           
            $reference = $ref;
            echo $reference;
            $tel =$_SESSION['telephoneClient'];
            $qt=1;
            $date= date("Y-m-d");
            $achat = array(
                'idFilm' => $id,
                'prixFilm' =>$prix,
            );
            $this->Disponibilite->hydrate($achat);
            $this->Disponibilite->doSales($reference,$tel,$qt,$date);
            $this->Disponibilite->majNb($id,$_SESSION['NomQualite']);
            $idco = $_SESSION['idCompte'];
            $idc = $this->Disponibilite->getVirtualMoney($idco);
            print_r($idc);
            $money = $idc[0]['VirtualMoney'] - $prix;
            $this->Disponibilite->setPayement($idco,$money);

            echo "on vous a relevé de votre compte de ".$prix." et il vous reste ".$money;
        }

        public function IsDispo(){

            $donnees = array(
                "idFilm" => $_POST['idfilm'],
                "nomQualite" => $_POST['qualite']
            );
            $this->Disponibilite->hydrate($donnees);
            $d = $this->Disponibilite->getNb();

            print_r ($d[0]['NbExemplaire']);
           
        }

        public function isEmpty(){
            $d = $this->Disponibilite->vide();

            print_r($d);
        }

        public function search(){
            
                $param = $_POST['search'];
                $d = $this->Disponibilite->find($param);
                $result = array();
                $a = array();
                  foreach ($d as $key => $value) {
                      $a = array($key => $value);
                  }
                
                
              echo json_encode($a);
        }
    }
?>