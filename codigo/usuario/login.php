<?php
session_start();
class Login{
    private $email;
    private $password;
    function inicio(){
        $email = $_POST["email"];
      
      include '../../controller/seguridad.php';
        $encriptar = new Seguridad();
        $password = $encriptar->encriptarP($_POST["password"]);

      include "../../controller/conexion.php";
        $conexion = new Configuracion();
        $con = $conexion->conectarDB();

        $sql = "SELECT * FROM usuario WHERE (correoUsuario='".$email."' OR usuario='".$email."') AND contrasenaUsuario='".$password."' AND (idRol='3' OR idRol='1') AND idEstado='1';";
        $resultset = $con -> query($sql);

        if($resultset -> num_rows > 0){
            while ($fila = $resultset -> fetch_assoc()){
                $_SESSION['Status'] = $fila['nombreUsuario'];
                $_SESSION['idUsuario'] = $fila['idUsuario'];
                header('Location: ../../vistas/usuario/logeado/');
            }
        }else{
            $_SESSION["Error"] = "Por favor verifique sus credenciales de acceso";
            header('Location: ../../vistas/usuario/');
        }
        $con -> close();
        
    }
}
$init = new Login();
$init->inicio();
?>