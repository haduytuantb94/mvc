<?php
echo '<h1>MVC</h1>';

// require_once 'libs/bootstrap.php';
// require_once 'libs/Controller.php';
// require_once 'libs/View.php';
// require_once 'libs/Model.php';

require_once 'define.php';

/**Require cac file trong thu vien Libs **/

function autoloader_libs($className) {
    $path = LIBRARY_PATH;
    require_once $path."{$className}.php";
}

spl_autoload_register('autoloader_libs');


$bootstrap = new Bootstrap();
