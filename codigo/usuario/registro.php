<?php
session_start();

class Registro{
    function Cusuario(){
        include "../../controller/conexion.php";
        $conexion = new Configuracion();
        $con = $conexion->conectarDB();

        include '../../controller/seguridad.php';
        $encriptar = new Seguridad();
        $password = $encriptar->encriptarP($_POST["pass"]);

        // Validar correo
        $correo = "SELECT * FROM usuario WHERE correoUsuario='" . $_POST['correo'] . "';";
        $resultset = $con -> query($correo);

        // Validar usuario
        $usuario = "SELECT * FROM usuario WHERE usuario='" . $_POST['usuario'] . "';";
        $resultset2 = $con -> query($usuario);

        if($resultset -> num_rows > 0){
            $_SESSION["Correo"] = 'El correo ya existe, por favor inicie sesión o utilice otro.';
            header('Location: ../../vistas/usuario/registro.php');
        }
        elseif($resultset2 -> num_rows > 0){
            $_SESSION["user"] = 'El usuario ya existe';
            header('Location: ../../vistas/usuario/registro.php');
        } 
         else{
            $nombre = htmlentities($_POST['nombre']);
            $apellido = htmlentities($_POST['apellido']);
            $correo = htmlentities($_POST['correo']);
            $rol = 3;
            $usuario = htmlentities($_POST['usuario']);

            $sql = "INSERT INTO usuario(nombreUsuario, apellidoUsuario, correoUsuario, idRol, usuario, contrasenaUsuario, idEstado, idPais)
            VALUES('" . $nombre . "','" . $apellido . "','" . $correo . "','" . $rol . "','" . $usuario. "','" . $password . "','1','" . $_POST['select1'] . "');";

            if ($con->query($sql) === TRUE) {
                $_SESSION["Status"]="Se ha creado el usuario";
                header('Location: ../../vistas/usuario/registro.php');
            } else {
                $_SESSION["ErrorDB"] = "Error al crear en usuario, revise los campos";
                header('Location: ../../vistas/usuario/registro.php');
            }
        }
    }
}
$usuario = new Registro();
$usuario->Cusuario();