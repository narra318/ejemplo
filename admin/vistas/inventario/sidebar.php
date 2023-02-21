<!DOCTYPE html>
<html lang="es">

<head>
    <title> Sidebar </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <link href="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../../../img/fondos/fondo-admin.jpg');
            background-size: 100%;
        }

        ul {

            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }

        #linksito {

            font-size: 23px;
        }
    </style>
</head>

<body>

    <button class="btn btn-success mx-3" data-bs-toggle="offcanvas" data-bs-target="#intro"><i style="font-size:40px ;" class="bi bi-menu-down"></i></button>
    <div class="offcanvas offcanvas-end bg-dark text-white" id="intro" style="width:240px;">
        <div class="offcanvas-header">


        </div>

        <div class="offcanvas-body mt-5">
            <ul>
                <li class="nav-item" ><a id="linksito" href="http://localhost/libreria/admin/vistas/inventario/categoria.php" class="nav-link"><i class="bi bi-bookmark-check-fill"></i>Añadir Categoría</a></li>
                <hr>
                <li class="nav-item"><a id="linksito" href="http://localhost/libreria/admin/vistas/inventario/editorial.php" class="nav-link"><i class="bi bi-journal-text"></i>Añadir Editorial</a></li>
                <hr>
                <li class="nav-item"><a id="linksito" href="http://localhost/libreria/admin/vistas/inventario/tematica.php" class="nav-link"><i class="bi bi-lightbulb"></i>Añadir Temática</a></li>

            </ul>
        </div>
        <div class="offcanvas-body">
            <div class="d-grid gap-2 mx-auto">
                <button class="btn btn-light" data-bs-dismiss="offcanvas" style="font-size:30px;"> Cerrar </button>
            </div>
        </div>


    </div>
</body>

</html>