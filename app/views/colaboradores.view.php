<?php
// require_once __DIR__ . "/partials/menu.part.php";
?>

<!-- colaboradores section -->

<section class="about_section layout_padding">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="../images/iconoslibros/pngegg(28).png" alt="pila de libros">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              Colaboradores
            </h2>
          </div>
          <p>Se uno de nuestos colaboradores</p>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_colaborador">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Descripción</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="descrip_colaborador">
            </div>
            <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="img_colaborador">
            </div>
            <div class="mb-3">
              <input type="submit" value="Envía" name="envia_colaborador" class="btn btn-outline-secondary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end colaboradores section -->

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>
<!-- footer section -->