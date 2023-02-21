<?php
    ob_start();
    session_start();

    if(isset($_SESSION['carrito']) || isset($_POST['titulo'])){
        if(isset($_SESSION['carrito'])){
            $carrito_mio = $_SESSION['carrito'];

            if(isset($_POST['titulo'])){
                $id = $_POST['id'];
                $img = $_POST['img'];
                $titulo = $_POST['titulo'];
                $autor = $_POST['autor'];
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                $donde = -1;

                if($donde != -1){
                    $cuanto = $carrito_mio[$donde]['cantidad'] + $cantidad;
                    $carrito_mio[$donde] = array("id" => $id, 
                                                 "img" => $img, 
                                                 "titulo" =>  $titulo, 
                                                 "autor" => $autor, 
                                                 "precio" => $precio, 
                                                 "cantidad" => $cuanto);
                }else{
                    $carrito_mio[] = array("id" => $id, 
                                           "img" => $img, 
                                           "titulo" =>  $titulo, 
                                           "autor" => $autor, 
                                           "precio" => $precio, 
                                           "cantidad" => $cantidad);
                }
            }
        }else{
            $id = $_POST['id'];
            $img = $_POST['img'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];

            $carrito_mio[] = array("id" => $id, 
                                   "img" => $img, 
                                   "titulo" =>  $titulo, 
                                   "autor" => $autor, 
                                   "precio" => $precio, 
                                   "cantidad" => $cantidad);
        }

        $_SESSION['carrito'] = $carrito_mio;
    }

    header("Location: ".$_SERVER['HTTP_REFERER']."");

?>