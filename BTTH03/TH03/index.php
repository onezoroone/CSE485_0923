<?php
require_once '../TH03/config/config.php';
require_once APP_ROOT.'/libs/DBConnection.php';
$controller = isset($_GET['c'])?$_GET['c']: 'music';
$action = isset($_GET['a'])?$_GET['a']: 'index';

$controller = ucfirst($controller);
$controller = $controller.'Controller';
$path = 'controllers/'.$controller.'.php';
include "$path";
$myController = new $controller();
$myController->$action();