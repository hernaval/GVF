<?php
    class Film extends Model{
        private $_table ='films';
        public $_idFilm;
        public $_titre='Wrong Turn';
        private $_genre;
        private $_duree;
        private $_realisateur;
        private $_maisonDeProd;
        private $_synopsis;
        private $_anneeDeSortie;
        private $_image;

        public function setIdFilm($id){
            $this->_idFilm = $id;
        }

        public function setTitre($titre){
             $this->_titre=$titre;
        }
        public function setDuree($duree){
            $this->_duree = $duree;
        }
        public function setGenre($genre){
            $this->_genre  = $genre;
        }
        public function setRealisateur($realisateur){
            $this->_realisateur = $realisateur;
        }
        public function setMaisonDeProd($maisonDeProd){
            $this->_maisonDeProd = $maisonDeProd;
        }
        public function setSynopsis($synopsis){
            $this->_synopsis  = $synopsis;
        }
        public function setAnneeDeSortie($anneeDeSortie){
            $this->_anneeDeSortie = $anneeDeSortie;
        }
        public function setImage($image){
            $this->_image = $image;
        }
        public function getTitre(){
            return array($this->_titre);
        }
        

        public function add($qal,$prix,$nb){
          $this->insert(array(
              'table' =>$this->_table,
              'column' => 'IdFilm,Titre,Duree,Genre,Realisateur,MaisonDeProd,Synopsis,AnneeDeSortie,Image',
              'val' => " '".$this->_idFilm."','".$this->_titre."','".$this->_duree."', '".$this->_genre."','".$this->_realisateur."', '".$this->_maisonDeProd."',
               '".$this->_synopsis."', '$this->_anneeDeSortie', '".$this->_image."' "
          ));

          $this->insert(array(
            'table' => "Disponibilites",
            "column" => "IdFilm,NomQualite,PrixFilm,NbExemplaire",
            "val" => " '".$this->_idFilm."', '".$qal."', '$prix', '$nb' "
          ));
        }
        //affichage des films
        public function show(){
            return $this->select(array(
                'tables' =>"$this->_table, Disponibilites, Qualites",
                'condition' => "$this->_table.IdFilm = Disponibilites.IdFilm and 
                Disponibilites.NomQualite = Qualites.NomQualite "
            ),false);
        }

        public function removeFilm(){
            $this->delete(array(
                'tables' => $this->_table,
                "condition" => " IdFilm = '".$this->_idFilm."' "
            ));
        }
      
        public function getCategorie($genre){
            return $this->select(array(
                'tables' =>" $this->_table,Disponibilites  ",
                "condition" => " $this->_table.IdFilm = Disponibilites.IdFilm  and $this->_table.Genre = '".$genre."' "
            ),false);
        }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);
               $this->$method($value);
            }
        }

     
    }
?>