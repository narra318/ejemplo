<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }

    $limite = 21;
?>

<!DOCTYPE html>
<html  lang="es">
<head>
    <title> Modificar Usuario </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Pagina para modificar los usuarios registrados, ya sea para inhabilitarlo o cambiar otro dato, aplica a empleado o cliente.">
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
        }

    </style>
</head>
<body class="bg-dark ">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    <?php

        if(isset($_SESSION["actualizado"])){
            echo '<div class="alert alert-success m-0 alert-dismissible fade show">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
                <strong> Exito:</strong> ';
            echo $_SESSION["actualizado"];
            echo '</div>';
            unset($_SESSION["actualizado"]);
        }
    ?>

    <div class="container mt-5">
        <p id="Titulo3" class="text-center"> Modificar Usuarios </p>
        <p class="text-white text-center"> Por favor seleccione un usuario </p>

        <div class="overflow-auto">
        <table class="table overflow-auto">
            <thead>
                <tr class="text-white bg-info bg-opacity-75 text-center"> 
                    <th class="border border-info "> ID </th>
                    <th class="border border-info "> Rol </th>
                    <th class="border border-info "> Estado </th>
                    <th class="border border-info "> Usuario </th>
                    <th class="border border-info "> Nombre </th>
                    <th class="border border-info "> Apellido </th>
                    <th class="border border-info "> Correo </th>
                    <th class="border border-info "> Pais </th>
                    <th class="border border-info ">  </th>
                </tr>
            </thead>
    <?php
        include "../../codigo/controller/conexion.php";
        $con = new Configuracion;
        $conexion = $con->conectarDB();

        $sql = "SELECT usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.correoUsuario, 
            roles.rolUsuario, usuario.usuario, estado.estado, pais.nombrePais FROM usuario 
            INNER JOIN pais ON usuario.idPais = pais.idPais 
            INNER JOIN estado ON usuario.idEstado = estado.idEstado 
            INNER JOIN roles ON usuario.idRol = roles.idRol
            -- WHERE usuario.idUsuario BETWEEN 1 AND 11
        ORDER BY usuario.idRol ASC LIMIT $limite;";

        $usuarios = mysqli_query($conexion, $sql);
        
        while ($fila = mysqli_fetch_array($usuarios)) {
            $idUsuario = $fila['idUsuario'];
            $Rol = $fila['rolUsuario'];
            $Estado = $fila['estado'];
            $usuario = $fila['usuario'];
            $nombre = $fila['nombreUsuario'];
            $apellido = $fila['apellidoUsuario'];
            $correo = $fila['correoUsuario'];
            $pais = $fila['nombrePais'];
            
            echo "<tr class='linea bg-dark text-secondary bg-dark'>
            <td class='border border-info '> ".$idUsuario." </td>
            <td class='border border-info'> ".$Rol." </td>
            <td class='border border-info'> ".$Estado." </td>
            <td class='border border-info'> ".$usuario." </td>
            <td class='border border-info'> ".$nombre." </td>
            <td class='border border-info'> ".$apellido." </td>
            <td class='border border-info'> ".$correo." </td>
            <td class='border border-info'> ".$pais." </td>
            <td class='border border-info' id='Link'> <a href='../../codigo/usuario/modificar.php?id=".$idUsuario."'> Editar <i class= 'bi bi-pencil'></i> </a> </td>
            </tr>";
            
        }
    ?>
        </table>
            <!-- <span id="Link"><a value="<?php // echo $in=11; $f=20; ?>" class="btn"> Página 2 </a></span> -->
        </div>
    </div>
        <script>
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