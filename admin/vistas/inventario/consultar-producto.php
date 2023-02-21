<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Buscar Productos </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Página de consulta de productos, se puede revisar los productos por medio de una consulta por el ISBN o nombre del libro.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../../js/jquery-3.6.1.min.js"> </script>
    <link href ="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{
            background-image: url('../../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }

        #Link a{
            text-decoration: none;
            color: #B9B4BF;
        }#Link a:hover{
            text-decoration: none;
            color: white;
            font-size: 17px;
        }

    </style>
</head>
<body class="bg-dark ">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>
        
    <p id="Titulo3" class="text-center text-light mt-5"> Buscar Productos <i class="bi bi ms-2"></i> </p>

    <div class="container mb-2">
        <div>
            <div class="text-end m-4">
                <a class="btn btn-light rounded" href="consultar-producto.php" type="submit"> Recargar </a>
                <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-outline-light border border-light rounded"> Volver </a>
            </div>

            <div class="form-floating mt-4">
                <input type="text" class="form-control bg-dark text-secondary text-center" name="buscar" id="buscar" onkeyup="buscarProducto(this.value)" placeholder="Ingrese el usuario">
                <label for="buscar" class="text-center text-info">Escriba el nombre o ISBN del procucto</label>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div id="Producto" class="text-center text-light p-3 overflow-auto">
            <table class="table">
            <thead>
                <tr class="text-white bg-info bg-opacity-75"> 
                    <th class="border border-info"> ID </th>
                    <th class="border border-info"> Imagen </th>
                    <th class="border border-info"> Nombre </th>
                    <th class="border border-info"> Autor </th>
                    <th class="border border-info"> Precio </th>
                    <th class="border border-info"> Editorial </th>
                    <th class="border border-info"> Paginas </th>
                    <th class="border border-info"> Año </th>
                    <!-- <th class="border border-info"> Pais </th> -->
                    <!-- <th class="border border-info"> Tematica </th> -->
                    <th class="border border-info"> ISBN </th>
                    <th class="border border-info"> Categoria </th>
                    <th class="border border-info"> Estado </th>
                </tr>
            </thead>
    <?php
        include "../../codigo/controller/conexion.php";
        $con = new Configuracion;
        $conexion = $con->conectarDB();

        $sql = "SELECT * FROM libro 
            INNER JOIN pais ON libro.idPais = pais.idPais
            INNER JOIN editorial ON libro.idEditorial = editorial.idEditorial  
            INNER JOIN tematica ON libro.idTematica = tematica.idTematica  
            INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria   
            INNER JOIN estado ON libro.idEstado = estado.idEstado 
        LIMIT 21;";

        $productos = mysqli_query($conexion, $sql);
        
        while ($fila = mysqli_fetch_array($productos)) {
            $idLibro = $fila['idLibro'];
            $nombre = $fila['nombreLibro'];
            $autor = $fila['autor'];
            $precio = $fila['precioLibro'];
            $img = $fila['img'];
            $editorial = $fila['nombreEditorial'];
            $pag = $fila['paginas'];
            $pub = $fila['publicacion'];
            $pais = $fila['nombrePais'];
            $tematica = $fila['tematica'];
            $isbn = $fila['ISBN'];
            $categoria = $fila['categoria'];
            $estado = $fila['estado'];
            
            echo "<tr class='linea bg-dark text-secondary'>
                <td class='border border-info '> ".$idLibro." </td>
                <td class='border border-info'> ".$estado." </td>
                <td class='border border-info fw-semibold'> ".$nombre." </td>
                <td class='border border-info'> ".$autor." </td>
                <td class='border border-info'> $".number_format($precio)." </td>
                <td class='border border-info'> ".$editorial." </td>
                <td class='border border-info'> ".$pag." </td>
                <td class='border border-info'> ".$pub." </td>
                <!-- <td class='border border-info'> ".$pais." </td> -->
                <!-- <td class='border border-info'> ".$tematica." </td> -->
                <td class='border border-info'> ".$isbn." </td>
                <td class='border border-info'> ".$categoria." </td>
                <td class='border border-info text-center'> <img src='../../codigo/inventario".$img."' alt='".$nombre."' style='min-width: 50px; width: 50px; min-height: 50px;'>  </td>
                
            </tr>";
            
        }


    ?>
        </table>
    
        </div>
    </div>

    <script>
        // Funcion para buscar usuario
        function buscarProducto(valor){
            if(valor == ""){
                document.getElementById("Producto").innerHTML = "Escriba un valor a buscar";
                return;
            }

            const xhttp = new XMLHttpRequest();

            xhttp.onload= function(){
                document.getElementById("Producto").innerHTML = this.responseText;
            }

            xhttp.open("GET","../../codigo/inventario/consulta.php?query="+valor);
            xhttp.send();
        }

        $(document).ready(function(){
            $(".linea").mouseover(function(){
                $(this).attr("class", "bg-primary text-white bg-opacity-75");
            });
            $(".linea").mouseout(function() {
                $(this).attr("class", "bg-dark text-secondary bg-dark p-0");
            });
        })
    </script>
</body>
</html>