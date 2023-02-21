<?php
	ob_start();
    session_start();
    if(!isset($_SESSION['Status'])){
        $_SESSION['Foro'] = "<script> alert('Por favor inicie sesión para crear un foro'); </script>";
        header('Location: ../libreria/foros.php');
    }

	include "../../controller/conexion.php";
	$con = new Configuracion;
	$conexion = $con->conectarDB();
	
	if(!empty($_POST['mensaje'])){
		$autor=$_POST['autor'];
		$usuario=$_POST['usuario'];
		$titulo=$_POST['titulo'];
		$mensaje=$_POST['mensaje'];
		$respuestas=$_POST['respuestas'];
		$identificador=$_POST['identificador'];
		$fecha = date("d-m-y");
		
		//Evitamos que el usuario ingrese HTML
		$mensaje = htmlentities($mensaje);
		echo "identificador:";
		echo $identificador;
		
		//Grabamos el mensaje en la base de datos.
		$query = "INSERT INTO foro (nombreLibro, idUsuario, autorLibro, descripcion, idEstado, identificador, fecha, ult_respuesta) 
		VALUES ('$titulo', '$usuario', '$autor', '$mensaje', '2', '$identificador','$fecha','$fecha');";
		
		$result = $conexion->query($query);
		
		// if ($conexion->query($query) === TRUE) {
		// 	$_SESSION["creadoForo"] = "Su foro ha sido creado, pronto sera habilitado";
		// 	header('Location: ../libreria/foros.php');
		// }


		/* si es un mensaje en respuesta a otro actualizamos los datos */
		if ($identificador != 0){
			$query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE id='$identificador'";
			$result2 = $conexion->query($query2);
			echo $query2;
			header("Location: ../libreria/foros.php");
			exit();
		}

		$_SESSION['crearForo']= "Su foro ha sido creado, pronto sera habilitado";
		header("Location: ../libreria/foros.php");
		
	}
	
?>