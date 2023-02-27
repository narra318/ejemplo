<?php
    ob_start();
    session_start();

    if(isset($_SESSION['Foro2'])){
        echo $_SESSION['Foro2'];
        unset($_SESSION["Foro2"]);
    }

    if(isset($_SESSION["Status"])){
        header ('Location: ./logeado/index.php'); 
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Usuario - Iniciar Sesión Copy </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Este formulario es el inicio de sesion de los usuarios, para acceder a las funciones de la libreria.">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../../css/style.css">
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <?php 
        if(isset($_SESSION["Error"])){
            echo '<div class="alert alert-danger m-0"><i class="bi bi-exclamation-diamond-fill"> </i>';
            echo $_SESSION["Error"];
            echo '</div>';
            unset($_SESSION["Error"]);
        }
    ?>

    <!-- Formulario -->
    <div class="container-fluid text-center text-white mt-5 p-2" >
        <h1 id="Titulo1"> Iniciar Sesión</h1>
    </div>
    <div class="container p-4 ">        
        <form action="../../codigo/usuario/login.php" method="POST" >
            
            <div class="form-floating m-4">
                <input type="text" class="form-control bg-secondary bg-opacity-75 text-dark border-bottom border-primary" id="email" placeholder="Ingrese su email o usuario" name="email" required>
                <label for="email"> Usuario o email:</label>
            </div>
            <div class="form-floating m-4">
                <input type="password" class="form-control bg-secondary bg-opacity-75 text-dark border-bottom border-primary" id="password" placeholder="Ingrese su Contraseña" name="password" required>
                <label for="password">Password:</label>
            </div>
            <div class="text-end mt-5">
                <div class="btn-group">
                    <button type="submit" class="btn btn-outline-primary ms-4 me-4  border border-primary">  Ingresar <i class="bi bi-door-open ms-2"></i></button>
                    <a type="button" href="registro.php" class="btn btn-outline-dark border border-dark ms-4 me-4">  Registrarse  <i class="bi bi-card-heading ms-2"></i></a>
                </div>
            </div>
        </form>
        <div class="sticky-bottom"></div>
    </div>

    <?= footer(); ?>
</body>
</html>