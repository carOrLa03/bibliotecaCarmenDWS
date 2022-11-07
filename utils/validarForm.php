<?php
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
