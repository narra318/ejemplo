<?php
    include "../../codigo/controller/conexion.php";
    $con = new Configuracion();
    $conexion = $con->conectarDB();

    $busqueda = $_GET["q"];
    
    $busqueda = mysqli_real_escape_string($conexion, $busqueda);

    $sql = "SELECT * FROM libro
            INNER JOIN pais ON libro.idPais = pais.idPais
            INNER JOIN editorial ON libro.idEditorial = editorial.idEditorial  
            INNER JOIN tematica ON libro.idTematica = tematica.idTematica  
            INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria   
            INNER JOIN estado ON libro.idEstado = estado.idEstado 
            WHERE (nombreLibro LIKE '%$busqueda%' OR ISBN LIKE '%$busqueda%') LIMIT 25;";

    $resultado = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($resultado) > 0){
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
                            <th class="border border-info"> Portada </th>
                        </tr></thead>';            
                        

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr class='linea bg-dark text-secondary'>
                    <td class='border border-info'> ".$fila['idLibro']." </td>
                    <td class='border border-info'> ".$fila['nombreLibro']." </td>
                    <td class='border border-info'> $".number_format($fila['precioLibro'])." COP </td>
                    <td class='border border-info'> ".$fila['nombreEditorial']." </td>
                    <td class='border border-info'> ".$fila['paginas']." </td>
                    <td class='border border-info'> ".$fila['publicacion']." </td>
                    <td class='border border-info'> ".$fila['nombrePais']." </td>
                    <td class='border border-info'> ".$fila['tematica']." </td>
                    <td class='border border-info'> ".$fila['ISBN']." </td>
                    <td class='border border-info'> ".$fila['categoria']." </td>
                    <td class='border border-info'> ".$fila['estado']." </td>
                    <td class='border border-info text-center'> <img src='../../codigo/inventario".$fila['img']."' alt='".$fila['nombreLibro']."' style='min-width: 50px; width: 50px; min-height: 50px;'>  </td>
                </tr>";
        }

        echo "</table></div></div></div>";
        echo '<script>
                $(".linea").mouseover(function(){
                    $(this).attr("class", "bg-primary text-white bg-opacity-75");
                });
                $(".linea").mouseout(function() {
                    $(this).attr("class", "bg-dark text-secondary bg-dark p-0");
                });
              </script>';

    }else{
        echo "<div class='container justify-content-center text-light text-center'> No se encontraron resultados para $busqueda </div>";
    }
               
?>
