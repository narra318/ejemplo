<?php ob_start(); session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title> Resultado de busqueda </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Página de catálago de la libreria papiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        .contenedor {
            display: flex;
            justify-content: center; 
            align-items: center;
            height: 100%;
        }
        .contenedor img {
            max-height: 100%;
            max-width: 100%;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <div class="container mt-5 justify-content-center">

<?php
    if (isset($_GET['q'])) {
        $valor = $_GET['q'];

        include '../../controller/conexion.php';
        $conexion = new Configuracion();
        $con = $conexion -> conectarDB();

        $valor = mysqli_real_escape_string($con, $valor);

        $sql = "SELECT idLibro, nombreLibro, autor, descripcionLibro, precioLibro, ISBN, idEstado, img FROM libro 
        WHERE (nombreLibro LIKE '%$valor%' OR autor LIKE '%$valor%' OR ISBN LIKE '%$valor%') AND idEstado = '1';";

        $resulset = $con->query($sql);

        if (mysqli_num_rows($resulset) == 0) {
            echo "<h1> Resultados de la búsqueda </h1>";
            echo "<p>No se encontraron resultados para la búsqueda: " . $valor."</p>";
            
            echo '<div class="fixed-bottom">';
                 footer();
            echo '</div>';
            exit();
        }

        echo "<h1> Resultados de la búsqueda: &quot;$valor&quot; </h1>";

        while ($row =  $resulset->fetch_assoc()) { 
            $dec = $row['descripcionLibro'];
            $dec =substr($dec, 0, 160);
            $dec .="...";
        ?>
            <div class="row productos p-3 pt-5">
                <div class="col-lg-12">
                    <div class="card bg-info bg-opacity-25 border border-info">
                        <div class="row">
                            <div class="col-sm-2 ps-4">
                                <div class="contenedor"> <img src="../../admin/codigo/inventario/<?php echo $row['img'] ?>" class="card-img-top p-2" alt="<?php echo $dec ?>" style=""></div>
                            </div>

                            <div class="col-sm-10">
                                <div class="card-body p-3 pt-4">
                                    <p class="card-title h2"> <?php echo $row['nombreLibro'] . " - " . $row['autor'] ?> </p>
                                    <p class="card-text text-black"> <?php echo $dec ?> </p>
                                    <p class="card-text text-black h3 pt-2"> <b> Precio: </b> $<?php echo number_format($row['precioLibro']) ?> </p>
                                </div>
                            
                                <div class="card-footer pb-4" style="background-color: transparent; border: transparent;">
                                    <div class="btn-group container-fluid">
                                        <a class="btn fw-bold btn-primary bi bi-cart-plus rounded-pill btn-sm" type="button" href="#" class="producto"> Añadir </a> &nbsp; &nbsp; 
                                        <a class="btn fw-bold btn-primary bi bi-eye rounded-pill btn-sm" type="button" href="descripcion.php?id=<?php echo $row['idLibro']; ?>" class="producto"> Ver Producto </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        echo '</div>';

        if (mysqli_num_rows($resulset) != 0) { footer(); }
        
        $resulset->free();
    } 
    
    ?>
    

    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"> </script>
</body>
</html>