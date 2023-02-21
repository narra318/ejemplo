<?php
    class Configuracion2{
        function conexion(){
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $database = "libreria";
            try{
                return new PDO('mysql:host='.$servidor.'; dbname='.$database.'; charset=UTF8', $usuario, $password);
            }catch(PDOException $e){
                exit('Error de conexión con la base de datos');
            }
        }
    }
?>