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


$colaboradores = array(
    new Colaborador("museoCiencia.jpg", "Museo de Ciencias de Valencia"),
    new Colaborador("asocPlaza.jpg", "Asociacion Plaza Redonda de Valencia"),
    new Colaborador("metropolitan.jpg", "Asoc. Metropolitan de Madrid"),
    new Colaborador("cosmo.png", "Cosmopolitan"),
    new Colaborador("vogue.png", "Vogue"),
    new Colaborador("afindecuentos.jpg", "A fin de cuentos"),
    new Colaborador("imaginarium.jpg", "Imaginarium"),
    new Colaborador("vealia.jpg", "Vealia")
);

$colaboradores = mezclar($colaboradores);

require_once "./views/book.view.php";
