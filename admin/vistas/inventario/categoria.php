<?php
    ob_start();
    session_start();
    if (!isset($_SESSION['Admin'])) {
        header('Location: ../../index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title> Añadir categoria </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <link href="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }
    </style>
</head>

<body>
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    
    <?php

    if (isset($_SESSION["ErrorDB"])) {
        echo '<div class="alert alert-success m-0 alert-dismissible fade show">
            <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
            <strong> Error:</strong> ';
        echo $_SESSION["ErrorDB"];
        echo '</div>';
        unset($_SESSION['ErrorDB']);
    }

    include "../../../controller/conexion.php";
    $conn = new Configuracion();
    $con = $conn->conectarDB();
    ?>
    <div class="container-fluid p-5">
        <div class="float-end me-5">
            <?php include "../inventario/sidebar.php" ?>
        </div>
    </div>
    <div class="container-fluid justify-content-center">

        <p id="Titulo3" class="text-center h1 mt-5"> Agregar categoria</p>
        <div class="row justify-content-center">
            <div class=" col-md-12 justify-content-center">

                <form action="../../codigo/inventario/categoria.php" class="p-5" method="POST" class="">
                    <div class="form-floating">
                        <input type="text" placeholder="Ingrese el nombre del producto" name="nueva-categoria" id="nueva-categoria" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="nueva-categoria" class="text-light">Ingrese una nueva Categoria</label>
                    </div>
                    <div class="text-center m-4 mb-0">
                        <button type="submit" class="btn btn-light border rounded   ">Agregar categoria</button>
                        <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-light border border-light rounded"> Volver </a>
                    </div>
                </form>

                <div class="container overflow-auto p-4 pt-0 text-white">
                    <p> Las categorias actuales son: </p>

                    <table class="table overflow-auto w- 50">
                        <thead>
                            <tr class="text-white bg-info bg-opacity-75 text-center">
                                <th class="border border-info"> ID </th>
                                <th class="border border-info"> Nombre </th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM categoria ORDER BY idCategoria ASC;";

                        $productos = mysqli_query($con, $sql);

                        while ($fila = mysqli_fetch_array($productos)) {
                            $id = $fila['idCategoria'];
                            $nombre = $fila['categoria'];

                            echo "<tr class='bg-dark text-secondary'>
                                    <td class='border border-info text-center'> " . $id . " </td>
                                    <td class='border border-info'> " . $nombre . " </td>
                                </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>