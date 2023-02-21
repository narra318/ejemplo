<?php
    include "../../codigo/controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();

    // Sentencia SQL
    $sql = "SELECT usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.correoUsuario, 
    roles.rolUsuario, usuario.usuario, estado.estado, pais.nombrePais FROM usuario 
    INNER JOIN pais ON usuario.idPais = pais.idPais 
    INNER JOIN estado ON usuario.idEstado = estado.idEstado 
    INNER JOIN roles ON usuario.idRol = roles.idRol 
    WHERE (usuario.usuario LIKE ? OR usuario.correoUsuario LIKE ?) LIMIT 21;";
    $stmt = $conexion -> prepare($sql);
    $stmt -> bind_param("ss", $_GET['query'], $_GET['query']);

    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($idUsuario, $nombre, $apellido, $correo, $Rol, $usuario, $Estado, $pais);

    $valor = $stmt -> fetch(); 
    $stmt -> close();

    if($valor == null ){
        echo "No se encontraron resultados";
    }else{

    echo '<div class="container">
    <div class="row justify-content-center overflow-auto">
        <div class="col-md text-center text-white">
                <table class="table bg-dark border border-primary bg-opacity-75 rounded mt-3">
                    <thead><tr class="text-white"> 
                        <th class="border border-info bg-info bg-opacity-50"> ID </th>
                        <th class="border border-info bg-info bg-opacity-50"> Rol </th>
                        <th class="border border-info bg-info bg-opacity-50"> Estado </th>
                        <th class="border border-info bg-info bg-opacity-50"> Usuario </th>
                        <th class="border border-info bg-info bg-opacity-50"> Nombre </th>
                        <th class="border border-info bg-info bg-opacity-50"> Apellido </th>
                        <th class="border border-info bg-info bg-opacity-50"> Correo </th>
                        <th class="border border-info bg-info bg-opacity-50"> Pais </th>
                    </tr></thead>';
                    
              echo "<tr class='linea bg-dark text-secondary bg-dark'>
                    <td class='border border-info bg-dark'> ".$idUsuario." </td>
                    <td class='border border-info bg-dark'> ".$Rol." </td>
                    <td class='border border-info bg-dark'> ".$Estado." </td>
                    <td class='border border-info bg-dark'> ".$usuario." </td>
                    <td class='border border-info bg-dark'> ".$nombre." </td>
                    <td class='border border-info bg-dark'> ".$apellido." </td>
                    <td class='border border-info bg-dark'> ".$correo." </td>
                    <td class='border border-info bg-dark'> ".$pais." </td>

                    </tr>";
           echo "</table>";}

?>
