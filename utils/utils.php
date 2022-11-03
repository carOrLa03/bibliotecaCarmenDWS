<?php

$pag = $_SERVER['REQUEST_URI'];
echo $pag;
function isActive()
{
    if ($_SERVER['REQUEST_URI'] === "index.php") {
        return true;
    }
    if ($_SERVER['REQUEST_URI'] === "menu.php") {
        return true;
    }
    if ($_SERVER['REQUEST_URI'] === "about.php") {
        return true;
    }
    if ($_SERVER['REQUEST_URI'] === "book.php") {
        return true;
    }
}
