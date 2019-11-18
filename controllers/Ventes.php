<?php

    class Ventes extends Controller{
        public $_models = array('Vente');
        //formulaire de saise de ventes
        public function reg(){
            $this->renderS('regVente');
        }

        //verification de l'existence d'un client
        public function checkClient($tel){
            return $this->Vente->findExistingClient($tel);
        }
        //ajout d'un film
        public function checkVente(){

            #deroulement
                ##--insertion d'un nouvel ref facture
                ##---insertion dans la table vente avec ce même ref précédent
                
           $tel = $_POST['telephoneClient'];
            if($this->checkClient('0341262234') == 1) {
                //enregistrement de la vente
            }else{
                //enregistrement du client et reg de la vente
            }
            $count = count($_POST['idFilm']);      
            $refFacture = $_POST['ref'];
            
            for($i=0; $i<$count;$i++){
                //prix du film correspondant par rapport a son qualite
                $qualite = $_POST['qualite'][$i];
                $id = $_POST['idFilm'][$i];
                
                $prix = array();
                $nb = 0;
                $r=$this->Vente->getPrix($id,$qualite);
                foreach($r as $key ){
                    $prix[] = $key;
                    $nb = $prix[0]['NbExemplaire'] - $_POST['quantite'][$i];
             }
                

                $vente = array(                   
                    'telephoneClient' => $_POST['telephoneClient'],
                    'idFilm' => $_POST['idFilm'][$i],
                    'idAdmin' => $_SESSION['username'],
                    'quantite' => $_POST['quantite'][$i],
                    'dateAchat' => date("Y-m-d"),
                    'prixAchat' => $prix[0]['PrixFilm'],
                    //'status' => $_POST['status']
    
                );
                $this->Vente->hydrate($vente);
                $this->Vente->add($refFacture);
                $this->Vente->majNb($nb,$id,$qualite);
                
            }
            header('location:venteDone');
            $_SESSION['ref'] = $_POST['ref'];
            $_SESSION['telephoneClient'] = $_POST['telephoneClient'];
        }

        public function pannier(){
           
            if (isset($_SESSION['clientUser'])) {
               
                echo "pannier ". $_SESSION['clientUser']."<br>";
                $donnees =$_POST['donnees'];
                $data = explode("-",$donnees);
                
                 $vente = array(                   
                    'telephoneClient' => $_SESSION['telephoneClient'],
                    'idFilm' => $data[0],
                        //'idAdmin' => $_SESSION['username'],
                        //'quantite' => 1,
                    'dateAchat' => date("Y-m-d"),
                    'prixAchat' => $data[1],
                );
                $v = new Vente();
                
                $v= $this->Vente->hydrate($vente);
                $cart = array();
                $cart[] = $v;
               
                    print_r($cart);
                
            }
           
            
        }

        //redirection vers la page venteDone
           
        public function venteDone(){
            $this->renderA('venteDone');
        }
        
        //page d'affichage des films
        public function liste(){
            
            $d['vente'] = $this->Vente->get();
            $this->set($d);
            $this->renderS('listeVente');
            
            print_r($d);
           
        }

        public function countVente(){
            $d = $this->Vente->count();
            
            $somme = 0;
            foreach ($d as $key => $value) {
                $somme += $value['Quantite'];
            }
            echo $somme;
        }

        public function annulation($ref,$idfilm,$prix,$qal,$nb){
            $details = array(
                'ref' => $ref,
                'idFilm' => $idfilm,
                'prixAchat' => $prix,
            );
           
            
            $this->Vente->hydrate($details);
            $this->Vente->annuler();
           $this->Vente->majNb2($nb,$idfilm,$qal);
            
        }

        public function revenuChart(){
            $d = $this->Vente->count();

           echo json_encode($d);
           
        }
    }
?>