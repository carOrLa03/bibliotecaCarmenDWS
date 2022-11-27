<!--  -->
<section class="formularios">
    <div class="container heading_container heading_center grupo-botones">
        <form action="#" method="post">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example" id="grupoBotones">
                <button type="button" class="btn btn-warning btn-lg" id="newusuario">Nuevo Usuario</button>
                <button type="button" class="btn btn-warning btn-lg" id="newlibro">Nuevo Libro</button>
                <button type="button" class="btn btn-warning btn-lg" id="nuevoPrestamo">Nuevo Prestamo</button>
                <button type="submit" class="btn btn-warning btn-lg" id="mostrarUsuarios" name="mostrarUsuarios" formmethod="post">Mostrar Usuarios</button>
                <button type="submit" class="btn btn-warning btn-lg" id="mostrarPrestamos" name="mostrarPrestamos">Mostrar Prestamos</button>
                <button type="submit" class="btn btn-warning btn-lg" id="mostrarMensajes" name="mostrarMensajes">Mensajes de Usuarios</button>

            </div>
        </form>

    </div>

    <!-- FORMULARIO DE REGISTRO DE USUARIOS -->
    <div class="container form-usuario noVer" id="form-usuario">
        <form class="row g-3" action="#" method="post">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationDefault01" name="nomUsuario" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationDefault02" name="apellidos" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">DNI</label>
                <input type="text" class="form-control" id="validationDefault02" name="dni" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="validationDefault03" name="domicilio" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Población</label>
                <input type="text" class="form-control" id="validationDefault03" name="poblacion" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="validationDefault03" name="provincia" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Fecha de Nacimiento</label>
                <input type="text" class="form-control" id="validationDefault05" name="fecha_nac" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit" id="enviaUusuario" name="enviaUusuario">Envía</button>
            </div>
        </form>
    </div>
    <!-- FORMULARIO DE PRESTAMOS -->
    <div class="container form-prestamo noVer" id="form-prestamo">
        <form class="row g-3" action="#" method="post">
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">Código Libro</label>
                <?php
                try {
                    $libroRep = new LibrosRepository();
                    $arrayLibros = $libroRep->findLibrosDisponibles();
                ?>
                    <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="codLibro" id="validationCustom01">

                        <?php
                        foreach ($arrayLibros as $libro) {
                            $codigo = $libro->getCodigo();

                            echo <<< EOT
                        <option value="$codigo">$codigo</option>
                    EOT;
                        }
                        ?>
                    </select>
            </div>
        <?php
                } catch (DataBException $e) {
                    $mensaje = $e->getMessage();
                    echo "<div class='alert alert-danger' role='alert'>
                        $mensaje 
                        </div>";
                }
        ?>


        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Código Usuario</label>
            <?php
            try {
                $usuarioRepositorio = new UsuariosRepository();
                $arrayUsuarios = $usuarioRepositorio->findAll();
            ?>
                <select class="form-select form-select-lg" aria-label=".form-select-lg   example" name="codUsuario" id="validationDefault02">
                    <?php
                    foreach ($arrayUsuarios as $usuarios) {
                        $codigo = $usuarios->getCodigo();

                        echo <<< EOT
                                    <option value="$codigo">$codigo</option>
                                 EOT;
                    }
                    ?>
                </select>
        </div>
    <?php
            } catch (DataBException $e) {
                $mensaje = $e->getMessage();
                echo "<div class='alert alert-danger' role='alert'>
                    $mensaje 
                    </div>";
            }
    ?>

    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Fecha Salida</label>
        <input type="text" class="form-control" id="validationDefault02" name="salida" required>
    </div>

    <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Fecha Máxima de Devolución</label>
        <input type="text" class="form-control" id="validationDefault03" name="fmaxDev" required>
    </div>
    <div class="col-md-3">
        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="devuelto" id="validationDefault04">
            <option disabled value="">Está Devuelto?</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-warning" type="submit" id="enviaprestamo" name="enviaprestamo">Envía</button>
    </div>
        </form>
    </div>

    <!-- FORMULARIO DE REGISTRO DE LIBROS -->
    <div class="container form-libros noVer" id="form-libros">
        <form class="row g-3" action="#" method="post">
            <div class="col-md-12">
                <label for="validationDefault01" class="form-label">Título</label>
                <input type="text" class="form-control" id="validationDefault01" name="nomLibro" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault02" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="validationDefault02" name="editorial" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault02" class="form-label">Autor</label>
                <input type="text" class="form-control" id="validationDefault02" name="autor" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Genero</label>
                <input type="text" class="form-control" id="validationDefault03" name="genero" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">País del Autor</label>
                <input type="text" class="form-control" id="validationDefault03" name="pais" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault04" class="form-label">Páginas</label>
                <input type="number" class="form-control" id="validationDefault03" name="paginas" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault05" class="form-label">Precio</label>
                <input type="text" class="form-control" id="validationDefault05" name="precio" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault06" class="form-label">Año de edición</label>
                <input type="number" class="form-control" id="validationDefault06" name="ano" required>
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit" id="enviaLibro" name="enviaLibro">Envía</button>
            </div>
        </form>
    </div>
