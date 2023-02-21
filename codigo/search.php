<?php
    if (isset($_GET['q'])) {
        $valor = $_GET['q'];
        echo $valor;

        include '../controller/conexion.php';
        $conexion = new Configuracion();
        $con = $conexion -> conectarDB();

        $valor = mysqli_real_escape_string($con, $valor);

        $sql = "SELECT idLibro, nombreLibro, autor, descripcionLibro, precioLibro, ISBN, idEstado, img FROM libro 
        WHERE (nombreLibro LIKE '%$valor%' OR autor LIKE '%$valor%' OR ISBN LIKE '%$valor%') AND idEstado = '1';";

        $resulset = $con->query($sql);

        if (mysqli_num_rows($resulset) == 0) {
            echo "<p>No se encontraron resultados para la búsqueda: " . $valor."</p>";
            exit();
        }

        while ($row =  $resulset->fetch_assoc()) { 
            $dec = $row['descripcionLibro'];
            $dec =substr($dec, 0, 150);
            $dec .="...";
            ?>
            <div class="row productos p-3 pt-5">
                <div class="col-lg-12 pb-4">
                    <div class="card h-100 bg-primary bg-opacity-25" style="border: transparent;">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="../admin/codigo/inventario/<?php echo $row['img'] ?>" class="card-img-top h-100 img-fluid p-2" alt="<?php echo $dec ?>">
                            </div>

                            <div class="col-lg-9 p-4">
                                <div class="card-body p-3">
                                    <p class="card-title h2"> <?php echo $row['nombreLibro'] . " - " . $row['autor'] ?> </p>
                                    <p class="card-text"> <?php echo $dec ?> </p>
                                    <p class="card-text"> <b> Precio: </b> $<?php echo number_format($row['precioLibro']) ?> </p>
                                </div>
                            
                                <div class="card-footer pb-4" style="background-color: transparent; border: transparent;">
                                    <div class="btn-group container-fluid">
                                        <a class="btn fw-bold btn-outline-primary bi bi-cart-plus" type="button" href="#" class="producto"> Añadir </a>
                                        <a class="btn fw-bold btn-outline-primary bi bi-eye" type="button" href="../vistas/libreria/descripcion.php?id=<?php echo $row['idLibro']; ?>" class="producto"> Ver Producto </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
        $resulset->free();
    }
?>