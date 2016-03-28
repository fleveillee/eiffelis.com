<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$eiffelisPath = '/var/www/eiffelis/framework/';

set_include_path(get_include_path() . PATH_SEPARATOR . $eiffelisPath . PATH_SEPARATOR . $eiffelisPath .'controllers/' . PATH_SEPARATOR . $eiffelisPath .'libraries/' . PATH_SEPARATOR . $eiffelisPath .'models/');

function __autoload($classname) {
    $filename = str_replace('_', '/', $classname) .".php";
    require_once($filename);
}

$action = 'index';

if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
    //Strip .html extension from action name
    $htmlExtPos = strripos($action, '.html');
    if($htmlExtPos !== false){
        $action = substr($action,0, $htmlExtPos);
    }
}


$controller = new MainController($action);

