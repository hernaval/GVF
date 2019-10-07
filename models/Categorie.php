<?php
    class Categorie extends Model{
        public $_table = 'categories';

        public function getRead(){
            return  $this->read(); 
        }
    }
?>