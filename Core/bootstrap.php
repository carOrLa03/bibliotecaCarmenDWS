<?php
use biblioteca\App\Utils\MyLog;


require_once __DIR__ . "/../vendor/autoload.php";

use biblioteca\App\Utils\MyMail;
use biblioteca\Core\App;


$config = require_once __DIR__ . "/../App/config.php";
App::bind('config', $config);
$conexion = App::getConexion();

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger', $logger);

$mailer = new MyMail();
App::bind('mailer', $mailer);