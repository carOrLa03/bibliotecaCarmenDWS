<?php
require_once __DIR__ . "/../database/conexion.php";
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../utils/MyLog.php";

$config = require_once __DIR__ . "/../app/config.php";
App::bind('config', $config);
$conexion = App::getConexion();

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger', $logger);
