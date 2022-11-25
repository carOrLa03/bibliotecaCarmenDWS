<?php
require_once __DIR__ . "/partials/menu.part.php";
?>
<section class="zonaPersonal">
    <div class="container">
        <div class="heading_container heading_center">
            <h1 class="titlezona">Zona Personal</h1>
        </div>
        <div class="heading_container heading_center">
            <label for="" class="form-label">Haz click en el desplegable y buscate</label>

            <?php
            // MOSTRAR TODOS LOS USUARIOS REGISTRADOS
            try {
                $usuarioRepositorio = new UsuariosRepository();
                $arrayUsuarios = $usuarioRepositorio->findAll();
            ?>
                <div class="form_container">
                    <form action=" #" method="post" class="">
                        <div>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="nUsuario">

                                <?php
                                foreach ($arrayUsuarios as $usuarios) {
                                    $nombre = $usuarios->getNombre();

                                    echo <<< EOT
                        <option value="$nombre">$nombre</option>
                    EOT;
                                }
                                ?>
                            </select>
                        </div>
                        <div class="btn_box">
                            <button class="btn btn-warning btn-lg">
                                Envía
                            </button>
                        </div>
                    </form>
                </div>
        </div>

        <?php
                $prestamosRepositorio = new PrestamosRepositorio();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nombreUsuario = $_POST['nUsuario'];
                    $arrayPrestamos = $prestamosRepositorio->prestamosUsuarios($nombreUsuario);
        ?>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cod_libro</th>
                            <th>Cod_usuario</th>
                            <th>Fecha_salida</th>
                            <th>Fecha_máxima_devolución</th>
                            <th>Fecha_devolución</th>
                            <th>Devuelto</th>
                            <th>Nombre libro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($arrayPrestamos as $prestamo) {
                            $codLibro = $prestamo->getCLibro();
                            $codUsuario = $prestamo->getCUsuario();
                            $feSalida = $prestamo->getFSalida();
                            $feMaxDev = $prestamo->getFMaxDev();
                            $feDevolucion = $prestamo->getFDevolucion();
                            $devuelto = $prestamo->getDevuelto();

                            echo <<< EOT
                            <tr>
                                <th>$codLibro</th>
                                <th>$codUsuario</th>
                                <th>$feSalida</th>
                                <th>$feMaxDev</th>
                                <th>$feDevolucion</th>
                                <th>$devuelto</th>
                            </tr>
                            EOT;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    <?php
                }
            } catch (DataBException $e) {
                $mensaje = $e->getMessage();
                echo "<div class='alert alert-danger' role='alert'>
            $mensaje 
           </div>";
            }

    ?>
    </div>
</section>

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>