<?php
require_once __DIR__ . "/partials/menu.part.php";
?>

<!-- food section -->

<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Novedades
      </h2>
    </div>

    <ul class="filters_menu">
      <li class="active" data-filter="*">Todas</li>
      <li data-filter=".burger">Novela</li>
      <li data-filter=".fries">Misterio</li>
      <li data-filter=".pizza">Fantasia</li>
      <li data-filter=".pasta">Infantil</li>

    </ul>

    <div class="filters-content">
      <div class="row grid">
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Don Quijote de la Mancha II
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all burger">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  El último Emperador
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Don Quijote de la Mancha I
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all pasta">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  El principito
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all fries">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Los Windsor
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Harry Potter y la Piedra filosofal
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all burger">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nueva York
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all burger">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Los Pilares de la Tierra
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 all pasta">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="images/librosTaza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Harry Potter y el caliz de Fuego
                </h5>
                <p>
                  Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="buscador">
      <div class="buscador__titulo">
        <h2>Nuestro buscador</h2>
      </div>
      <div bucador__seleccion>
        <form action="#" method="post">
          <select class="select" data-mdb-filter="true" name="selectLibros">
            <option value="1">Libros Disponibles</option>
            <option value="2">Todos los libros</option>
          </select>
          <div class="botonBuscaLibros">
            <input type="submit" value="Consulta" name="consultaLibros">
          </div>
        </form>

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