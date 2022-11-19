<?php
require_once __DIR__ . "/../database/conexion.php";
require_once __DIR__ . "/App.php";
require_once __DIR__ . "/Request.php";
require_once __DIR__ . "/Router.php";

$config = require_once __DIR__ . "/../app/config.php";

App::bind('config', $config);
$conexion = App::getConexion();