</section>
<section class="mostrarTablas" id="mostrarTablas">
    <?php
    if (isset($_POST['mostrarUsuarios'])) {
        $usuarioRepositorio = new UsuariosRepository();
        $arrayUsuarios = $usuarioRepositorio->findAll();
    ?>
        <div class="container heading_container heading_center caja-usuarios" id="caja-usuarios">
            <h2>Usuarios</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Domicilio</th>
                        <th>Poblacion</th>
                        <th>Provincia</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($arrayUsuarios as $usuario) {
                        $codUsuario = $usuario->getCodigo();
                        $nombre = $usuario->getNombre();
                        $apellidos = $usuario->getApellidos();
                        $dni = $usuario->getDni();
                        $domicilio = $usuario->getDomicilio();
                        $poblacion = $usuario->getPoblacion();
                        $provincia = $usuario->getProvincia();
                        $nace = $usuario->getFnace();

                        echo <<< EOT
                            <tr>
                                <th>$nombre</th>
                                <th>$apellidos</th>
                                <th>$dni</th>
                                <th>$domicilio</th>
                                <th>$poblacion</th>
                                <th>$provincia</th>
                                <th>$nace</th>
                                <th><form action="#" method="post">
                                <input type="submit" name="prestamoUsuario" value="Ver Prestamos" id="verPrestamoUsu" class="btn btn-warning">
                                <input type="hidden" name="codUsuario" value ="$codUsuario">
                                </form></for></th>
                            </tr>
                        EOT;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
    }
    if (isset($_POST['prestamoUsuario'])) {
        try {
            $numUsu = $_POST['codUsuario'];
            $prestamosRep = new PrestamosRepositorio();
            $arrayPrestamos = $prestamosRep->findAll();
            $arrayPrestamos = $prestamosRep->prestamosUsuarios($numUsu);
            if (empty($arrayPrestamos)) {
                throw new MiExcepcion("No tiene prestamos.");
            }
        ?>
            <div class='container heading_container heading_center caja-prestamos' id='caja-prestamos'>
                <h2>Prestamos</h2>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Cod_Libro</th>
                            <th>Fecha Salida</th>
                            <th>Fecha máxima devolución</th>
                            <th>Fecha devolución</th>
                            <th>Devuelto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($arrayPrestamos as $prestamo) {
                            $codLibro = $prestamo->getCLibro();
                            $salida = $prestamo->getFSalida();
                            $fMaxDev = $prestamo->getFMaxDev();
                            $devolucion = $prestamo->getFDevolucion();
                            $devuelto = $prestamo->getDevuelto();

                            echo <<< EOT
                                        <tr>
                                            <th>$codLibro</th>
                                            <th>$salida</th>
                                            <th>$fMaxDev</th>
                                            <th>$devolucion</th>
                                            <th>$devuelto</th>
                                        </tr>
                                    EOT;
                        }
                        ?>
                    </tbody>
                </table>
            </div>;
        <?php
        } catch (MiExcepcion $e) {
            $mensaje = $e->getMessage();
            echo "<div class='alert alert-danger' role='alert'>
                    $mensaje 
                   </div>";
        }
    }

    if (isset($_POST['mostrarPrestamos'])) {
        $prestamosRep = new PrestamosRepositorio();
        $arrayPrestamos = $prestamosRep->findAll();
        ?>
        <div class="container heading_container heading_center caja-prestamos" id="caja-prestamos">
            <h2>Prestamos</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Cod_Libro</th>
                        <th>Cod_Usuario</th>
                        <th>Fecha Salida</th>
                        <th>Fecha máxima devolución</th>
                        <th>Fecha devolución</th>
                        <th>Devuelto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arrayPrestamos as $prestamo) {
                        $numPedido = $prestamo->getNumPedido();
                        $codLibro = $prestamo->getCLibro();
                        $codUsuario = $prestamo->getCUsuario();
                        $salida = $prestamo->getFSalida();
                        $fMaxDev = $prestamo->getFMaxDev();
                        $devolucion = $prestamo->getFDevolucion();
                        $devuelto = $prestamo->getDevuelto();

                        echo <<< EOT
                            <tr>
                                <th>$codLibro</th>
                                <th>$codUsuario</th>
                                <th>$salida</th>
                                <th>$fMaxDev</th>
                                <th>$devolucion</th>
                                <th>$devuelto</th>
                                <th><form action="#" method="post">
                                <input type="hidden" name="numPedido" value="$numPedido">
                                <input type="hidden" name="fechaMax" value="$fMaxDev">
                                <input type="submit" name="modificaDevolucion" value="Modifica Devolucion" class="btn btn-warning">
                                </form></th>
                            </tr>
                        EOT;
                    }

                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    // si el administrador clicka en modificarDevolución
    if (isset($_POST['modificaDevolucion'])) {
        $fechaMaxDev = $_POST['fechaMax'];
        $numP = $_POST['numPedido'];
    ?>
        <div class="container form-devolucion">
            <form class="row g-3" action="#" method="post">
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Número de Pedido</label>
                    <input type="text" class="form-control" id="validationDefault01" name="" value="<?php echo $numP ?>" disabled>
                    <input type="hidden" name="numPed" value="<?php echo $numP ?>">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Fecha Máxima de Devolución</label>
                    <input type="text" class="form-control" id="validationDefault02" name="fechaMax" value="<?php echo $fechaMaxDev ?>" disabled>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault03" class="form-label">Fecha Devolución</label>
                    <input type="text" class="form-control" id="validationDefault03" name="devolucion" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-warning" type="submit" id="enviaDevolucion" name="enviaDevolucion">Modifica</button>
                </div>
            </form>
        </div>
    <?php

    }
    if (isset($_POST['enviaDevolucion'])) {
        $nuevoDato = $_POST['devolucion'];
        $numRegistro = $_POST['numPed'];
        $prestamosRep = new PrestamosRepositorio();
        $resultado = $prestamosRep->updateRegistro($nuevoDato, $numRegistro);
        echo "<div class='alert alert-success' role='alert'>
            $resultado 
           </div>";
    }

    if (isset($_POST['mostrarMensajes'])) {
        $mensajesRep = new MensajesRepositorio();
        $arrayMensajes = $mensajesRep->findAll();

    ?>
        <div class="container heading_container heading_center caja-mensajes" id="caja-mensajes">
            <h2>Mensajes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arrayMensajes as $mensaje) {
                        $nombre = $mensaje->getNom();
                        $mail = $mensaje->getMail();
                        $mensaje  = $mensaje->getMensaje();

                        echo <<< EOT
                        <tr>
                            <th>$nombre</th>
                            <th>$mail</th>
                            <th>$mensaje</th>
                        </tr>
                    EOT;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
</section>

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>