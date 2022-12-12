<?php
// CONEXION A LA BBD BIBLIOTECA PARA INSERTAR EN LA BBDD  A LOS COLABORADORES
// excepciones
require_once __DIR__ . "/../../exceptions/AppException.php";
require_once __DIR__ . "/../../exceptions/DataBaseException.php";
require_once __DIR__ . "/../../exceptions/FileException.php";
require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../utils/file.php";
require_once __DIR__ . "/../../utils/utils.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
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
            // subimos la imagen a la carpeta colaboradores
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
            } catch (DataBException $e) {
                $mensaje = $e->getMessage();
                App::get('logger')->add($mensaje);
                echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
            }
        } catch (FileException $e) {
            $mensaje = $e->getMessage();
            App::get('logger')->add($mensaje);
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
        } catch (AppException $e) {
            $mensaje = $e->getMessage();
            App::get('logger')->add($mensaje);
            echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
        } catch (DataBException $e) {
            $mensaje = $e->getMessage();
            App::get('logger')->add($mensaje);
            echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
        }
    }
    if ($error != "ok") {
        App::get('logger')->add($error);
        echo "<div class='alert alert-danger' role='alert'>
         $error 
        </div>";
    } else {
        $mensaje = " Los archivos han sido subidos.";
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";
    }
}


require_once __DIR__ . "/../views/colaboradores.view.php";
