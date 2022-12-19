<?php
require_once __DIR__ . "/../vendor/autoload.php";
use biblioteca\App\Utils\MyLog;
use biblioteca\App\Utils\MyMail;
use biblioteca\Core\App;
use biblioteca\Core\Router;


$config = require_once __DIR__ . "/../App/config.php";
App::bind('config', $config);

$conexion = App::getConexion();

$router = Router::load(__DIR__ . '/../App/'. $config['routes']['filename']);
App::bind('router', $router);

$logger = MyLog::load('logs/biblioteca.log');
App::bind('logger', $logger);

$mailer = new MyMail();
App::bind('mailer', $mailer);
