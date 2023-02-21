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
    <title> Añadir Producto </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <link href="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <style>
        body {
            background-image: url('../../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }
    </style>
</head>

<body class="bg-info">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    <?php
    
    if(isset($_SESSION["Producto"])){
        echo '<div class="alert alert-success m-0 alert-dismissible fade show">
            <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
            <strong> Exito:</strong> ';
        echo $_SESSION["Producto"];
        echo '</div>';
        unset($_SESSION['Producto']);
    }

    
    if(isset($_SESSION["exito"])){
        echo '<div class="alert alert-success m-0 alert-dismissible fade show">
            <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
            <strong> Exito:</strong> ';
        echo $_SESSION["exito"];
        echo '</div>';
        unset($_SESSION['exito']);
    }

    if(isset($_SESSION["ErrorDB"])){
        echo '<div class="alert alert-danger m-0 alert-dismissible fade show">
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
        <h1 id="Titulo3" class="text-center  ms-5 mt-5">Agregar producto</h1>

        <div class="row justify-content-center">
            <div class=" col-md-6 p-5 justify-content-center">

                <form action="../../codigo/inventario/agregar.php" method="POST" enctype="multipart/form-data" class="" id="form-agregar">
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese el nombre del producto" name="nombreProducto" id="nombreProducto" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="nombreProducto" class="text-light">Nombre</label>
                    </div>

                    <div class="form-floating m-4">
                        <textarea name="descripcionProducto" id="descripcionProducto" cols="30" rows="10" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required style="height: 133px;"></textarea>
                        <label for="descripcionProducto" class="text-light">Descripcion</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="number" placeholder="Ingrese el precio del producto" name="precioProducto" id="precioProducto" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="precioProducto" class="text-light">Precio</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese el precio del producto" name="ISBN" id="ISBN" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="ISBN" class="text-light">ISBN</label>
                    </div>
                    
                    <div class="row m-4 ms-3 me-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" placeholder="Ingrese el número de páginas" name="n-paginas" id="n-paginas" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                                <label for="n-paginas" class="text-light">Número de Páginas</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="number" placeholder="Ingrese la cantidad" name="cantidad" id="cantidad" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                                <label for="cantidad" class="text-light">Cantidad</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating m-4">
                        <select name="editorial" id="editorial" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                            <option value="1">Seleccione editorial</option>
                            <?php
                            $sql5 = "SELECT * from editorial ORDER BY idEditorial ASC";
                            $resultado_consulta_mysql = mysqli_query($con, $sql5);

                            while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                                $idEditorial = $fila['idEditorial'];
                                $nombreEditorial = $fila['nombreEditorial'];
                                echo "<option value='" . $idEditorial . "'> " . $nombreEditorial  . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </select>
                    </div>
            </div>
            <div class="col-md-6 p-5 justify-content-center">
                <div class="form-floating m-4">
                    <input type="text" placeholder="Ingrese el número de páginas" name="autor" id="autor" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                    <label for="n-paginas" class="text-light">Autor(a)</label>
                </div>

                <div class="form-floating m-4">
                    <select name="categoria" id="categoria" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option value="1">Seleccione la categoria</option>
                        <?php
                        $sql3 = "SELECT * from categoria ORDER BY categoria ASC";
                        $resultado_consulta_mysql = mysqli_query($con, $sql3);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idCategoria = $fila['idCategoria'];
                            $nombreCategoria = $fila['categoria'];
                            echo "<option value='" . $idCategoria . "'> " . $nombreCategoria  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>
                </div>
                <div class="form-floating m-4">
                    <select name="tematica" id="tematica" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option value="1">Seleccione la tematica</option>
                        <?php
                        $sql4 = "SELECT * from tematica ORDER BY tematica ASC";
                        $resultado_consulta_mysql = mysqli_query($con, $sql4);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idTematica = $fila['idTematica'];
                            $nombreTematica = $fila['tematica'];
                            echo "<option value='" . $idTematica . "'> " . $nombreTematica  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>
                </div>
                <div class="form-floating m-4">
                    <input type="number" placeholder="Ingrese el número de páginas" name="publicacion" id="publicacion" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light ">
                    <label for="publicacion" class="text-light">Año de Publicación</label>
                </div>
                <div class="form-floating m-4">
                    <select name="pais" id="pais" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light">
                        <option value="" selected="true" disabled>Selecione el pais</option>
                        <?php


                        $sql2 = "SELECT * from pais ORDER BY nombrePais ASC";
                        $resultado_consulta_mysql = mysqli_query($con, $sql2);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idPais = $fila['idPais'];
                            $nombrePais = $fila['nombrePais'];
                            echo "<option value='" . $idPais . "'> " . $nombrePais  . "</option>";
                        }
                        echo "</select>";
                        ?>
                        <label for="pais">Nombre del pais</label>
                </div>

                <div class="form-floating m-4">
                    <input type="file" placeholder="Seleccione la imagen " name="archivoSubir" id="archivoSubir"  class=" form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                    <p class="text-end text-primary"> Recomendado: 662 x 1000 px </p>
                </div>

                <div class="form-floating m-4">
                    <select name="estado" id="estado" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option value="1">Seleccione el estado</option>
                        <?php
                        $sql6 = "SELECT * from estado ORDER BY idEstado ASC";
                        $resultado_consulta_mysql = mysqli_query($con, $sql6);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idEstado = $fila['idEstado'];
                            $estado = $fila['estado'];
                            echo "<option value='" . $idEstado . "'> " . $estado  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>

                </div>

            </div>

            <!-- <span class="msg-error error"></span><div id="recaptcha" class="g-recaptcha" data-sitekey=""></div> -->

            <div class="text-center m-4">
                <input type="submit" class="btn btn-light border rounded" id="btn-agregar" name="btn-agregar" value="Agregar producto "></button>
                <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-light border border-light rounded"> Volver </a>
            </div>
            </form>


        </div>


    </div>


    
</body>

</html>