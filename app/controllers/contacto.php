<?php
require_once __DIR__ . "/../views/partials/menu.part.php";

require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../entity/Mensajes.php";
require_once __DIR__ . "/../../utils/utils.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
require_once __DIR__ . "/../../repository/MensajesRepository.php";
require_once __DIR__ . "/../../core/bootstrap.php";

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
        $mensajeNuevo = new MensajesRepositorio();
        $mensaje = new Mensajes($nombre, $mail, $textarea);
        $mensajeNuevo->save($mensaje);
    }
    if ($error != "ok") {
        App::get('logger')->add($error);
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


require_once __DIR__ . "/../views/contacto.view.php";
