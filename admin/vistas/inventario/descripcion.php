<?php 
    ob_start(); 
    session_start();
    if(!isset($_SESSION['Admin'])){
        header('Location: ../../index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title> Buscar Productos </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Página de consulta de productos, se puede revisar los productos por medio de una consulta por el ISBN o nombre del libro.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/style2.css">
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

<body class="bg-dark">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menuAdmin("../../../"); ?>

    <div class="mt-3 container h-100" id="tarjeta">
        <div class="row mb-5 h-100">
            <?php
            include "../../../controller/conexion.php";

            $conn = new Configuracion();
            $con = $conn->conectarDB();

            $id = $_GET['id'];
            $sql = "SELECT * FROM libro 
            INNER JOIN pais ON libro.idPais = pais.idPais  
            INNER JOIN editorial ON libro.idEditorial = editorial.idEditorial  
            INNER JOIN tematica ON libro.idTematica = tematica.idTematica  
            INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria  
            INNER JOIN estado ON libro.idEstado = estado.idEstado  
            where idLibro =$id";

            $resulset = $con->query($sql);

            while ($row = $resulset->fetch_assoc()) {
                // echo "<script> document.getElementById('Titulo').innerHTML =".$row['nombreLibro']."</script>";
            ?>
                <h1 id="Titulo1" class="mt-5 mb-2 text-center text-secondary"> <?php echo $row['nombreLibro']; ?> </h1>
                <h2 id="Titulo4" class="mb-5 text-center text-secondary"> <?php echo $row['autor']; ?> </h2>

                <div class="col-lg-3 mb-4 mt-4">
                    <div class="card bg-secondary bg-opacity-25">
                        <p class="bg-secondary text-center text-dark p-2"> Estado: <?php echo $row['estado']; ?></p> 
                        <img class="card-img-top img-fluid" src="../../codigo/inventario<?php echo $row['img']; ?>" alt="<?php echo $row['nombreLibro']; ?>">
                    </div>
                </div>   
                    
                <div class="col">
                    <div class="card p-5 mt-4 bg-dark bg-opacity-75">
                        <div class="overflow-auto">
                            <table class="table border border-secondary text-center text-secondary">
                                <tr> 
                                    <th class="border border-secondary"> ISBN: </th> 
                                    <th class="border border-secondary"> Cant: </th> 
                                    <th class="border border-secondary"> Editorial: </th> 
                                    <th class="border border-secondary"> Paginas: </th> 
                                    <th class="border border-secondary"> Año: </th> 
                                    <th class="border border-secondary"> País: </th> 
                                    <th class="border border-secondary"> Tematica: </th> 
                                    <th class="border border-secondary"> Categoria: </th>
                                </tr>
                                <tr>
                                    <td class="border border-secondary"> <?php echo $row['ISBN']; ?> </td>
                                    <td class="border border-secondary"> <?php echo $row['cantidad']; ?> </td>
                                    <td class="border border-secondary"> <?php echo $row['nombreEditorial']; ?> </td>
                                    <td class="border border-secondary"> <?php echo $row['paginas']; ?> </td>
                                    <td class="border border-secondary"> <?php echo $row['publicacion']; ?>  </td>
                                    <td class="border border-secondary">  <?php echo $row['nombrePais']; ?>  </td>
                                    <td class="border border-secondary">  <?php echo $row['tematica']; ?>  </td>
                                    <td class="border border-secondary"> <?php echo $row['categoria']; ?></td>
                                </tr>
                            </table>
                        </div>

                        <p class="card-text text-secondary" style="text-align:justify;"><?php echo $row['descripcionLibro']; ?></p>
                        <p class="card-text" style="font-size:25px;"><span class="text-secondary"><b>Precio: $<?php echo number_format($row['precioLibro']); ?></b> </span></p>
                                                
                        <div class="text-end">
                            <a class="btn btn-secondary border border-secondary rounded" href="<?php echo $_SERVER['HTTP_REFERER'] ?>" type="button"> &nbsp;&nbsp; Volver &nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>


            <?php
            } // endwhile
            ?>
            <br>
        </div>
        </div>

    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../../js/jquery-3.6.1.min.js"> </script>
    <script>
        function anadir(){
            document.getElementById('añadir').innerHTML = 'Añadido &nbsp; <i class="bi bi-cart-plus-fill"></i>';
        }
    </script>
</body>
</html>