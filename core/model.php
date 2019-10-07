<?php
    class Model{
        
        public $id;
        public $_con;

        
        
        public function select($data = array(),$log){
          $con = new PDO("mysql:host=localhost;dbname=gvf","root","");
            $tables;
            $limit="";
            $order="";
            $condition;
           
            extract($data);
       
         $req = $con->query("select * from $tables where  $condition  $order  $limit");
         if($log==false){
            $d = array();
          while($data = $req->fetch()){
            $d[] = $data;
          }
           return $d;
         }else{
            $count = $req->rowCount();
            return $count;
         }
       
       }

       public function insert($data =array()){
        $con = new PDO("mysql:host=localhost;dbname=gvf","root","");
         $table='';
         $column='';
         $val='';
         extract($data);
        
          $req = $con->prepare("insert into $table($column) values($val) ");
          $req->execute();
       
       
        }

        public function update($data =array()){
          $table='';
          $modif ='';
          $condition='';
          extract($data);
          $con = new PDO("mysql:host=localhost;dbname=gvf","root","");
          $req = $con->query("update $table set $modif where $condition");
          

          
        }

        public function delete($data = array()){
          $tables = "";
          $condition = "";
          extract($data);
          $con = new PDO("mysql:host=localhost;dbname=gvf","root","");
          $req = $con->query("delete from $tables where $condition");
        }
    

}

$m = new Model();
$m->insert();
    
?>