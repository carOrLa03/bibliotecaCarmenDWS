<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/images/book-fill.svg" type="">

    <title> Biblioteca </title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/css/responsive.css" rel="stylesheet" />
</head>

<body>

    <!-- header section strats -->
    <div class="hero_area">
        <div class="bg-box">
            <img src="/images/libroluz.jpg" alt="LIBRERIA">
        </div>
        <header class="header_section">
            <?php
            use biblioteca\App\Utils\Utils;

            ?>
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto">
                            <li class="nav-item <?php Utils::isActive("index") ?>">
                                <a class="nav-link" href="home">Home</a>
                            </li>
                            <li class="nav-item <?php Utils::isActive("libros") ?>">
                                <a class="nav-link" href="libros">Libros</a>
                            </li>
                            <li class="nav-item <?php Utils::isActive("colaboradores") ?>">
                                <a class="nav-link" href="colaboradores">Colaboradores</a>
                            </li>
                            <li class="nav-item <?php Utils::isActive("contacto") ?>">
                                <a class="nav-link" href="contacto">Contacto</a>
                            </li>
                            <li class="nav-item <?php Utils::isActive("zonaPersonal") ?>">
                                <a class="nav-link" href="zonaPersonal">Zona Personal</a>
                            </li>
                            <li class="nav-item <?php Utils::isActive("administracion") ?>">
                                <a class="nav-link" href="administracion">Administración</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="zonaPersonal" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="libros">
                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                </svg>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                </nav>
            </div>
        </header>
        <div class="caja_mititulo">
            <h1 class="mititle">
                Bienvenido a tu Biblioteca Online
            </h1>
        </div>
    </div>
    <!-- end header section -->