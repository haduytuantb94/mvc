<?php
class View {
    public $msg;

    public function render($name, $full = true) {
        if($full == true) {
            include_once 'views/header.php';
            require_once 'views/'.$name.'.php';
            include_once 'views/footer.php';
        }else {
            require_once 'views/'.$name.'.php';
        }
    }
}