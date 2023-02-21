<?php
    

class catalogo
{

    function mostrarCatalogo()
    {

        include_once "../controller/conexion.php";
        $conn = new Configuracion();
        $con = $conn->conectarDB();



        $sql = "SELECT  nombreLibro, precioLibro, paginas,
                   publicacion, ISBN,  img FROM libro";


        $resulset = $con->query($sql);

        if ($resulset->num_rows > 0) {
            foreach ($resulset as $row) {

                $lista[] = $row;
                //$row['nombreLibro'];

                //print_r($row['img']) ;
            }
        }
    }
}

$catalogo = new Catalogo();
$catalogo->mostrarCatalogo();
