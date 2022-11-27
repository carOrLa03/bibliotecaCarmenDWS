<?php
// excepciones
require_once __DIR__ . "/../../exceptions/AppException.php";
require_once __DIR__ . "/../../exceptions/DataBaseException.php";
require_once __DIR__ . "/../../exceptions/FileException.php";
require_once __DIR__ . "/../../exceptions/MiExcepcion.php";
require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../entity/Usuarios.php";
require_once __DIR__ . "/../../entity/Libros.php";
require_once __DIR__ . "/../../entity/Prestamos.php";
require_once __DIR__ . "/../../entity/Mensajes.php";
require_once __DIR__ . "/../../utils/file.php";
require_once __DIR__ . "/../../utils/utils.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
require_once __DIR__ . "/../../repository/LibrosRepository.php";
require_once __DIR__ . "/../../repository/PrestamosRepositorio.php";
require_once __DIR__ . "/../../repository/UsuariosRepositorio.php";
require_once __DIR__ . "/../../repository/MensajesRepository.php";
require_once __DIR__ . "/../../core/bootstrap.php";
require_once __DIR__ . "/../views/partials/menu.part.php";

if (isset($_POST['enviaUusuario'])) {
    $nomUsuario = htmlspecialchars(trim($_POST['nomUsuario']));
    $apellidos = htmlspecialchars(trim($_POST['apellidos']));
    $dni = htmlspecialchars(trim($_POST['dni']));
    $domicilio = htmlspecialchars($_POST['domicilio']);
    $poblacion = htmlspecialchars(trim($_POST['poblacion']));
    $provincia = htmlspecialchars(trim($_POST['provincia']));
    $fecha = htmlspecialchars(trim($_POST['fecha_nac']));
    try {
        if ((!preg_match("/^[a-zA-Z]+/", $nomUsuario) || strlen($nomUsuario) < 5)) {
            throw new MiExcepcion("El nombre no es correcto.");
        } else if (!preg_match("/^[a-zA-Z]+/", $apellidos)) {
            throw new MiExcepcion("Los apellidos no son correctos.");
        } else if (!valida_dni($dni)) {
            throw new MiExcepcion("El DNI no es correcto.");
        } else if (!preg_match("/^[a-zA-Z]+/", $poblacion)) {
            throw new MiExcepcion("La poblacion no es correcta.");
        } else if (!preg_match("/^[a-zA-Z]+/", $provincia)) {
            throw new MiExcepcion("La provincia no es correcta.");
        } else if (valida_fecha($fecha) != false) {
            throw new MiExcepcion("La fecha no es correcta.");
        } else {
            $usuarioRep = new UsuariosRepository();
            $usuario = new Usuarios($nomUsuario, $apellidos, $dni, $domicilio, $poblacion, $provincia, $fecha);
            $usuarioRep->save($usuario);
            $mensaje = " Usuario guardado correctamente.";
            echo "<div class='alert alert-success' role='alert'>
             $mensaje 
            </div>";
        }
    } catch (DataBException $e) {
        $mensaje = $e->getMessage();
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
    } catch (AppException $e) {
        $mensaje = $e->getMessage();
        echo "<div class='alert alert-danger' role='alert'>
                $mensaje 
                </div>";
    } catch (MiExcepcion $e) {
        $mensaje  = $e->getMessage();
        echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
    }
}
if (isset($_POST['enviaprestamo'])) {
    $codLibro = $_POST['codLibro'];
    $codUsuario = $_POST['codUsuario'];
    $salida = htmlspecialchars(trim($_POST['salida']));
    $fMaxDev = htmlspecialchars(trim($_POST['fmaxDev']));
    $devuelto = $_POST['devuelto'] == "si" ? "true" : "false";
    try {
        $prestamoRep = new PrestamosRepositorio();
        $newPrestamo = new Prestamos($codLibro, $codUsuario, $salida, $fMaxDev, 'null', $devuelto);
        $prestamoRep->save($newPrestamo);
        $mensaje = "Prestamo correctamente.";
        echo "<div class='alert alert-success' role='alert'>
             $mensaje 
            </div>";
    } catch (DataBException $e) {
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
if (isset($_POST['enviaLibro'])) {
    $titulo = htmlspecialchars(trim($_POST['nomLibro']));
    $editorial = htmlspecialchars(trim($_POST['editorial']));
    $autor = htmlspecialchars(trim($_POST['autor']));
    $genero = htmlspecialchars(trim($_POST['genero']));
    $pais = htmlspecialchars(trim($_POST['pais']));
    $paginas = (int)$_POST['paginas'];
    $precio = htmlspecialchars(trim($_POST['precio']));
    $anoEdicion = (int)$_POST['ano'];
    try {
        $libroRep = new LibrosRepository();
        $newLibro = new Libros($titulo, $editorial, $autor, $genero, $pais, $paginas, $precio, $anoEdicion);
        $libroRep->save($newLibro);
        $mensaje = "Nuevo Libro registrado correctamente.";
        echo "<div class='alert alert-success' role='alert'>
         $mensaje 
        </div>";
    } catch (DataBException $e) {
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
