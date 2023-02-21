<?php
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Inventario </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Inicio de apartado de inventario, aqui se podra dirigir a los links de añadir, modificar y modificar productos.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../../img/icono2.png">
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <link href ="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{
            background-image: url('../../../img/fondos/fondo-admin.jpg');
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
<body class="bg-dark">
    <?php include '../../../modules/menu/menu-admin.php'; ?>
    <p id="Titulo3" class="text-center text-light mt-5"> Inventario <i class="bi bi-journal-text ms-2"></i> </p>

    <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a href="agregar-producto.php"><div class="card h-100 bg-dark p-4 bg-opacity-75" id="caja">
            <div class="card-body">
                <p class="card-title text-center text-secondary"><i class="bi bi-journal-plus" style="font-size: 100px;"></i></p>
                <h1 class="card-text text-center text-secondary"> Agregar Productos </h1>
            </div>
            </div></a>
        </div>
        <div class="col">
            <a href=""><div class="card h-100 bg-dark p-4 bg-opacity-75" id="caja">
            <div class="card-body">
                <p class="card-title text-center text-secondary"><i class="bi bi-journal-medical" style="font-size: 100px;"></i></p>
                <h1 class="card-text text-center text-secondary"> Modificar Productos </h1>
            </div>
            </div></a>
        </div>
        <div class="col">
            <a href=""><div class="card h-100 bg-dark p-4 bg-opacity-75" id="caja">
            <div class="card-body">
                <p class="card-title text-center text-secondary"><i class="bi bi-journal-richtext" style="font-size: 100px;"></i></p>
                <h1 class="card-text text-center text-secondary"> Buscar Productos </h1>
            </div>
            </div></a>
        </div>
    </div>
    </div>

</body>
</html>