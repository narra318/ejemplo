<?php ob_start(); session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Nosotros </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../../css/style.css">
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <div class="container">
        <h1 id="Titulo1" class="mt-5 text-center"> Sobre Nosotros </h1>
        
        <div class="row m-5 justify-content-center">
            <div class="col-md-4 mt-3 d-none d-lg-block"> <img src="../../img/nosotros/estante.png" class="d-none d-lg-block" style="width: 100%"> </div>
            <div class="col-md ms-4"> 
                <p> 
                    Queremos que las librerías sean santuarios a los que se acuda buscando mucho más de lo que se puede encontrar en un almacén. Que los escritores y los artistas sean auténticas estrellas capaces de influir en el espíritu de su época.
                    Librerías entre cuyas estanterías nacieron escritores, artistas, músicos, cineastas, actores, pero también locos, dementes, profetas, políticos y otros Quijotes necesarios para que una sociedad sea libre y sueñe.
                    <br><br>
                    La Librería Papiro de Colombia fue fundada en la ciudad de Barranquilla en septiembre de 1941, y fue pionera en la modalidad de autoservicio y en la venta y distribución de revistas en el país.
                    En la Librería Papiro nos destacamos también por la novedosa integración de heladerías y cafeterías dentro de nuestras sedes (en las de Cali particularmente); en la actualidad contamos con 31 Agencias a nivel Nacional, librerías en seis ciudades (Bogotá, Cali, Medellín, Barranquilla, Cartagena y Pereira) situadas en los mejores centros comerciales de cada una de estas ciudades.
                </p>
            </div>
        </div>

        <hr style="border: 1px #53213d dashed;">

        <div class="p-2">
            <p style="font-size: 47px;" class="text-center" id="Titulo2"><i class="bi bi-chat-right-heart text-info p-3" style="font-size: 40px;"></i> Reseña Historica</p>
            <p class="p-5 pt-3">
                La idea surgió en el año 2001 por el señor Edgar Achuri Q.E.P. de descentralizar la distribución de libros la cual se materializo en el año 2002 siendo una librería dedicada exclusivamente a la venta de libros de texto y literatura en general cuya misión es suplir las necesidades de la población estudiantil de la región suroccidente, ofreciendo las principales editoriales nacionales y extranjeras.
                Librería Papiro inicia operaciones en agosto del 2002 en la 17 avenida de la zona 3 y luego de 10 años se traslada a las nuevas instalaciones en la 22 avenida de la misma zona en donde actualmente se encuentra.
                <br><br>
                Mensualmente recibimos un promedio de 500 novedades diversas, entre los que se destacan los libros de mayor venta en todo el mundo; los bestseller de éxito siempre están primero en nuestras librerías.
                Tradición, ambiente agradable, amplio y variado surtido y atención personalizada son nuestras cartas de presentación para atender a todo aquel que busca un libro.
            </p>
        </div>

        <div class="p-2">
            <div class="row">
                <div class="col-md-6"> 
                    <p style="font-size: 47px;" id="Titulo2" class="text-end"> Misión <i class="bi bi-chat-right-heart text-info p-3" style="font-size: 40px;"></i> </p> 
                    <p class="p-5 pt-3 text-end pe-3">
                        Satisfacer íntegramente las necesidades de nuestros clientes, ofreciendo el mayor surtido de libros de texto, lectura e innovación digital.  Satisfaciendo las necesidades de la comunidad educativa con una amplia gama de editoriales para garantizar el aprendizaje y fomentar el amor a la lectura en el público en general.
                    </p>
                </div>
                <div class="col-md-6"> 
                    <p style="font-size: 47px;" id="Titulo2" class="text-start"> <i class="bi bi-chat-left-heart text-info p-3" style="font-size: 40px;"></i> Visión  </p> 
                    <p class="p-5 pt-3 ps-3">
                        Satisfacer íntegramente las necesidades de nuestros clientes, ofreciendo el mayor surtido de libros de texto, lectura e innovación digital.  Satisfaciendo las necesidades de la comunidad educativa con una amplia gama de editoriales para garantizar el aprendizaje y fomentar el amor a la lectura en el público en general.
                    </p>
                </div>
            </div>
        </div>

        <div class="p-2 text-center">
            <p style="font-size: 47px;" id="Titulo2"><i class="bi bi-chat-right-heart text-info p-3" style="font-size: 40px;"></i> Editoriales Vinculadas </p>
            <p class="p-5 pt-2 ms-5 me-5">
                <i class="bi bi-box2-heart text-info p-3"></i> Alfaomega Colombiana 
                <i class="bi bi-box2-heart text-info p-3"></i> Angosta Editores 
                <i class="bi bi-box2-heart text-info p-3"></i> Babel Libros 
                <i class="bi bi-box2-heart text-info p-3"></i> Calixta Editores 
                <i class="bi bi-box2-heart text-info p-3"></i> Cangrejo Editores 
                <i class="bi bi-box2-heart text-info p-3"></i> ECOE Ediciones
                <i class="bi bi-box2-heart text-info p-3"></i> Editorial Atenea
                <i class="bi bi-box2-heart text-info p-3"></i> Editorial Robot 
                <i class="bi bi-box2-heart text-info p-3"></i> Jardín Publicaciones 
                <i class="bi bi-box2-heart text-info p-3"></i> Editorial Planeta
                <i class="bi bi-box2-heart text-info p-3"></i> Luna Libros 
                <i class="bi bi-box2-heart text-info p-3"></i> Laguna Libros
            </p>
        </div>

    </div>

    <?= footer(); ?>
</body>
</html>