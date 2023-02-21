<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['Status'])){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Usuario </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Este pagina es la de inicio de los usuarios, donde podran revisar su información.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../../img/icono2.png">
    <link rel="stylesheet" href="../../../css/custom.css">
    <script src="../../../js/bootstrap.bundle.min.js"> </script>
    <script src="../../../js/jquery-3.6.1.min.js"> </script>
    <link rel="stylesheet" href="../../../css/style.css">
    <link href ="../../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- <style>
        body{
            background-image: url('../../../img/fondos/fondo3.jpg');
            background-size: 100%;
        }
    </style> -->
</head>
<body class="bg-secondary" onload="hora()">
    <?php include '../../../modules/menu-footer.php'; ?>
    <?= menu("../../.."); ?>

    <div class="container">
    
<!-- Reloj Inicio -->
    <div class="mt-5">
    <?php
        date_default_timezone_set("America/Bogota");

        $hora = date('h:i A');
        strtotime($hora);

        if (strtotime($hora) <= strtotime('12:00:00')){
            echo '<h3 class="text-start text-primary"> Buenos Días '.$_SESSION["Status"].' </h3>';
            echo "<p id='espacio' class='text-start'> <br>".$hora; echo "<br></p>";
            // echo '<img src="./img/line20.gif" class="mt-4" alt="">';

        } elseif(strtotime($hora) <= strtotime('19:00:00')){
            echo '<h3 class="text-center text-primary"> Buenas Tardes '.$_SESSION["Status"].' </h3>';
            echo "<p id='espacio' class='text-center'> <br>".$hora; echo "<br></p>";
            // echo '<img src="./img/summer23.gif" class="mt-4" alt="">';
            
        }elseif(strtotime($hora) <= strtotime('23:59:59')){
            echo '<h3 class="text-end text-primary"> Buenas Noches '.$_SESSION["Status"].' </h3>';
            echo "<p id='espacio' class='text-end'> <br>".$hora; echo "<br></p>";
            // echo '<img src="./img/line25.gif" class="mt-4" alt="">';

        }
        
    ?>
    </div>
<!-- Reloj Fin -->
        <h2> Foros </h2>
        <table class="table mt-5 mb-5 text-black" style="border: 1px solid purple;" width="620px">
            <thead class=" h4 text-center" id="tablac">
                <th width="20px" style="border-right: 1px solid purple;" >  </th>
                <th width="200px" style="border-right: 1px solid purple;" > Estado </th>
                <!-- <th width="200px" style="border-right: 1px solid purple;" > Usuario </th> -->
                <th width="300px" style="border-right: 1px solid purple;" >Libro</th>
                <th width="200px" style="border-right: 1px solid purple;" >Autor</th>
                <th width="100px" style="border-right: 1px solid purple;" >Respuestas</th>
            </thead>

<?php 
    include "../../../controller/conexion.php";
    $con = new Configuracion;
    $conexion = $con->conectarDB();
    $idd =  $_SESSION['idUsuario'];

    $query = "SELECT foro.id, estado.estado, foro.idEstado, usuario.usuario, foro.nombreLibro, foro.autorLibro, foro.respuestas FROM foro 
    INNER JOIN usuario ON foro.idUsuario = usuario.idUsuario INNER JOIN estado ON foro.idEstado = estado.idEstado
    WHERE foro.identificador = 0 AND foro.idUsuario = '$idd' ORDER BY foro.idEstado ASC";
    $result = $conexion->query($query);

    // if (!isset($result)) {
    //     echo '<script> $("#tablac").prop("hidden", true) </script>';
    //     echo '<tr class="text-center"> <td colspan="6" class="p-4 h4 bg-danger fw-bold">No ha creado foros aún</td> </tr>';
    // }

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $id = $row['id'];
        $estado = $row['estado'];
        // $idEstado = $row['idEstado'];;
        $usuario = $row['usuario'];
        $titulo = $row['nombreLibro'];
        $autor = $row['autorLibro'];
        $respuestas = $row['respuestas'];
        
        if ($estado == "Habilitado") {
            echo "<tr class='bg-success bg-opacity-50'>";  
        }elseif($estado == "Inhabilitado"){
            echo "<tr class='bg-warning bg-opacity-50'>";
        }
            echo "<td style='border-right: 1px solid purple;' > <a href='../../foros/foro.php?id=$id'>Ver</a></td>";
            echo "<td style='border-right: 1px solid purple;' >$estado</td>";
            
            // echo "<td style='border-right: 1px solid purple;' >$usuario</td>";
            echo "<td style='border-right: 1px solid purple;' >$titulo</td>";
            echo "<td style='border-right: 1px solid purple;' >$autor</td>";
            echo "<td style='border-right: 1px solid purple;' >$respuestas</td>";
        echo "</tr>";
    }
?>
        </table>

        <div class="text-end mb-5"> 
            <a class="btn btn-primary rounded" type="button" href="../../../codigo/usuario/logout.php"> Cerrar Sesión </a>
        </div>
    </div>

<div class=""> <?= footer(); ?> </div> 
    <script>
        function hora() {
            const fecha = new Date();

            let H = fecha.getHours();  
            let M = fecha.getMinutes();
            let S = fecha.getSeconds();

            H = (H < 10) ? "0" + H:H; 
            M = (M < 10) ? "0" + M:M;
            S = (S < 10) ? "0" + S:S;

            var horaT = H + " : " + M + " : " + S;
            document.getElementById('espacio').innerHTML = horaT;

            setTimeout(hora, 1000);
        }
    </script>
</body>
</html>