<?php
    session_start();
    define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
    define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
   
   // require(ROOT.'assets/head/head.php');
    require(ROOT.'core/model.php');
    require(ROOT.'core/controller.php');
    


   

    $params = explode('/',$_GET['p']);
   // print_r ($params);
    $controller = $params[0];
    $action = isset($params[1]) ? $params[1] : 'index';

     
    require('controllers/'.$controller.'.php');
    $controller = new $controller();
    if(method_exists($controller,$action)){
        unset($params[0]);
        unset($params[1]);
        call_user_func_array(array($controller,$action),$params);
       // $controller->$action();
    }else{
        echo "erreur 404";      
    }
    
    
?>