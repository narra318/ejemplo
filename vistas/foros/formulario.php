<?php
    ob_start();
    session_start();

	if(isset($_GET["respuestas"])){
		$respuestas = $_GET['respuestas'];
    }else{
            $respuestas = 0;
    }if(isset($_GET["identificador"])){ 
            $identificador = $_GET['identificador'];
    }else{
            $identificador = 0;
    }
    
    if(!isset($_SESSION['Status'])){
        $_SESSION['Foro'] = "<script> alert('Por favor inicie sesión para crear un foro'); </script>";
        header('Location: ../libreria/foros.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Foros </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../../css/style.css">
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

  <div class="container">
        <h1 id="Titulo1" class="mt-5 text-center"> Crear Foro </h1>
        <!-- <p id="" class="mt-2 text-center text-info">  </p> -->

        <section class="section-sm">
            <div class="container">
                <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form method="POST" action="agregar.php" class="mt-4">
                        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['idUsuario'] ?>">    
                        <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
                        <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">

                        <div class="form-group">
                            <label for="titulo" class="mb-2 mt-4 text-info"> Nombre Libro: </label>
                            <input type="text" name="titulo" id="titulo" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="Lumpen" required>
                        </div>
                        <div class="form-group">
                            <label for="autor" class="mb-2 mt-4 text-info"> Autor Libro: </label>
                            <input type="text" name="autor" id="autor" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="Aixa Bonilla" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje" class="mb-2 mt-4 text-info"> Descripción: </label>
                            <textarea name="mensaje" id="mensaje" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="Lumpen pone voz a los desgarradas vivencias de los excluidos..." required></textarea>
                        </div>
                        <div class="text-end m-4 p-4">
                            <button type="submit" class="btn btn-primary rounded"> Crear Foro </button>
                            <a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-outline-primary border border-primary rounded"> Volver </a>
                        </div>
                    </form>
                </div>
                </div>
            </div>
          </section>
    </div>
    <?= footer(); ?>
</body>
</html>