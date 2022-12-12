<?php
require_once __DIR__ . "/partials/menu.part.php";
?>
<!-- book section -->
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Contacta
      </h2>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="form_container">
          <form action="#" method="post">
            <div>
              <label for="nombre" class="form-label">Tu nombre</label>
                <input type="text" class="form-control" pattern="[a-zA-Z]+" name="nombre" maxlength="20" value="<?php /** @var string $nombre */
                /** @var mixed $error */
                echo ($error != 'ok') ? $nombre : "" ?>" id="nombre"/>
            </div>
            <div>
              <label for="mail" class="form-label">Tu Email</label>
                <input type="email" class="form-control" name="email" value="<?php /** @var mixed $mail */
              echo ($error != 'ok') ? $mail : "" ?>" id="mail"/>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Escribe tu comentario</label>
              <textarea class="form-control" id="" rows="10" name="textArea"></textarea>
            </div>
            <div class="btn_box">
              <button>
                Envía
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end book section -->

<!-- footer section -->
<?php

require_once __DIR__ . "/partials/footer.part.php";
?>
<!-- footer section -->