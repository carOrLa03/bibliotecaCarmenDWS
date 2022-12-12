<?php
require_once __DIR__ . "/../vendor/autoload.php";
use bibliotecaCarmenDWS\Database\Conexion;
use bibliotecaCarmenDWS\Core\App;
use bibliotecaCarmenDWS\Core\Request;
use bibliotecaCarmenDWS\Core\Router;
use bibliotecaCarmenDWs\App\Utils\MyLog;
//require_once __DIR__ . "/../utils/MyLog.php";

$config = require_once __DIR__ . "/../app/config.php";
App::bind('config', $config);
$conexion = App::getConexion();

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger', $logger);
