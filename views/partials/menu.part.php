<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title>Biblioteca</title>
</head>

<body>
    <?php
    require_once("./utils/utils.php");
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
                <span>
                    Biblioteca
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto ">
                    <li class="nav-item <?php isActive("index.php") ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php isActive("menu.php") ?>">
                        <a class="nav-link" href="menu.php">Libros</a>
                    </li>
                    <li class="nav-item <?php isActive("about.php") ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php isActive("book.php") ?>">
                        <a class="nav-link" href="book.php">Contact</a>
                    </li>
                </ul>
                <div class="user_option">
                    <a href="" class="user_link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <a class="cart_link" href="#">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        </svg>
                    </a>
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <a href="" class="order_online">
                        Order Online
                    </a>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>