<?php

class Bootstrap
{

    public function __construct()
    {
        $controllerURL = isset($_GET['controller']) ? $_GET['controller'] : 'index';
        $actionURL = isset($_GET['action']) ? $_GET['action'] : 'index';
        
        $controllerName = ucfirst($controllerURL);
        $actionName = ucfirst($actionURL);
        
        $file = 'controllers/' . $controllerURL . '.php';
        if (file_exists($file)) {
            require_once $file;
            $controller = new $controllerName();
            if (method_exists($controller, $actionURL)) {
                $controller->$actionURL();
            } else {
               $this->b_Error();
            }
        } else {
           $this->b_Error();
        }
    }
    public function b_Error() {
        require_once 'controllers/error.php';
        $error = new ErrorNew();
        $error->index();
    }
}