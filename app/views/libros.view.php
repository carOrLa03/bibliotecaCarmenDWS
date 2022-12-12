<!-- food section -->

<section class="food_section layout_padding">
  <div class="buscador container">
    <div class="buscador__titulo heading_container heading_center">
      <h2>Consulta nuestros libros</h2>
    </div>
  </div>
  <div class="container">
    <?php
    /** @var mixed $libRepositorio */
    $arrayGenero = $libRepositorio->rellenaSelect('genero');
    ?>
    <ul class="filters_menu">
      <li class="active" data-filter="*">Todos los libros</li>
      <li data-filter=".disponible">Libros Disponibles</li>
      <?php
      foreach ($arrayGenero as $genero) {
        $gen = $genero->getGenero();
        echo "<li data-filter='.$gen'>$gen</li>";
      }
      ?>
    </ul>
    <div class="filters-content">
      <div class="row grid">
        <?php
        $arrayTodosLibros = $libRepositorio->findAll();
        $arrayLibrosDisponibles = $libRepositorio->findLibrosDisponibles();
        foreach ($arrayTodosLibros as $libro) {
          $nomlibro = $libro->getNombre();
          $autor = $libro->getAutor();
          $genero = $libro->getGenero();
          $pag = $libro->getPaginas();
          $disponible = "";
          foreach ($arrayLibrosDisponibles as $libro1) {
            $nomlibro1 = $libro1->getNombre();
            if ($nomlibro1 == $nomlibro) {
              $disponible = "disponible";
              break;
            }
          }


          echo <<< EOT

            <div class="col-sm-6 col-lg-4 all $genero $disponible">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/librosTaza.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      $nomlibro
                    </h5>
                    <h6>$autor</h6>
                    <h6>$pag páginas</h6>
                  </div>
                </div>
              </div>
            </div>
          
          EOT;
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- end food section -->

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>
<!-- footer section -->