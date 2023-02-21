<?php 
    ob_start();
    session_start();
    include "../../controller/conexion2.php";
    include "../../controller/conexion.php";
    $conn = new Configuracion2();
    $con = $conn->conexion();

    $limite = 9;
    $paginaActual = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p']: 1;

    $stmt = $con -> prepare("SELECT libro.idLibro, libro.nombreLibro,  libro.autor, libro.precioLibro, libro.descripcionLibro, libro.ISBN, categoria.categoria, libro.img 
    FROM libro INNER JOIN categoria ON libro.idCategoria = categoria.idCategoria  
    WHERE idEstado='1' LIMIT ?,?;");

    $stmt -> bindValue(1, ($paginaActual - 1)* $limite, PDO::PARAM_INT);
    $stmt -> bindValue(2, $limite, PDO::PARAM_INT);
    $stmt -> execute();
    $pr = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $totalArticulos = $con -> query("SELECT * FROM libro;") -> rowCount();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title> Catálogo </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Página de catálago de la libreria papiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <div class="container-fluid text-light">
        <div class="row">
            <div class=" text-end mt-3">
                <input style="width: 40%; height: 100%; border: transparent; border-bottom: #53213d solid 1px; margin-right: 15px; background:none;" type="text" name="buscar" id="buscar" placeholder="Ingrese el nombre del libro, autor o ISBN" >
                <button class="btn btn-outline-primary rounded" id="btnBuscar" style="margin-top: 0;">Buscar <i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
    <h1 id="Titulo1" class="mt-5 text-center"> Catálogo </h1>
    <div class="container-fluid mb-5">
            <div class="container">
                <div class="row justify-content-center" id="contenedor">
                    <?php
                    $conn = new Configuracion();
                    $con = $conn->conectarDB();

                    // inicia foreach;
                    foreach ($pr as $row):
                    ?>
                        <div class="col-md-4 mb-3 mt-5 text-center">
                            <div class="card bg-primary bg-opacity-50 h-100" style="object-fit: cover;">
                                <div class="row g-0" style="height: 100% ; object-fit: cover;">
                                    <div class="col-lg-6">
                                        <div class="p-3" style="height: 100%; object-fit: cover;">
                                            <img class="img-fluid h-100" style="height:100%; object-fit: cover;" src="../../admin/codigo/inventario<?php echo $row['img']; ?>" alt="<?php echo $row['nombreLibro']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <p class="card-title text-white mt-3 h5"><?php echo $row['nombreLibro']; ?></p>
                                            <span class="card-title text-white"><?php echo $row['autor']; ?></span>
                                            <p class="card-text text-secondary"><small class=""> <?php echo $row['categoria']; ?> </small> <br>
                                            <small class="text"> ISBN: <?php echo $row['ISBN']; ?> </small></p>
                                            <p class="card-text"><span class="text-primary"><b>Precio: $<?php echo  number_format($row['precioLibro']); ?></b> </span></p>

                                            <a type="button" href="descripcion.php?id=<?php echo $row['idLibro']; ?>" value="Ver más" class="btn btn-primary"> Ver más </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    // endforeach;
                 endforeach; ?>
                </div>
            </div>
            
        <div class="container mt-5 text-center">
            <ul class="pagination justify-content-center">
                <?php if($paginaActual > 1): ?>
                <li class="page-item me-3">
                    <a class="rounded btn btn-outline-primary border border-primary btn-sm" href="catalogo.php?pagina=producto&p=<?php echo $paginaActual-1; ?>"> Anterior </a>
                </li>
                <?php endif ?>
                
                <?php 
                    $i = 1;
                    if($totalArticulos > ($paginaActual*$limite)-$limite+ count($pr)): 
                        $x = ($totalArticulos/$limite);
                        for($i; $i<$x; $i+1):
                ?>
                    <li class="page-item me-2"><a class="btn btn-outline-primary border border-primary btn-sm rounded-pill" href="catalogo.php?pagina=producto&p=<?php echo $i ?>"><?php echo $i ?></a></li> 
                <?php   
                        $i=$i+1;
                        endfor;
                    endif;
                ?>

                <?php if($totalArticulos > ($paginaActual*$limite)-$limite+ count($pr)): ?>
                    <li class="page-item ms-2">
                        <a class="btn btn-outline-primary border border-primary btn-sm rounded" href="catalogo.php?pagina=producto&p=<?php echo $paginaActual+1; ?>">
                        Siguiente
                    </a></li> 
                <?php endif ?>
            </ul>
        </div>
    </div>

    <?= footer(); ?>

    
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <script>
    $(document).ready(function(){
        var input = $('#btnBuscar');

        input.on('click', function(){
            var valor = $('#buscar').val();
            console.log(valor);

            $.ajax({
                type: "get",
                url: "search.php",
                data: { q: valor},
                success: function(data) {
                    window.location.href = 'search.php?q=' + valor;
                }
            });
        });
    });
    </script>
</body>

</html>