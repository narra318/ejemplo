<?php


class tematica
{
    function tematizar()
    {
        include "../controller/conexion.php";
        $conn = new Configuracion();
        $con = $conn->conectarDB();
        $sql = "INSERT INTO tematica (idTematica, tematica) VALUES (NULL,'" . $_POST['nueva-tematica'] . "' )";
        if ($con->query($sql) === TRUE) {
            $_SESSION["exito"] = "Se ha creado la tematica exitosamente";
            header('Location: ../../vistas/inventario/agregar-producto.php');
        } else {
            $_SESSION["ErrorDB"] = "Error al ingresar en la base de datos";
            header('Location: ../../vistas/inventario/tematica.php');
        }
    }
}

$agregado = new tematica();
$agregado->tematizar();
?>