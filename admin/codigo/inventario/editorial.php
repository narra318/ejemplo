<?php


class editorial
{
    function editar()
    {
        include "../controller/conexion.php";
        $conn = new Configuracion();
        $con = $conn->conectarDB();
        $sql = "INSERT INTO editorial (idEditorial, nombreEditorial) VALUES (NULL,'" . $_POST['nueva-editorial'] . "' )";
        if ($con->query($sql) === TRUE) {
            $_SESSION["exito"] = "Se ha creado la editorial exitosamente";
            header('Location: ../../vistas/inventario/agregar-producto.php');
        } else {
            $_SESSION["ErrorDB"] = "Error al ingresar en la base de datos";
            header('Location: ../../vistas/inventario/editorial.php');
        }
    }
}

$agregado = new editorial();
$agregado->editar();
?>