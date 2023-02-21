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
    <title> Administrar Foros </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Aquí se muestran foros inhabiltados, ya sea para ser habilitados o eliminados.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../../js/jquery-3.6.1.min.js"> </script>
    <link href ="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href ="../../../css/style2.css" rel="stylesheet">
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

    <?php
            
        if(isset($_SESSION["actualizadoF"])){
            echo '<div class="alert alert-success m-0 alert-dismissible fade show">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
                <strong> Exito:</strong> ';
            echo $_SESSION["actualizadoF"];
            echo '</div>';
            unset($_SESSION['actualizadoF']);
        }
            
        if(isset($_SESSION["deleteF"])){
            echo '<div class="alert alert-success m-0 alert-dismissible fade show">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
                <strong> Exito:</strong> ';
            echo $_SESSION["deleteF"];
            echo '</div>';
            unset($_SESSION['deleteF']);
        }
    ?>
        
    <p id="Titulo3" class="text-center text-light mt-5"> Administrar Foros <i class="bi bi ms-2"></i> </p>
    <p class="text-center text-light"> Aquí se muestran foros inhabiltados, ya sea para ser habilitados o eliminados <i class="bi bi ms-2"></i> </p>
    
    <div class="container">
        <div id="Producto" class="text-center text-light p-3 overflow-auto">
            <table class="table overflow-auto">
            <thead>
                <tr class="text-white bg-info bg-opacity-75"> 
                    <th class="border border-info"> ID </th>
                    <th class="border border-info"> Estado </th>
                    <th class="border border-info"> Nombre </th>
                    <th class="border border-info"> Autor </th>
                    <th class="border border-info"> Usuario </th>
                    <th class="border border-info"> Descripción </th>
                    <th class="border border-info"> <i class="bi bi-p encil"> </i> </th>
                    <th class="border border-info"> <i class="bi bi-t rash"> </i> </th>
                </tr>
            </thead>
    <?php
        include "../../codigo/controller/conexion.php";
        $con = new Configuracion;
        $conexion = $con->conectarDB();

        $sql = "SELECT * FROM foro 
                INNER JOIN estado ON foro.idEstado = estado.idEstado 
                INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario
                WHERE foro.idEstado = '2' LIMIT 21;";

        $foro = mysqli_query($conexion, $sql);
        
        while ($fila = mysqli_fetch_array($foro)) {
            $idForo = $fila['id'];
            $usuario = $fila['usuario'];
            $nombre = $fila['nombreLibro'];
            $autor = $fila['autorLibro'];
            $desc = $fila['descripcion'];
            $estado = $fila['estado'];
            
            echo "<tr class=' bg-dark text-secondary'>
                <td class='border border-info '> ".$idForo." </td>
                <td class='border border-info fw-semibold'> ".$estado." </td>
                <td class='border border-info'> ".$usuario." </td>
                <td class='border border-info'> ".$nombre." </td>
                <td class='border border-info'> ".$autor." </td>
                <td class='border border-info'> ".$desc." </td>
                <td class='linea border border-info' id='Link'> <a href='../../codigo/foro/aprobar.php?id=".$idForo."'> <i class='bi bi-spellcheck h3 text-white'> </i> </a> </td>
                <td class='linea border border-info'id='Link'> <a href='../../codigo/foro/eliminar.php?id=".$idForo."'><i class='bi bi-trash h4 text-white'> </i>  </td>
            </tr>";
        }


    ?>
        </table>
            <a href=""></a>
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
                $(this).attr("class", "bg-primary text-white bg-opacity-75 border border-info");
            });
            $(".linea").mouseout(function() {
                $(this).attr("class", "bg-dark text-secondary bg-dark border border-info");
            });
        })
    </script>
</body>
</html>