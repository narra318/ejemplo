<?php
// Variables para la conexión a la base de datos
include '../../controller/conexion.php';
$conexion = new Configuracion();
$con = $conexion -> conectarDB();

if (isset($_GET['busqueda'])) {
    $buscar = $_GET['busqueda'];

    $buscar = mysqli_real_escape_string($con, $buscar);  

    $consulta = "SELECT * FROM foro 
    INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario
    WHERE (nombreLibro LIKE '%$buscar%' OR autorLibro LIKE '%$buscar%') LIMIT 3";

    // Ejecutar la consulta
    $resultado = $con-> query($consulta);

    // Mostrar los resultados de la búsqueda
    if (mysqli_num_rows($resultado) > 0) {

    echo <<< RESULTADOS
        <table class="table mt-5 mb-5" width="620px">
            <tr>
                <th width="20px"> </th>
                <th width="200px"> Creador </th>
                <th width="300px">Libro</th>
                <th width="200px">Autor</th>
                <th width="100px">Respuestas</th>
            </tr>
    RESULTADOS;


        while ($row = mysqli_fetch_assoc($resultado)) {
                $id = $row['id'];
                $idUsuario = $row['usuario'];
                $titulo = $row['nombreLibro'];
                $autor = $row['autorLibro'];
                $fecha = $row['fecha'];
                $respuestas = $row['respuestas'];
                echo "<tr>";
                echo "<td> <a href='../foros/foro.php?id=$id'>Ver</a></td>";
                echo "<td>$idUsuario</td>";
                echo "<td>$titulo</td>";
                echo "<td>$autor</td>";
                echo "<td>$respuestas</td>";
                echo "</tr>";
        }

    echo "</table>";
    } else {
        echo "No se encontraron resultados para la búsqueda: " . $buscar;
    }
}
?>