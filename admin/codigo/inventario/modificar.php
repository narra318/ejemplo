<?php
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }

    include "../../codigo/controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();

    $id = $_GET['id'];
    $sql = "SELECT * FROM libro 
            INNER JOIN pais ON libro.idPais = pais.idPais
            INNER JOIN editorial ON libro.idEditorial = editorial.idEditorial  
            INNER JOIN tematica ON libro.idTematica = tematica.idTematica  
            INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria   
            INNER JOIN estado ON libro.idEstado = estado.idEstado 
    WHERE idLibro='$id' LIMIT 21;";

    $modificar= $conexion->query($sql);
    $dato= $modificar->fetch_array();

    if(isset($_POST['modificar'])){
        
        $id= $_POST['id'];        
        $idLibro = $conexion->real_escape_string($_POST['id']);
        $nombre = $conexion->real_escape_string($_POST['nombreLibro']);
        $autor = $conexion->real_escape_string($_POST['autor']);
        $descripcion = $conexion->real_escape_string($_POST['descripcionLibro']);
        $precio = $conexion->real_escape_string($_POST['precioLibro']);
        $cantidad = $conexion->real_escape_string($_POST['cantidad']);
        $editorial = $conexion->real_escape_string($_POST['nombreEditorial']);
        $pag = $conexion->real_escape_string($_POST['paginas']);
        $pub = $conexion->real_escape_string($_POST['publicacion']);
        $pais = $conexion->real_escape_string($_POST['idPais']);
        $tematica = $conexion->real_escape_string($_POST['tematica']);
        $isbn = $conexion->real_escape_string($_POST['ISBN']);
        $categoria = $conexion->real_escape_string($_POST['categoria']);
        $estado = $conexion->real_escape_string($_POST['estado']);

        $actualiza="UPDATE libro SET nombreLibro='$nombre', autor='$autor', descripcionLibro='$descripcion', precioLibro='$precio', cantidad='$cantidad', idEditorial='$editorial', paginas='$pag', publicacion='$pub', idPais='$pais', idTematica='$tematica', ISBN='$isbn', idCategoria='$categoria', idEstado='$estado' WHERE idLibro='$id'";
        
        $actualizar= $conexion->query($actualiza);
        $_SESSION["actualizadoI"] = "Se ha actualizado el producto correctamente";
        header("location: ../../vistas/inventario/modificarp-listar.php");
    }

