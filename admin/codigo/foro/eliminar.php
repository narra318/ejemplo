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
    $sql = "DELETE FROM foro WHERE id='$id';";
    $actualizar= $conexion->query($sql);
    $_SESSION["deleteF"] = "Se ha eliminado el foro exitosamente.";
    header("location: ../../vistas/foro/aprobar.php");
?>