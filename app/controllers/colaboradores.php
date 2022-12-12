<?php
// CONEXION A LA BBD BIBLIOTECA PARA INSERTAR EN LA BBDD  A LOS COLABORADORES
// excepciones
use biblioteca\App\entity\Colaborador;
use biblioteca\App\exceptions\AppException;
use biblioteca\App\exceptions\DataBaseException;
use biblioteca\App\exceptions\FileException;
use biblioteca\App\repository\ColaboradorRepositorio;
use biblioteca\App\Utils\File;
use biblioteca\Core\App;

//require_once __DIR__ . "/../../Utils/Utils.php";

// mostrar los colaboradores
//require_once __DIR__ . "/../../database/QueryBuilder.php";
require_once __DIR__ . "/../../core/bootstrap.php";

require_once __DIR__ . "/../views/partials/menu.part.php";

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = htmlspecialchars(trim($_POST['nombre_colaborador']));
    $descripcion = htmlspecialchars(trim($_POST['descrip_colaborador']));

    if ((!preg_match("/^[a-zA-Z]+/", $nombre) || strlen($nombre) < 5)) {
        $error = "El nombre no es correcto";
    } else if (strlen($descripcion) < 10) {
        $error = "La descripcion no puede estar vacía.";
    } else if ($_FILES["img_colaborador"]['name'] == "") {
        $error = "Debes introducir un archivo de imagen";
    } else {
        try {
            // subimos la imagen a la carpeta colaboradora
            $file  = new File("img_colaborador");
            $file->saveUploadFile(Colaborador::RUTA_LOGO);
            $error = 'ok';
            //  EN CASO DE QUE EL USUARIO HAYA INSERTADO
            // CORRECTAMENTE TODOS LOS DATOS
            // NOS CONECTAREMOS A LA BD E INSERTAREMOS ESOS DATOS EN LA TABLA
            // COLABORADORES
            try {
                $nomFile = $file->getFileName();
                $colnewRepository = new ColaboradorRepositorio();
                $colaborador = new Colaborador($nombre, $descripcion,  $nomFile);
                $colnewRepository->save($colaborador);
            } catch (DataBaseException $e) {
                $mensaje = $e->getMessage();
                App::get('logger')->add($mensaje);
                echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
            }
        } catch (FileException $e) {
            $mensaje = $e->getMessage();
            try {
                App::get('logger')->add($mensaje);
            } catch (AppException $e) {
            }
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
        } catch (AppException|DataBaseException $e) {
            $mensaje = $e->getMessage();
            try {
                App::get('logger')->add($mensaje);
            } catch (AppException $e) {
            }
            echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
        }
    }
    if ($error != "ok") {
        try {
            App::get('logger')->add($error);
            echo "<div class='alert alert-danger' role='alert'>
         $error 
        </div>";
        } catch (AppException $e) {
        }

    } else {
        $mensaje = " Los archivos han sido subidos.";
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";
    }
}


require_once __DIR__ . "/../views/colaboradores.view.php";
