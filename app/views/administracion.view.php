<?php
require_once __DIR__ . "/partials/menu.part.php";
?>
<section class="formularios">
    <div class="container heading_container heading_center grupo-botones">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-warning btn-lg" id="newusuario">Nuevo Usuario</button>
            <button type="button" class="btn btn-warning btn-lg" id="newlibro">Nuevo Libro</button>
            <button type="button" class="btn btn-warning btn-lg" id="newprestamo">Nuevo Prestamo</button>
            <button type="button" class="btn btn-warning btn-lg">Mostrar Usuarios</button>
            <button type="button" class="btn btn-warning btn-lg">Mostrar Prestamos</button>
            <button type="button" class="btn btn-warning btn-lg">Mensajes de Usuarios</button>
        </div>
    </div>

    <!-- FORMULARIO DE REGISTRO DE USUARIOS -->
    <div class="container form-usuario noVer" id="form-usuario">
        <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">DNI</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Población</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Fecha de Nacimiento</label>
                <input type="text" class="form-control" id="validationDefault05" required>
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
                <button class="btn btn-warning" type="submit" id="enviaUusuario">Envía</button>
            </div>
        </form>
    </div>
    <!-- FORMULARIO DE PRESTAMOS -->
    <div class="container form-prestamo noVer" id="form-prestamo">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">Código Libro</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault02" class="form-label">Código Usuario</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault02" class="form-label">Fecha Salida</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>

            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">Fecha Máxima de Devolución</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">Fecha Devolución</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Devuelto</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit" id="enviaprestamo">Envía</button>
            </div>
    </div>
</section>

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>