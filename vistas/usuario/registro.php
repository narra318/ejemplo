<?php
    ob_start();
    session_start();
    if(isset($_SESSION["Status"])){
        header ('Location: ./logeado/index.php'); 
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Registrarse </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Este formulario permite a los usuarios registrarse en caso de no estar registrados y deseen logearse">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/login_reg.css">
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <?php 

        if(isset($_SESSION["ErrorDB"])){
            echo '<div class="alert alert-danger m-0">
            <strong>ERROR:</strong> ';
            echo $_SESSION["ErrorDB"];
            '</div>';

            unset($_SESSION["ErrorDB"]);
        }

        if(isset($_SESSION["Status"])){
            echo '<div class="alert alert-success m-0">
            <strong> Exito:</strong> ';
            echo $_SESSION["Status"];
            echo '</div>';
            
            unset($_SESSION["Status"]);
        }
    
    ?>

<div class="body">

    <!-- Formulario -->
    <div class="containerLogin p-4 mt-5 mb-5" style="width: 50em">
        <div class="container-fluid text-center text-white mt-5 p-2" id="Titulo1">
            <h1 id="Titulo1"> Registrarse </h1>
        </div>

        <div class="container mb-5">
            <form role="form" name="registro" class="m-3" action="../../codigo/usuario/registro.php" method="post">
                <div class="input-group">
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre" class="form-control bg-secondary bg-opacity-50 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="nombre" class="text-dark fw-semibold"> Nombre</label>
                    </div>
                    
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" id="apellido" class="form-control bg-secondary bg-opacity-50 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="apellido" class="text-dark fw-semibold"> Apellido </label>
                    </div>    
                </div>

                <div class="input-group">
                    <div class="form-floating m-4">
                        <input type="email"  placeholder="Ingrese su correo" name="correo" id="correo" class="form-control bg-secondary bg-opacity-50 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="correo" class="text-dark fw-semibold"> <i class="bi bi-envelope"> &nbsp; </i> Correo</label>
                        <?php
                            if(isset($_SESSION["Correo"])){
                                echo '<div class="alert alert-danger m-0 text-center">
                                <strong><i class="bi bi-exclamation-circle-fill"> </i> Error: </strong> ';
                                echo $_SESSION["Correo"];
                                echo '</div>';
                                unset($_SESSION["Correo"]);
                            }
                        ?>
                    </div>    

                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su usuario" name="usuario" id="usuario" class="form-control bg-secondary bg-opacity-50 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="usuario" class="text-dark fw-semibold">  <i class="bi bi-person"> &nbsp; </i> Usuario</label>
                        <?php
                            if(isset($_SESSION["user"])){
                                echo '<div class="alert alert-danger m-0 text-center">
                                <strong> <i class="bi bi-exclamation-circle-fill"> </i> Error:</strong> ';
                                echo $_SESSION["user"];
                                echo '</div>';
                                unset($_SESSION["user"]);
                            }
                        ?>
                    </div>    
                </div>

                <div class="input-group">
                    <div class="form-floating m-4">
                        <input type="password" placeholder="Ingrese su contraseña" name="pass" id="pass" class="form-control bg-secondary bg-opacity-75 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="pass" class="text-dark fw-semibold">  <i class="bi bi-lock"> &nbsp; </i> Contraseña</label>
                    </div>
                    
                    <div class="form-floating m-4">
                        <input type="password" placeholder="Ingrese su contraseña" name="pass2" id="pass2" class="form-control bg-secondary bg-opacity-75 text-dark fw-semibold border-bottom border-primary" required>
                        <label for="pass2" class="text-dark fw-semibold">  <i class="bi bi-lock-fill"> &nbsp; </i> Confirmar contraseña</label>
                    </div>    
                </div>
                
                <div class="text-center mt-5 mb-4 d-grid">
                    <div class="btn-group mt-2 mb-2">
                        <button type="submit" class="btn btn-primary border border-dark rounded ms-5"> Registrarse <i class="bi bi-person-plus ms-3"></i> </button>
                        <a type="button" href="index.php" class="btn btn-outline-primary border border-primary rounded ms-4 me-5">  Volver  </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <?= footer(); ?>

    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../js/script/validar-password.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>