<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html  lang="es">
<head>
    <title> Inicio </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Pagina de inicio donde se muestran todos los menús.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <style>
        body{
            background-image: url('../../img/fondos/fondo-admin.jpg');
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
        body::-webkit-scrollbar{
            width: 0px;
            background-color: #3f4e784d;
            overflow: hidden;
            
        }
    </style>
</head>
<body>
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../.."); ?>
<div class="container-fluid form-control bg-dark  bg-opacity-50" style="height: 100vh;">
    
        <p id="Titulo3" class="text-center p-5"> Bienvenid@ <br> ¿Que operación desea realizar? </p>

        <div class="container justify-content-center ">
        <div class="row mx-auto g-4">
            <div class="col-md-4">
                <div class="card h-100 border-dark mb-3 bg-dark text-light rounded bg-opacity-75 p-4"">
                    <h4 class="card-header text-center"> Usuarios <i class="bi bi-person-rolodex ms-2"></i> </h4>
                    <div class="card-body text-secondary">
                        <p class="card-text" id="Link">
                            <a href="../vistas/usuario/registro.php" > <i class="bi bi-person-fill pe-3"></i> Agregar Usuarios <br> </a>
                            <a href="../vistas/usuario/modificar-listar.php"> <i class="bi bi-person-fill pe-3"></i> Modificar Usuarios <br></a>
                            <a href="../vistas/usuario/consultar.php"> <i class="bi bi-person-fill pe-3"></i> Buscar Usuarios</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card h-100 border-dark mb-3 bg-dark text-light rounded bg-opacity-75 p-4">
                    <h4 class="card-header text-center"> Inventario <i class="bi bi-journals ms-1"></i> </h4>
                    <div class="card-body text-secondary">
                        <p class="card-text" id="Link">
                            <a href="../vistas/inventario/agregar-producto.php"> <i class="bi bi-journal-text pe-3"></i> Agregar Productos <br> </a>
                            <a href="../vistas/inventario/modificarp-listar.php"> <i class="bi bi-journal-text pe-3"></i> Modificar Productos <br></a>
                            <a href="../vistas/inventario/consultar-producto.php"> <i class="bi bi-journal-text pe-3"></i> Buscar Productos</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-dark mb-3 bg-dark text-light rounded bg-opacity-75 p-4">
                    <h4 class="card-header text-center"> Foros <i class="bi bi-body-text ms-2"></i> </h4>
                    <div class="card-body text-secondary">
                        <p class="card-text" id="Link">
                            <a href="./foro/gestor.php"> <i class="bi bi-input-cursor-text pe-3"></i> Gestionar Intercambio <br></a>
                            <a href="./foro/formulario.php"> <i class="bi bi-input-cursor-text pe-3"></i> Agregar Foro <br></a>
                            <a href="./foro/aprobar.php"> <i class="bi bi-input-cursor-text pe-3"></i> Habilitar / Eliminar Foro <br></a>
                            <a href="./foro/consultar.php"> <i class="bi bi-input-cursor-text pe-3"></i> Listar / Inhabilitar Foro <br></a>
                            <!-- <a href="./foro/eliminar.php"> <i class="bi bi-input-cursor-text pe-3"></i> Eliminar Foro <br> </a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <!-- <a type="button" href="../codigo/controller/logout.php" class="btn btn-outline-secondary border mt-5"> Cerrar Sesión </a> -->
        </div>

        
</div>
</body>
</html>