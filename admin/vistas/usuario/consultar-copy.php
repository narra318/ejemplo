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
    <title> Buscar Usuarios </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Página de consulta de usuarios, se puede revisar los registrados por medio de tablas o por medio de una consulta de usuario.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../../js/jquery-3.6.1.min.js"> </script>
    <link href ="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{
            background-image: url('../../../img/fondos/fondo-admin.jpg');
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

    </style>
</head>
<body class="bg-dark ">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>
        
    <p id="Titulo3" class="text-center text-light mt-5"> Buscar Usuarios <i class="bi bi ms-2"></i> </p>

    <div class="container mb-2">

    <div class="text-end m-4">
        <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-light border border-light rounded"> &nbsp; Volver &nbsp; </a>
    </div>

    <div>
        <div class="form-floating mt-4">
            <input type="text" class="form-control bg-dark text-secondary text-center" name="buscar" id="buscar" onkeyup="buscarUsuario(this.value)" placeholder="Ingrese el usuario">
            <label for="buscar" class="text-center">¿Desea buscar un registro por usuario o correo?</label>
        </div>
    </div>
    </div>
    
    <div class="container">
        <div id="Usuario" class="text-center text-light bg -info bg-opacity-75 p-3"> </div>
 
        <div id="Tabla"> </div>
    </div>

    <script>
            
        $(document).ready(function(){
            $(".linea").mouseover(function(){
                $(this).attr("class", "bg-primary text-white bg-opacity-75");
            });
            $(".linea").mouseout(function() {
                $(this).attr("class", "bg-dark text-secondary bg-dark p-0");
            });
        })
    </script>
</body>
</html>