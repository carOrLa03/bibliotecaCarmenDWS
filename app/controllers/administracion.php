<?php
// excepciones
use biblioteca\App\entity\Libros;
use biblioteca\App\entity\Prestamos;
use biblioteca\App\entity\Usuarios;
use biblioteca\App\exceptions\AppException;
use biblioteca\App\exceptions\DataBaseException;
use biblioteca\App\exceptions\MiExcepcion;
use biblioteca\App\repository\LibrosRepository;
use biblioteca\App\repository\PrestamosRepositorio;
use biblioteca\App\repository\UsuariosRepositorio;
use biblioteca\App\Utils\Utils;
use biblioteca\Core\App;

require_once __DIR__ . "/../../core/bootstrap.php";
require_once __DIR__ . "/../views/partials/menu.part.php";

if (isset($_POST['enviaUusuario'])) {
    $nomUsuario = htmlspecialchars(trim($_POST['nomUsuario']));
    $apellidos = htmlspecialchars(trim($_POST['apellidos']));
    $dni = htmlspecialchars(trim($_POST['dni']));
    $domicilio = htmlspecialchars($_POST['domicilio']);
    $poblacion = htmlspecialchars(trim($_POST['poblacion']));
    $fecha = htmlspecialchars(trim($_POST['fecha_nac']));
    try {
        if ((!preg_match("/^[a-zA-Z]+/", $nomUsuario) || strlen($nomUsuario) < 5)) {
            throw new MiExcepcion("El nombre no es correcto.");
        } else if (!preg_match("/^[a-zA-Z]+/", $apellidos)) {
            throw new MiExcepcion("Los apellidos no son correctos.");
        } else if (!Utils::valida_dni($dni)) {
            throw new MiExcepcion("El DNI no es correcto.");
        } else if (!preg_match("/^[a-zA-Z]+/", $poblacion)) {
            throw new MiExcepcion("La poblacion no es correcta.");
        } else if (!Utils::valida_fecha($fecha)) {
            throw new MiExcepcion("La fecha no es correcta.");
        } else {
            $usuarioRep = App::getRepository(UsuariosRepositorio::class);
            $usuario = new Usuarios($nomUsuario, $apellidos, $dni, $domicilio, $poblacion, $fecha);
            $usuarioRep->save($usuario);
            $mensaje = " Usuario guardado correctamente.";
            echo "<div class='alert alert-success' role='alert'>
             $mensaje 
            </div>";
        }
    } catch (DataBaseException|MiExcepcion $e) {
        $mensaje = $e->getMessage();
        try {
            App::get('logger')->add($mensaje);
        } catch (AppException $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje <div>";
        }
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
    }
}
if (isset($_POST['enviaprestamo'])) {
    $codLibro = $_POST['codLibro'];
    $codUsuario = $_POST['codUsuario'];
    $hoy = new DateTime();
    $salida = $hoy->format('d/m/Y');
    $max = date_add($hoy, date_interval_create_from_date_string("1 month"));
    $fMaxDev = $max->format('d/m/Y');
    try {
        $prestamoRep = App::getRepository(PrestamosRepositorio::class);
        $totalPrestUsu = $prestamoRep->totalPrestamosUsuario($codUsuario);
        $numMaxPrestamos = Utils::numMaxPrestamos();
        if($totalPrestUsu < $numMaxPrestamos){
            $newPrestamo = new Prestamos($codLibro, $codUsuario, $salida, $fMaxDev, "null", "false");
            $prestamoRep->save($newPrestamo);
            $mensaje = "Prestamo guardado";
            echo "<div class='alert alert-success' role='alert'>
             $mensaje 
            </div>";
        }else{
            $mensaje = "Número de préstamos excedido. No puede tener más de $numMaxPrestamos prestamos activos.";
            App::get('logger')->add($mensaje);
            echo "<div class='alert alert-danger' role='alert'>
             $mensaje 
            </div>";
        }

    } catch (DataBaseException $e) {
        $mensaje = $e->getMessage();
        try {
            App::get('logger')->add($mensaje);
        } catch (AppException $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje <div>";
        }
        echo "<div class='alert alert-danger' role='alert'>
        $mensaje 
       </div>";
    } catch (AppException $e) {
        $mensaje = $e->getMessage();
        try {
            App::get('logger')->add($mensaje);
        } catch (AppException $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje <div>";
        }
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
            </div>";
    }
}
if(isset($_POST['enviaNumPrestamo'])){
    try{
    $nuevoNum = $_POST['numMaxPrestamos'];
    Utils::modificaNumMaxPrestamos($nuevoNum);
        $mensaje = "Número máximo de prestamos modificado a " . $nuevoNum;
        App::get('logger')->add($mensaje);
        echo "<div class='alert alert-success' role='alert'>
            $mensaje 
            </div>";

    }catch(AppException $e){
        $mensaje = $e->getMessage();
        try {
            App::get('logger')->add($mensaje);
        } catch (AppException $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
            $mensaje <div>";
        }
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
            </div>";
    }
}
if (isset($_POST['enviaLibro'])) {
    $titulo = htmlspecialchars(trim($_POST['nomLibro']));
    $autor = htmlspecialchars(trim($_POST['autor']));
    $genero = htmlspecialchars(trim($_POST['genero']));
    $pais = htmlspecialchars(trim($_POST['pais']));
    $paginas = (int)$_POST['paginas'];
    $anoEdicion = (int)$_POST['ano'];
    try {
        $libroRep = new LibrosRepository();
        $newLibro = new Libros($titulo, $autor, $genero, $pais, $paginas, $anoEdicion);
        $libroRep->save($newLibro);
        $mensaje = "Nuevo Libro registrado correctamente.";
        App::get('logger')->add($mensaje);
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";
    } catch (DataBaseException $e) {
        $mensaje = $e->getMessage();
        echo "<div class='alert alert-danger' role='alert'>
        $mensaje 
       </div>";
    } catch (AppException $e) {
        $mensaje = $e->getMessage();
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
            </div>";
    }
}
require_once __DIR__ . "/../views/administracion.view.php";
