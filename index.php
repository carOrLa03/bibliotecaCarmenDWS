<?php
try {
    require_once __DIR__ . "/core/bootstrap.php";
    // usamos este metodo para averiguar que controlador debemos llamar
    require Router::load("app/routes.php")->direct(Request::uri());
} catch (Exception $e) {
    echo $e->getMessage();
}
