<?php
//session_start();
class Configuracion
{
    private $servidor;
    private $user;
    private $password;

    function conectarDB()
    {
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "libreria";
        $con = new mysqli($servidor, $user, $password, $database);
        if ($con->connect_error) {
            $_SESSION["ErrorDB"] = "No ha sido posible establecer la conexión con la base de datos";
        } else {
        }
        return $con;
    }
}
// $conexion = new Configuracion();
// $conexion->conectarDB();
