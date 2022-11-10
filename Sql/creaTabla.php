<?php
require_once "./database/conexion.php";
require_once "./exceptions/DataBaseException.php";
// inicio de conexion a la BBDD
try {
    $conexion = Conexion::make();
    if (!$conexion) {
        throw new DataBException("Conexion fallida");
    }
    $consulta = "SELECT * FROM libros";
    $prep = $conexion->prepare($sql);
    $prep->execute();
    while ($fila = $prep->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>" . $fila['Nombre_libro'] . "<p><br>";
    }
    $prep->closeCursor();
} catch (DataBException $e) {
    echo $e->getMessage();
}
