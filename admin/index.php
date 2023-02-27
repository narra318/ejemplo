<?php
    ob_start();
    session_start();
    if(isset($_SESSION['Admin'])){
        header ('Location: ./vistas/inicio.php'); 
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Iniciar Sesión </title>
    <meta charset="UTF-8">
    <meta name="description" content="Este formulario es el inicio de sesion de administrador">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../img/icono2.png">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/login_reg.css">
    <link href ="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{
            background-image: url('../img/fondos/fondo-admin0.jpg');
            background-size: 100%;
        }
    </style>
</head>        
<?php 
    if(isset($_SESSION["Error"])){
        echo '<div class="alert alert-danger m-0 alert-dismissible fade show">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
                <i class="bi bi-exclamation-diamond-fill"> </i> ';
        echo $_SESSION["Error"];
        echo '</div>';
        session_unset();
        session_destroy();
    }
?>
<body class="bg-info">
    <div class="container-fluid form-control bg-dark body bg-opacity-50" style="height: 100vh;">

        <div class="containerLoginAd p-5 mt-5 mb-5" style="width: 35em;">

            <!-- Formulario -->
            <div class="container-fluid text-center text-white">
                <p id="Titulo3" class="text-white"> Iniciar Sesión </p>
            </div>
            
            <div class="container p-4">        
                <form action="./codigo/controller/login.php" method="POST">
                    
                    <div class="form-floating m-4">
                        <input type="text" class="form-control bg-white bg-opacity-75 text-dark border-bottom border-white rounded" id="email" placeholder="Ingrese su email o usuario" name="email" required>
                        <label for="email"> Usuario o email:</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="password" class="form-control bg-white bg-opacity-75 text-dark border-bottom border-white rounded" id="password" placeholder="Ingrese su Contraseña" name="password" required>
                        <label for="password">Password:</label>
                    </div>
                    <div class="text-end mt-5">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-light ms-4 me-4 rounded border border-light">  Ingresar <i class="bi bi-door-open ms-2"></i></button>
                            <a type="button" href="../index.php" class="btn btn-light rounded border border-light ms-4 me-4">  Volver a Inicio  <i class="bi bi-card-heading ms-2"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="../js/bootstrap.bundle.min.js"> </script>
</body>
</html>
