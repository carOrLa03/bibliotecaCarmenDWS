<?php
require_once("./views/partials/menu.part.php");
require_once "./entity/Colaboradores.php";
require_once "./utils/file.php";

// CONEXION A LA BBD BIBLIOTECA PARA INSERTAR EN LA BBDD  A LOS COLABORADORES
require_once "./database/conexion.php";
require_once "./exceptions/DataBaseException.php";

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
                $conexion  = Conexion::make();
                if (!$conexion) {
                    throw new DataBException("Conexion fallida");
                }
                $nomFile = $file->getFileName();
                $consulta = "INSERT INTO colaboradores (nombre, descripcion, archivo) 
                                VALUES (:nombre, :descripcion, :archivo)";
                $prepara = $conexion->prepare($consulta);
                $prepara->execute(array(":nombre" => $nombre, ":descripcion" => $descripcion, ":archivo" => $nomFile));
                $prepara->closeCursor();
            } catch (DataBException $e) {
                $mensaje = $e->getMessage();
                echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
            }
        } catch (FileException $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
        }
    }
    if ($error != "ok") {
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
// mostrar los colaboradores
require_once("./database/queryBuilder.php");

require_once "./views/colaboradores.view.php";
