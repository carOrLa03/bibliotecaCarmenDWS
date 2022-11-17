<?php
require_once("./views/partials/menu.part.php");
$nombre = "";
$mail = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $mail = htmlspecialchars(trim($_POST['email']));
    $textarea = htmlspecialchars($_POST['textArea']);
    if ((!preg_match("/^[a-zA-Z]+/", $nombre) || strlen($nombre) < 7)) {
        $error = "El nombre no es correcto";
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = "El email introducido no es correcto.";
    } else if (strlen($textarea) < 10) {
        $error = "El comentario no debe estar vacío";
    } else {
        $error = 'ok';
    }
    if ($error != "ok") {
        echo "<div class='alert alert-danger' role='alert'>
         $error 
        </div>";
    } else {
        $mensaje = " Tus datos han sido enviados correctamente.";
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";
    }
}
require_once "./entity/Colaboradores.php";
require_once "./utils/utils.php";
require_once "./database/conexion.php";
require_once "./exceptions/DataBaseException.php";


// mostrar los colaboradores
require_once("./database/queryBuilder.php");
require_once __DIR__ . "/repository/ColaboradorRepositorio.php";

require_once __DIR__ . "/../../core/App.php";
// recuperamos el array con los parametros de configuracion
$config = require_once __DIR__ . "/../config.php";

App::bind('config', $config);
$conexion = App::getConexion();

require_once "./views/book.view.php";
