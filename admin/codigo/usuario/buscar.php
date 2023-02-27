<?php
    include "../../codigo/controller/conexion.php";
    $con = new Configuracion();
    $conexion = $con->conectarDB();

    $busqueda = $_GET["q"];

    $busqueda = mysqli_real_escape_string($conexion, $busqueda);

    // Sentencia SQL
    $sql = "SELECT usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.correoUsuario, 
    roles.rolUsuario, usuario.usuario, estado.estado, pais.nombrePais FROM usuario 
    INNER JOIN pais ON usuario.idPais = pais.idPais 
    INNER JOIN estado ON usuario.idEstado = estado.idEstado 
    INNER JOIN roles ON usuario.idRol = roles.idRol 
    WHERE (usuario.usuario LIKE '%$busqueda%' OR usuario.correoUsuario LIKE '%$busqueda%') LIMIT 21;";

    $resultado = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($resultado) > 0){
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
                    </tr></thead>';            
                        

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr class='linea bg-dark text-secondary'>
                        <td class='border border-info'> ".$fila['idUsuario']." </td>
                        <td class='border border-info'> ".$fila['rolUsuario']." </td>
                        <td class='border border-info'> ".$fila['estado']." </td>
                        <td class='border border-info'> ".$fila['usuario']." </td>
                        <td class='border border-info'> ".$fila['nombreUsuario']." </td>
                        <td class='border border-info'> ".$fila['apellidoUsuario']." </td>
                        <td class='border border-info'> ".$fila['correoUsuario']." </td>
                        </tr>";
        }

        echo "</table></div></div></div>";
        echo '<script>
                $(".linea").mouseover(function(){
                    $(this).attr("class", "bg-primary text-white bg-opacity-75");
                });
                $(".linea").mouseout(function() {
                    $(this).attr("class", "bg-dark text-secondary bg-dark p-0");
                });
            </script>';

    }else{
        echo "<div class='container justify-content-center text-light text-center'> No se encontraron resultados </div>";
    }
?>
