<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Admin'])){
        $_SESSION['Foro2'] = "<script> alert('Ahora Inicie Sesión ╰（‵□′）╯'); </script>";
        header('Location: ../usuario/');
    }
    
    if(isset($_SESSION['Foro'])){
        echo $_SESSION['Foro'];
        // header('Location: ../libreria/foros.php');
        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Foros </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../../css/style.css">
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{
            background-image: url('../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }

        a{
            text-decoration: none;
        }

        #Link a{
            color: #B9B4BF;
        }#Link a:hover{
            color: white;
            font-size: 17px;
        }#caja:hover{
            box-shadow: 0px 0px 40px #B9B4BF;
            background-color: #fff;
        }

    </style>
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <div class="container">
        <h1 id="Titulo1" class="mt-5 text-center"> Buscar Foros </h1>
        <p id="" class="mt-2 text-center text-info"> Sistema de Intercambio de libros </p>

        <div class="text-end"><a type="button" href="../foros/formulario.php" class="btn btn-outline-primary border border-primary rounded"> Crear foro </a></div>

        <table class="table mt-5 mb-5" width="620px">
            <tr>
                <th width="20px">  </th>
                <th width="200px"> Creador </th>
                <th width="300px">Libro</th>
                <th width="200px">Autor</th>
                <th width="100px">Respuestas</th>
            </tr>
        <?php 
            include "../../controller/conexion.php";
            $con = new Configuracion;
            $conexion = $con->conectarDB();

            $query = "SELECT * FROM foro 
            INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario
            INNER JOIN estado ON foro.idEstado = estado.idEstado
            WHERE foro.identificador = 0 AND estado.idEstado=1 ORDER BY id DESC";
            $result = $conexion->query($query);
            
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
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
        ?>
        </table>
    </div>

    <div class=""><?= footer(); ?></div>
</body>
</html>