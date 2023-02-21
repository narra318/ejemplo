<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }

    include "../../codigo/controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();

    $id = $_GET['id'];
    $sql = "UPDATE foro SET idEstado ='1' WHERE id='$id';";
    $actualizar= $conexion->query($sql);
    $_SESSION["actualizadoF"] = "Se ha habilitado el foro correctamente.";
    header("location: ../../vistas/foro/aprobar.php");
?>