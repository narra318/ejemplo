<?php
class categoria
{
    function categorizar()
    {
        include "../controller/conexion.php";
        $conn = new Configuracion();
        $con = $conn->conectarDB();
        $sql = "INSERT INTO categoria (idCategoria, categoria) VALUES (NULL,'" . $_POST['nueva-categoria'] . "' )";
        if ($con->query($sql) === TRUE) {
           echo $_SESSION["exito"] = 'Se ha creado correctamente';
           header('Location: ../../vistas/inventario/agregar-producto.php');
        } else {
            echo $_SESSION["ErrorDB"]= 'Error al crear la categoria';
        unset($_SESSION['ErrorDB']);
            header('Location: ../../vistas/inventario/categoria.php');
        }
    }
}

$agregado = new categoria();
$agregado->categorizar();
?>