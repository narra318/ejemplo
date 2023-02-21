<?php
    include "../../codigo/controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();

    // Sentencia SQL
    // $sql = "SELECT libro.idLibro, libro.nombreLibro, libro.precioLibro, editorial.nombreEditorial, libro.paginas, libro.publicacion,
    // pais.nombrePais, tematica.tematica, libro.ISBN, categoria.categoria, estado.estado, libro.img FROM libro
         
    $sql = "SELECT * FROM libro WHERE (nombreLibro=? OR ISBN=?) LIMIT 25;";
    // -- INNER JOIN editorial ON libro.idEditorial = editorial.idEditorial 
    // -- INNER JOIN pais ON libro.idPais = pais.idPais 
    // -- INNER JOIN tematica ON libro.idTematica = tematica.idTematica 
    // -- INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria 
    // -- INNER JOIN estado ON libro.idEstado = estado.idEstado     
    // WHERE (libro.nombreLibro LIKE ? OR libro.ISBN LIKE ?) LIMIT 21;";

    $stmt = $conexion -> prepare($sql);
    $stmt -> bind_param("ss", $_GET['query'], $_GET['query']);

    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($idLibro, $nombre, $descripcion, $precio, $editorial, $pag, $pub, $pais, $tematica, $isbn, $categoria, $estado, $img);

    $valor = $stmt -> fetch(); 
    $stmt -> close();

    if($valor == null ){
        echo "No se encontraron resultados";
    }else{

        echo "Resultado: ";

    echo '<div class="container">
    <div class="row justify-content-center overflow-auto">
        <div class="col-md text-center text-white">
                <table class="table bg-dark border border-primary bg-opacity-75 rounded mt-3">
                    <thead><tr class="text-white bg-info bg-opacity-50"> 
                        <th class="border border-info"> ID </th>
                        <th class="border border-info"> Nombre </th>
                        <th class="border border-info"> Precio </th>
                        <th class="border border-info"> Editorial </th>
                        <th class="border border-info"> Paginas </th>
                        <th class="border border-info"> Año </th>
                        <th class="border border-info"> Pais </th>
                        <th class="border border-info"> Tematica </th>
                        <th class="border border-info"> ISBN </th>
                        <th class="border border-info"> Categoria </th>
                        <th class="border border-info"> Estado </th>
                    </tr></thead>';
                    
              echo "<tr>
                    <td class='border border-info bg-dark'> ".$idLibro." </td>
                    <td class='border border-info bg-dark'> ".$nombre." </td>
                    <td class='border border-info bg-dark'> ".$precio." </td>
                    <td class='border border-info bg-dark'> ".$editorial." </td>
                    <td class='border border-info bg-dark'> ".$pag." </td>
                    <td class='border border-info bg-dark'> ".$pub." </td>
                    <td class='border border-info bg-dark'> ".$pais." </td>
                    <td class='border border-info bg-dark'> ".$tematica." </td>
                    <td class='border border-info bg-dark'> ".$isbn." </td>
                    <td class='border border-info bg-dark'> ".$categoria." </td>
                    <td class='border border-info bg-dark'> ".$estado." </td>
                    </tr>";
           echo "</table>";
}

?>
