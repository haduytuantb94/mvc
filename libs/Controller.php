<?php
class Controller {
    public function __construct() {
      $this->view = new View();      
    }    
    public function loadModel($name){
        $file = 'models/'.$name.'_model.php';
        $modelName = ucfirst($name).'_model';
        if(file_exists($file)){
            require_once $file;
          $this->db = new $modelName();
        }
    }
}