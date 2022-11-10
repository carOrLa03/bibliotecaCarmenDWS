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
                $consulta = "INSERT INTO colaboradores ('nombre', 'descripcion', 'archivo') 
                                VALUES ('$nombre', '$descripcion', '$file');";
                $prepara = $conexion->prepare($consulta);
                $prepara->execute();
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
require_once "./views/colaboradores.view.php";
