<?php
try {
    require_once __DIR__ . "/core/bootstrap.php";

    $router = new Router();
    require_once __DIR__ . "/app/routes.php";
    // usamos este metodo para averiguar que controlador debemos llamar
    require $router->direct(Request::uri());
} catch (Exception $e) {
    echo $e->getMessage();
}
