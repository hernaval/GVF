
<?php
    class Controller{

         private $_vars = array();
        
         private $_layout = 'default';
         private $_layout2 = 'default2';
         private $_layout3 = "default3";
                  /**
          * Class constructor.
          */
         public function __construct()
         {
             if(isset($this->_models)){
                 foreach($this->_models as $mod){
                     $this->loadModel($mod);
                 }
             }
         }

        function set($d){
            $this->_vars = array_merge($this->_vars, $d);
        }

        
       
        function render($filename){
             
            extract($this->_vars);
            
            ob_start();
            require(ROOT.'views/'.get_class($this).'/'.$filename.'.php' );
            $content_for_layout = ob_get_clean();
            if($this->_layout==false){
                echo $content_for_layout;
            }else{
                require(ROOT.'views/layout/'.$this->_layout.'.php' );
            }

        }
        function renderU($filename){
             
            extract($this->_vars);
            
            ob_start();
            require(ROOT.'views/'.get_class($this).'/'.$filename.'.php' );
            $content_for_layout = ob_get_clean();
            if($this->_layout==false){
                echo $content_for_layout;
            }else{
                require(ROOT.'views/layout/'.$this->_layout3.'.php' );
            }

        }

       function renderS($filename){
       
        extract($this->_vars);
            
        ob_start();
        require(ROOT.'views/'.get_class($this).'/'.$filename.'.php' );
        $content_for_layout = ob_get_clean();
        if($this->_layout==false){
            echo $content_for_layout;
        }else{
            require(ROOT.'views/layout/'.$this->_layout2.'.php' );
        }
       }

       function renderA($filename){
        extract($this->_vars);
        require(ROOT.'views/'.get_class($this).'/'.$filename.'.php' );
       }

        function loadModel($name){
            require_once(ROOT.'models/'.strtolower($name).'.php');
            $this->$name = new $name();
        }

        

        
    }
?>