?>
<!DOCTYPE html>
<html  lang="es">
<head>
    <title> Modificar Producto - <?php echo $dato['nombreLibro']; ?> </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Permite al administrador modificar los usuarios existente sin embargo no puede modificar la contraseña.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
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
<body>
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    <div class="container-fluid justify-content-center">
        <h1 id="Titulo3" class="text-center fw-semibold ms-5 mt-5">Modificar Libro <br> <?php echo $dato['nombreLibro']; ?></h1>

        <div class="row justify-content-center">
            <div class=" col-md-6 p-5 justify-content-center">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="id" id="id" value="<?php echo $dato['idLibro'];?>">
                
                    <div class="form-floating m-4">
                        <input type="text" value="<?php echo $dato['nombreLibro'];?>" placeholder="Ingrese el nombre del producto" name="nombreLibro" id="nombreLibro" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="nombreLibro" class="text-light">Nombre</label>
                    </div>

                    <div class="form-floating m-4">
                        <textarea name="descripcionLibro" id="descripcionLibro" cols="30" rows="10" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required style="height: 133px;"> <?php echo $dato['descripcionLibro'];?> </textarea>
                        <label for="descripcionLibro" class="text-light">Descripcion</label>
                    </div>

                    <div class="form-floating m-4">
                        <input type="text" value="<?php echo $dato['precioLibro'];?>" placeholder="Ingrese el precio del producto" name="precioLibro" id="precioLibro" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="precioLibro" class="text-light">Precio</label>
                    </div>
                    <div class="form-floating m-4">
                        <input type="text" value="<?php echo $dato['ISBN'];?>" placeholder="Ingrese el precio del producto" name="ISBN" id="ISBN" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <label for="ISBN" class="text-light">ISBN</label>
                    </div>

                    <div class="row m-4 ms-3 me-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" value="<?php echo $dato['paginas'];?>" placeholder="Ingrese el número de páginas" name="paginas" id="paginas" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                                <label for="paginas" class="text-light">Número de Páginas</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="number" value="<?php echo $dato['cantidad'];?>" placeholder="Ingrese la cantidad" name="cantidad" id="cantidad" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                                <label for="cantidad" class="text-light">Cantidad</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating m-4">
                        <select name="nombreEditorial" id="nombreEditorial" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                            <option selected="true" value="<?php echo $dato['idEditorial'];?>"> <?php echo $dato['nombreEditorial'];?> </option>
                            <?php
                            $sql5 = "SELECT * FROM editorial";
                            $resultado_consulta_mysql = mysqli_query($conexion, $sql5);

                            while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                                $idEditorial = $fila['idEditorial'];
                                $nombreEditorial = $fila['nombreEditorial'];
                                echo "<option value='" . $idEditorial . "'> " . $nombreEditorial  . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </select>
                        <label for="nombreEditorial">Editorial</label>
                    </div>
            </div>
            <div class="col-md-6 p-5 justify-content-center">
                <div class="form-floating m-4">
                    <input type="text" placeholder="Ingrese el número de páginas" value="<?php echo $dato['autor']; ?>" name="autor" id="autor" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                    <label for="autor" class="text-light">Autor(a)</label>
                </div>

                <div class="form-floating m-4">
                    <select name="categoria" id="categoria" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option selected="true" value="<?php echo $dato['idCategoria'];?>"><?php echo $dato['categoria'];?></option>
                        <?php
                        $sql3 = "SELECT * from categoria";
                        $resultado_consulta_mysql = mysqli_query($conexion, $sql3);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idCategoria = $fila['idCategoria'];
                            $nombreCategoria = $fila['categoria'];
                            echo "<option value='" . $idCategoria . "'> " . $nombreCategoria  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>
                    <label for="categoria"> Categoria </label>
                </div>

                <div class="form-floating m-4">
                    <select name="tematica" id="tematica" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option selected="true" value="<?php echo $dato['idTematica'];?>"><?php echo $dato['tematica'];?></option>
                        <?php
                        $sql4 = "SELECT * from tematica";
                        $resultado_consulta_mysql = mysqli_query($conexion, $sql4);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idTematica = $fila['idTematica'];
                            $nombreTematica = $fila['tematica'];
                            echo "<option value='" . $idTematica . "'> " . $nombreTematica  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>
                    <label for="tematica">Tematica</label>
                </div>
                <div class="form-floating m-4">
                    <input type="text" value="<?php echo $dato['publicacion'];?>" placeholder="Ingrese el número de páginas" name="publicacion" id="publicacion" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light ">
                    <label for="publicacion" class="text-light">Año de Publicación</label>
                </div>
                <div class="form-floating m-4">
                    <select name="idPais" id="idPais" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light">
                        <option selected="true" value="<?php echo $dato['idPais'];?>"> <?php echo $dato['nombrePais'];?> </option>
                        <?php


                        $sql2 = "SELECT * from pais";
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

                <div class="form-floating m-4">
                    <select name="estado" id="estado" class="form-control bg-dark bg-opacity-75 text-light border-bottom border-light " required>
                        <option selected="true" value="<?php echo $dato['idEstado'];?>"> <?php echo $dato['estado'];?> </option>
                        <?php
                        $sql6 = "SELECT * from estado";
                        $resultado_consulta_mysql = mysqli_query($conexion, $sql6);

                        while ($fila = mysqli_fetch_array($resultado_consulta_mysql)) {
                            $idEstado = $fila['idEstado'];
                            $estado = $fila['estado'];
                            echo "<option value='" . $idEstado . "'> " . $estado  . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </select>

                </div>

            </div>

            <div class="text-center m-4">
                <input type="submit" class="btn btn-light border rounded" id="modificar" name="modificar" value="Modificar"></button>
                <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-light border border-light rounded"> Volver </a>
            </div>
            </form>


        </div>


    </div>


    
</body>
</html>