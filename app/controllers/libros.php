<?php
require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../entity/Libros.php";
require_once __DIR__ . "/../../utils/utils.php";
require_once __DIR__ . "/../../exceptions/DataBaseException.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
require_once __DIR__ . "/../../repository/LibrosRepository.php";
require_once __DIR__ . "/../../core/bootstrap.php";

$selectLibros = $_POST['selectLibros'];
if (isset($_POST['consultaLibros'])) {
    $libRepositorio = new LibrosRepository();
    // si la eleccion es Libros Disponibles
    if (strcmp($selectLibros, '1') == 0) {
        echo "hola";
        $arrayLibrosDisponibles = $libRepositorio->findLibrosDisponibles();
        var_dump($arrayLibrosDisponibles);

        // si la eleccion es Todos los libros
    } else if (strcmp($selectLibros, '2') == 0) {
        $arrayTodosLibros = $libRepositorio->findAll();
        echo "<div><table class='tabla_libros'>
        <thead>
        <tr><th>nombre_libro</th>
        <th>autor</th>
        <th>genero</th>
        <th>país_autor</th>
        <th>páginas</th>
        <th>año_edición</th></tr>
        </thead>
        <tbody>";
        foreach ($arrayTodosLibros as $libro) {
            $nomlibro = $libro->getNombre();
            $autor = $libro->getAutor();
            $genero = $libro->getGenero();
            $pais = $libro->getPais();
            $pag = $libro->getPaginas();
            $ano = $libro->getAno();
            echo "<tr>
            <td>'$nomlibro'</td>
            <td>'$autor'</td>
            <td>'$genero'</td>
            <td>'$pais'</td>
            <td>'$pag'</td>
            <td>'$ano'</td>
            </tr>";
        }
        echo "</tbody>
        </table></div>";
    } else {
    }
}
require_once __DIR__ . "/../views/libros.view.php";
