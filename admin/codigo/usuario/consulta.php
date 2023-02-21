<?php
// Conexion a base de datos
    include "../../codigo/controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();

    // Sentencia SQL
    $sql = "SELECT usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.correoUsuario, roles.rolUsuario, usuario.usuario, estado.estado, pais.nombrePais from usuario INNER JOIN pais ON usuario.idPais = pais.idPais INNER JOIN estado ON usuario.idEstado = estado.idEstado INNER JOIN roles ON usuario.idRol = roles.idRol where usuario.idRol=?;";
    $stmt = $conexion -> prepare($sql);
    $stmt -> bind_param("s", $_GET['query']);

    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($idUsuario, $nombre, $apellido, $correo, $idRol, $usuario, $Estado, $pais);

echo '<div class="container">
    <div class="row justify-content-center overflow-auto">
        <div class="col-md text-center text-white">
                <table class="table bg-dark border border-primary bg-opacity-75 rounded mt-3">
                    <tr class="text-white bg-info bg-opacity-75"> 
                        <th class="border border-info"> ID </th>
                        <th class="border border-info"> Estado </th>
                        <th class="border border-info"> Usuario </th>
                        <th class="border border-info"> Nombre </th>
                        <th class="border border-info"> Apellido </th>
                        <th class="border border-info"> Correo </th>
                        <th class="border border-info"> Pais </th>
                    </tr>';
                    
             while($stmt -> fetch()){
              echo "<tr class='linea bg-dark text-secondary bg-dark'>
                        <td class='border border-info'> ".$idUsuario." </td>
                        <td class='border border-info'> ".$Estado." </td>
                        <td class='border border-info'> ".$usuario." </td>
                        <td class='border border-info'> ".$nombre." </td>
                        <td class='border border-info'> ".$apellido." </td>
                        <td class='border border-info'> ".$correo." </td>
                        <td class='border border-info'> ".$pais." </td>
                    </tr>";}
                    $stmt -> close();
           echo "</table>";
?>
