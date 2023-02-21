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
    <title> Añadir usuario </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Permite al administrador ingresar nuevos empleados, clientes e incluso administradores.">
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

        #Link a {
            text-decoration: none;
            color: #B9B4BF;
        }

        #Link a:hover {
            text-decoration: none;
            color: white;
            font-size: 17px;
        }
    </style>
</head>

<body class="bg-info ">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    <?php

    if (isset($_SESSION["ErrorDB"])) {
        echo '<div class="alert alert-danger m-0">
            <strong>ERROR:</strong> ';
        echo $_SESSION["ErrorDB"];
        '</div>';
        unset($_SESSION["ErrorDB"]);
    }

    if (isset($_SESSION["creado"])) {
        echo '<div class="alert alert-success m-0 alert-dismissible fade show">
            <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
            <strong> Exito:</strong> ';
        echo $_SESSION["creado"];
        echo '</div>';

        unset($_SESSION["creado"]);
    }

    ?>

    <p id="Titulo3" class="text-center text-light mt-5"> Añadir Usuarios <i class="bi bi ms-2"></i> </p>

    <div class="container-fluid justify-content-center">
        <form action="../../codigo/usuario/registro.php" method="post" name="registro">

            <div class="row justify-content-center">
                <div class="col-md-6 p-5 justify-content-center">
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su nombre" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" name="nombre" id="nombre" required>
                        <label for="nombre" class="text-light">Nombre</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su apellido" name="apellido" id="apellido" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                        <label for="apellido" class="text-light">Apellido</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="email" placeholder="Ingrese su correo" name="correo" id="correo" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                        <label for="correo" class="text-light">Correo</label>
                        <?php
                            if (isset($_SESSION["Correo"])) {
                                echo '<div class="alert alert-danger m-0">
                                    <strong>ERROR:</strong> ';
                                echo $_SESSION["Correo"];
                                '</div>';
                                unset($_SESSION["Correo"]);
                            }
                        ?>
                    </div>

                    <div class="form-floating m-4">
                        <select name="rol" id="rol" class="form-control bg-dark bg-opacity-50 text-light border-bottom border-light" required>
                            <option value="" selected="true" disabled> Selecione un rol</option>
                            <?php
                            include "../../codigo/controller/conexion.php";
                            $con = new Configuracion;
                            $conexion = $con->conectarDB();
                            $sql = "SELECT * from roles WHERE idRol='2' OR idRol='3';";
                            $resultado_consulta_mysql = mysqli_query($conexion, $sql);

                            while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                                $idRol = $fila['idRol'];
                                $rol = $fila['rolUsuario'];
                                echo "<option value='" . $idRol . "'> " . $rol  . "</option>";
                            }
                            echo "</select>";
                            ?>
                            <label for="">Rol</label>
                    </div>
                </div>

                <div class="col-md-6 p-5 justify-content-center ">
                    <div class="form-floating m-4">
                        <input type="text" placeholder="Ingrese su usuario" name="usuario" id="usuario" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                        <label for="usuario" class="text-light">Usuario</label>
                        <?php
                            if (isset($_SESSION["user"])) {
                                echo '<div class="alert alert-danger m-0">
                                    <strong>ERROR:</strong> ';
                                echo $_SESSION["user"];
                                '</div>';
                                unset($_SESSION["user"]);
                            }
                        ?>
                    </div>

                    <div class="form-floating m-4">
                        <input type="password" placeholder="Ingrese su contraseña" name="pass" id="pass" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                        <label for="pass" class="text-light">Contraseña</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="password" placeholder="Ingrese su contraseña" name="pass2" id="pass2" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                        <label for="pass" class="text-light">Validar Contraseña</label>
                    </div>


                    <div class="form-floating m-4">
                        <select name="pais" id="pais" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light" required>
                            <option value="" selected="true" disabled>Selecione el pais</option>
                            <?php
                            $sql2 = "SELECT * from pais ORDER BY nombrePais ASC";
                            $resultado_consulta_mysql = mysqli_query($conexion, $sql2);

                            while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                                $idPais = $fila['idPais'];
                                $nombrePais = $fila['nombrePais'];
                                echo "<option value='" . $idPais . "'> " . $nombrePais  . "</option>";
                            }
                            echo "</select>";
                            ?>
                            <label for="pais">Nombre del pais</label>
                    </div>
                </div>
            </div>
            <div class="text-center m-4">
                <button type="submit" id="enviar" class="btn btn-outline-light border rounded">Registrarse</button>
                <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-outline-light border border-light rounded"> Volver </a>
            </div>

        </form>
    </div>
    </div>

    <script src="../../../js/script/validar-password.js"></script>
</body>

</html>