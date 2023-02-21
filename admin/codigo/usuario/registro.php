<?php
session_start();

class Registro{
    function Cusuario(){
        include '../controller/conexion.php';
        $conn = new Configuracion();
        $con = $conn->conectarDB();


        include "../controller/seguridad.php";
        $encriptar = new Seguridad();
        $contrasena = $encriptar->encriptarP($_POST['pass']);

        // Validar correo
        $correo = "SELECT * FROM usuario WHERE correoUsuario='" . $_POST['correo'] . "';";
        $resultset = $con -> query($correo);

        // Validar usuario
        $usuario = "SELECT * FROM usuario WHERE usuario='" . $_POST['usuario'] . "';";
        $resultset2 = $con -> query($usuario);

        if($resultset -> num_rows > 0){
            $_SESSION["Correo"] = 'El correo ya esta registrado.';
            header('Location: ../../vistas/usuario/registro.php');
        }
        elseif($resultset2 -> num_rows > 0){
            $_SESSION["user"] = 'El usuario ya existe';
            header('Location: ../../vistas/usuario/registro.php');
        } 
        else{
            $sql = "INSERT INTO usuario(nombreUsuario, apellidoUsuario, correoUsuario, idRol, usuario, contrasenaUsuario, idEstado, idPais) 
            VALUES('" . htmlentities($_POST['nombre']) . "','" . htmlentities($_POST['apellido']) . "','" . htmlentities($_POST['correo']) . "','" . $_POST['rol'] . "','" . htmlentities($_POST['usuario']) . "','" . $contrasena . "','1','" . $_POST['pais'] . "');";

            if ($con->query($sql) === TRUE) {
                $_SESSION["creado"] = "Se ha creado el usuario exitosamente";
                header('Location: ../../vistas/usuario/registro.php');
            } else {
                $_SESSION["ErrorDB"] = "Error al crear en usuario en la base de datos ";
                header('Location: ../../vistas/usuario/registro.php');
            }
        }
    }
}
$usuario = new Registro();
$usuario->Cusuario();

?>