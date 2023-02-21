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
    <title> Catálogo </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <link href="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body *{
            background-image: url('../../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }
    </style>
</head>

<body>
    <h1>Libros</h1>

    <div class="container-fluid">
        <div class="ms-5 me-5 mb-5">
            <div class="container">
                <div class="row justify-content-center" id="contenedor">

                    <?php
                    include "../../codigo/controller/conexion.php";
                    $sql = "SELECT  nombreLibro, precioLibro, descripcionLibro, ISBN, img FROM libro";
                    $conn = new Configuracion();
                    $con = $conn->conectarDB();


                    $resulset = $con->query($sql);

                    while ($row = $resulset->fetch_assoc()) {
                    ?>
                        <div class="col-4 mb-3 mt-5   text-center">
                            <div class="card h-100" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                       
                                            <img  class="img-fluid "src="<?php echo $row['img'];?>" alt="<?php echo $row['nombreLibro'];?>">
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['nombreLibro']; ?></h5>
                                            
                                            <p class="card-text"><span class="text-danger"><b>$<?php echo $row['precioLibro']; ?></b> </span></p>
                                            <p class="card-text"><small class="text-muted"> ISBN -- <?php echo $row['ISBN']; ?> </small></p>
                                            <a href="#" class="btn btn-primary">comprar</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>