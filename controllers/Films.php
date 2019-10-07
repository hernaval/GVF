<?php
    class Films extends Controller{

        public $_models = array( 'Film');

        public function liste(){
            $d = array();
            $d['film']=  $this->Film->show();
           
            
            if(isset($_SESSION['username'])){
                $this->set($d);
                $this->renderS('listeFilmsa');
            }
         
        }

       
       
        //ajouter un film
        public function ajouter(){
            $nb = $_POST['nbExemplaire'];
            $prix = $_POST['prixFilm'];
            $qal = $_POST['qualite'];
            $filename ="../assets/img/".$_FILES['image']['name'];
             $film = array(
                 'idFilm' => $_POST['idFilm'],
                'titre' => $_POST['titre'],
                'duree' => $_POST['duree'],
                'genre' => $_POST['genre'],
                'realisateur' => $_POST['realisateur'],
                'maisonDeProd' => $_POST['maisonDeProd'],
                'synopsis' => $_POST['synopsis'],
                'anneeDeSortie' => $_POST['anneeDeSortie'],
                'image' => $filename
             );
            
            $this->Film->hydrate($film);
            $this->Film->add($qal,$prix,$nb);
            header('location: liste');
        }

        public function categorie($genre){
            
            $d['genre'] = $this->Film->getCategorie($genre);
            $this->set($d);
           
            $this->renderU('categorieFilmListe');
        }

        public function delete($idFilm){

            $param = array(
                'idFilm' => $idFilm
            );
            $this->Film->hydrate($param);
            $this->Film->removeFilm();
            header("location: ../liste");
        }
    }
?>