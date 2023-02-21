<?php
	ob_start();
	session_start();
    if(!isset($_SESSION['Status'])){
        echo "<script> alert('Por favor inicie sesión para ver o crear un foro'); </script>";
        header('Location: ../libreria/foros.php');
    }

	include "../../controller/conexion.php";
	$con = new Configuracion;
	$conexion = $con->conectarDB();

	if (isset($_GET["id"]))
		$id = $_GET['id'];
	$query = "SELECT * FROM foro 
		INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario
		WHERE id = '$id' ORDER BY foro.fecha DESC";

	$result = $conexion->query($query);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$id = $row['id'];
		$idUsuario = $row['usuario'];
		$titulo = $row['nombreLibro'];
		$autor = $row['autorLibro'];
		$mensaje = $row['descripcion'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
?>

<!DOCTYPE html>
<html lang="es">

	<head>
		<title> <?php echo $titulo ?> </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
		<link rel="apple-touch-icon" href="../../img/icono2.png">
		<link rel="stylesheet" href="../../css/custom.css">
		<script src="../../js/bootstrap.bundle.min.js"> </script>
		<link rel="stylesheet" href="../../css/style.css">
		<script src="../../js/jquery-3.6.1.min.js"></script>
		<link href="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	</head>

	<body class="bg-secondary">
		<?php include '../../modules/menu-footer.php'; echo $idUsuario; echo $_SESSION["Status"]; ?>
		<?= menu("../.."); ?>

		<div class="container">
			<p class="text-end mt-5" id="" style="color: black;"> Creado por <?php echo $idUsuario ?> </p>
			<h1 class="text-center mt-5" id="Titulo2"> <?php echo $titulo ?> </h1>
			<h3 class="text-center"> <b> Autor: </b> <?php echo $autor ?> </h3>
			<p class="p-5" id="parrafo-msj"> <b> Descripcion: </b> <?php echo $mensaje ?> </p>


		<?php
		echo "<div class='text-end pe-5'>";
		echo "<button  type='button' class='btn btn-outline-primary rounded border border-primary' id='responder-foro' h ref='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder</button>";
		echo '<a type="button" id="regresar" name="regresar" onclick="history.back()" class="btn btn-outline-primary border border-primary rounded"> Volver </a>';
		echo "</div>";
	}
		// echo $_SESSION['idUsuario']
		?>

		<div class="container p-5 justify-content-center" id="respuesta" hidden>
			<form action="agregar.php" method="POST">
				<input type="hidden" name="identificador" value="1">
				<input type="hidden" name="respuestas" value="0">
				<input type="hidden" name="usuario" id="usuario" value="<?php echo $idUsuario ?>">   
				<input type="hidden" name="titulo" id="titulo" value="---">    
				<input type="hidden" name="autor" id="autor" value="---">    
				<textarea name="mensaje" id="mensaje" class="form-control bg-primary bg-opacity-75 text-white border border-primary" placeholder="Escribe aquí tu comentario" required></textarea>
				<div class="text-end">
					<button type="submit" class="btn btn-sm btn-primary rounded mt-3">&nbsp;&nbsp; Publicar &nbsp;&nbsp;</button>
				</div>
			</form>
		</div>
			
		</div>
		<?php
		$query2 = "SELECT * FROM foro 
			INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario
			WHERE identificador = '$id' ORDER BY foro.fecha DESC";
		$result2 = $conexion->query($query2);

		echo " <div class='container'> <hr> <p class='h4 ps-5 pt-3 pb-5 text-dark'> Respuestas: </p>";

		while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
			$id = $row['id'];
			$idUsuario = $row['usuario'];
			$titulo = $row['nombreLibro'];
			$autor = $row['autorLibro'];
			$mensaje = $row['descripcion'];
			$fecha = $row['fecha'];
			$respuestas = $row['respuestas'];
		?>

			<div class="bg-light mt-1 m-5 p-5 text-dark">
				<p class="text-end mb-4 fw-semibold" style="color: black;"> Comentario de <?php echo $idUsuario ?> </p>
				<span class="pt-3"> <?php echo $mensaje ?> </span> <br>
				<div class="text-end"> <small class="text-end"> <?php echo date("D - M - Y") ?> </small>
					<hr>
					<!-- Deberia ser un boton de respuesta, solo visible para el creador del foro -->
					<!-- Si la sesion iniciada es igual al usuario que creo el foro, entonces aparecer el boton -->
					<?php if($_SESSION['Status'] != $idUsuario){ 
						echo "┗|｀O′|┛";
					 }else{ ?>
						<button type="button" class="btn btn-outline-primary rounded border border-primary"> Intercambiar </button>
					<?php } ?>
				</div>
			</div>
		<?php
		}
		?>
		</div>
			</div>

		<div><?= footer(); ?></div>
		<script>
			$(document).ready(function() {
				var comentario = $('#responder-foro');


				comentario.click(function() {
					$("#respuesta").fadeToggle(300);
					$('#respuesta').prop('hidden', false);
					// comentario.prop('hidden', true);
				})
			});
		</script>
	</body>
</html>