<?php
require_once __DIR__ . "/partials/menu.part.php";
?>
<!-- slider section -->
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-7 col-lg-6 ">
              <div class="detail-box">
                <h1>
                  Bienvenido
                </h1>
                <p>
                  Aquí, podrás leer todos los libros que quieras durante el tiempo que necesites, buscar aquellos libros anhelados que no encontraste, pero sobre todo, podrás disfrutar de nuevas historias cada día.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container ">
          <div class="row">
            <div class="col-md-7 col-lg-6 ">
              <div class="detail-box">
                <h1>
                  Registrate
                </h1>
                <p>
                  Registrate en nuestra Biblioteca y comienza a disfrutar de tantos libros como quieras, por el tiempo que quieras, a un modico precio de suscripción.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Registrarse
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container ">
          <div class="row">
            <div class="col-md-7 col-lg-6 ">
              <div class="detail-box">
                <h1>
                  Busca tu libro
                </h1>
                <p>
                  Entra a nuestro buscador de libros y encuentra tu próxima lectura. No te quedes con las ganas, tenemos miles de libros a tu disposición.
                </p>
                <div class="btn-box">
                  <a href="libros" class="btn1">
                    Buscar ahora
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container ">
          <div class="row">
            <div class="col-md-7 col-lg-6 ">
              <div class="detail-box">
                <h1>
                  Consulta tus préstamos
                </h1>
                <p>
                  No te preocupes por el tiempo, entrando aquí podrás consultar tus préstamos cuando lo necesites.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Consultar ahora
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
        <li data-target="#customCarousel1" data-slide-to="3"></li>
      </ol>
    </div>
  </div>

</section>
<!-- end slider section -->
<!-- offer section -->

<section class="offer_section layout_padding-bottom">
  <div class="offer_container">
    <div class="container ">
      <div class="row">
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="/public/images/libro1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Suscripción de 1 año
              </h5>
              <h6>
                <span>20%</span> Off
              </h6>
              <a href="">
                Suscribete
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="/public/images/maquinaescribir.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Suscripción de 6 meses
              </h5>
              <h6>
                <span>15%</span> Off
              </h6>
              <a href="">
                Subscribete
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end offer section -->

<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        Que opinan nuestros lectores
      </h2>
    </div>
    <div class="carousel-wrap row ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Mi pasión son las historias y por ello los libros me encantan, gracias a esta biblioteca disfruto de nuevas historias cada semana. Por favor continuad así. Gracias!!
              </p>
              <h6>
                Moana Michell
              </h6>
              <p>
                magna aliqua
              </p>
            </div>
            <div class="img-box">
              <img src="../../public/images/chicaLeyendo.jpg" alt="chica" class="box-img cliente_leyendo">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Esta biblioteca es una pasada, tiene todos los libros posibles y opr haber. Es el mejor sitio que he encontrado para conseguir los libros que me gustan.
              </p>
              <h6>
                Mike Hamell
              </h6>
              <p>
                magna aliqua
              </p>
            </div>
            <div class="img-box">
              <img src="/public/images/tioLeyendo.jpg" alt="" class="box-img cliente_leyendo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<!-- footer section -->
<?php
require_once __DIR__ . "/partials/footer.part.php";
?>