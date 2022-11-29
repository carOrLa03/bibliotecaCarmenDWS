<?php
require_once __DIR__ . "/../database/conexion.php";
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/../vendor/autoload.php";

$config = require_once __DIR__ . "/../app/config.php";
$logger = MyLog::load('logs/biblioteca.log');

App::bind('config', $config);
App::bind('logger', $logger);
$conexion = App::getConexion();
