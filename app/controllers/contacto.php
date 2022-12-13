<?php

use biblioteca\App\entity\Mensajes;
use biblioteca\App\exceptions\AppException;
use biblioteca\App\exceptions\DataBaseException;
use biblioteca\App\repository\MensajesRepository;
use biblioteca\Core\App;

require_once __DIR__ . "/../views/partials/menu.part.php";
require_once __DIR__ . "/../../core/bootstrap.php";
require_once './vendor/autoload.php';

$nombre = "";
$mail = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $mail = htmlspecialchars(trim($_POST['email']));
    $textarea = htmlspecialchars($_POST['textArea']);
    if((!preg_match("/^[a-zA-Z]+/", $nombre) || strlen($nombre) < 7)) {
        $error = "El nombre no es correcto";
    } else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = "El email introducido no es correcto.";
    } else if(strlen($textarea) < 10) {
        $error = "El comentario no debe estar vacío";
    } else {
        try {
            $error = 'ok';
            $mensajeNuevo = new MensajesRepository();
            $mensaje = new Mensajes($nombre, $mail, $textarea);
            $mensajeNuevo->save($mensaje);
        } catch (DataBaseException $e) {
        }
    }
    if($error != "ok") {
        try {
            App::get('logger')->add($error);
            echo "<div class='alert alert-danger' role='alert'>
            $error 
            </div>";
        } catch (AppException $e) {
        }
    } else {
        $mensaje = " Tus datos han sido enviados correctamente.";
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";

        try {
            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, "tls"))->setUsername('carmenorla03@gmail.com')->setPassword('ColEbc210');
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            // Create a message
            $message = (new Swift_Message('Bienvenida'))
                ->setFrom(['carmenorla03@gmail.com' => 'Carmen'])
                ->addTo($mail, $nombre)
                ->setBody('Te damos la bienvenida a nuestra Biblioteca Online. La más grande de Internet.');
            // Send the message
            $result = $mailer->send($message);

        } catch (Exception $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
         $mensaje 
        </div>";
        }

    }
}

require_once __DIR__ . "/../views/contacto.view.php";
