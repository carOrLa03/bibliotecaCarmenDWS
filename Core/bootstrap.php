<?php
require_once __DIR__ . "/../vendor/autoload.php";

//use bibliotecaCarmenDWS\database\Conexion;
//use bibliotecaCarmenDWS\core\App;
//use bibliotecaCarmenDWS\core\Request;
//use bibliotecaCarmenDWS\core\Router;


//require_once __DIR__ . "/../utils/MyLog.php";

$config = require_once __DIR__ . "/../app/config.php";
App::bind('config', $config);
$conexion = App::getConexion();

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger', $logger);
