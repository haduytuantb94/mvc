<?php
/***==================Dinh nghia PAT================================***/
define('DS',DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__));  //duong dan thu muc goc
define('LIBRARY_PATH', dirname(__FILE__).DS.'libs'.DS);  //duong dan thu muc Libs
define('MODELS_PATH', dirname(__FILE__).DS.'models'.DS);  //duong dan thu muc Libs

/***=====================Dinh nghia Database=========================***/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'manage_user');