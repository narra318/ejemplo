<?php ob_start(); session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title> Inicio </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Iniciio general de la página, aqui se escuentran libros, descripciones generales y más.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="./img/icono2.png">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="./js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="css/style.css">
    <link href ="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <?php include './modules/menu-footer.php'; ?>
    <?= menu("."); ?>

    <div class="container p-5 overflow-auto">
        <div class="row overflow-auto">
            <div class="col-md-8">
                <p style="font-family: Hand; font-size: 30px;" class="fw-semibold d-none d-lg-block border border-info bg-info bg-opacity-25 rounded  text-primary p-5">
                    <i class="bi bi-quote"></i>
                     Gracias por la obra de arte que eres tú, porque tu sola existencia es arte. 
                     <!-- <span class="fw-normal" style="font-size: 14px;"> - Just One Day </span> -->
                </p>

                <h1 class="mt-5 text-center"> Bienvenid@ a la Libreria Papiro ઇઉ </h1>
                <h3 class="fw-normal text-center" style="color: #35393c;"> Te dejamos algunas recomendaciones... </h3>

                <!-- Slider -->
                <div class="ps-0 p-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="./img/slider-libros/slider21.jpg" class="d-block w-100" alt="Libro de Claudia Hérnandez - Tomar tu mano">
                            </div>
                            <div class="carousel-item">
                            <img src="./img/slider-libros/slider22.jpg" class="d-block w-100" alt="Libro de Luis Carlos Barragán - Parasitos Perfectos">
                            </div>
                            <div class="carousel-item">
                            <img src="./img/slider-libros/slider23.jpg" class="d-block w-100" alt="Libro Panza de Burro de Andrea Abreu">
                            </div>                            
                            <div class="carousel-item">
                            <img src="./img/slider-libros/slider24.jpg" class="d-block w-100" alt="Libro Fiebre Tropical de Juli Delgado Lopera">
                            </div>                            
                            <div class="carousel-item">
                            <img src="./img/slider-libros/slider25.jpg" class="d-block w-100" alt="Libro Más Alla Del Canto de Martha Senn">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"> Atras </span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-4 justify-content-center text-center"> 
                <!-- Boton con la imagen -->
                <button type="button" class="btn d-none d-md-block btn-primary h-100 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img class="ratio d-none d-md-block" src="./img/portada/poertta.jpg" width="400" alt="Portada de libro Ojalá de Defreds"> 
                    <h6 class="ratio d-none d-lg-block text-info p-4"> Portada de libro Ojalá - Defreds </h6> 
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel"> Ojalá - Defreds </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Espasa <br>
                                Temática: Poesía | Poesía urbana <br>
                                Colección: ESPASAesPOESÍA <br>
                                Número de páginas: 168
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Una inspiradora «pandilla planetaria» que gira alrededor de los sentimientos </h4>
                                <h5 class="fw-normal"> Esta novedosa propuesta de Defreds sorprenderá con un ejemplar artístico en el que destacan las ilustraciones de Lady Desidia y unas hermosas caligrafías que dan forma a su pensamiento. El libro está compuesto de distintos apartados, cada uno protagonizado por un planeta, como un personaje con sus cualidades y defectos, con marcados rasgos de personalidad, sus filias y fobias. Y a partir de ellos  nos narra emociones y experiencias vitales que nos interpelan: una representación del mundo caótico que nos toca en suerte y en el que tanta falta hacen los afectos. Un cuento del siglo XXI en el que se habla de personalidades diferentes, como una “panda planetaria” que se enfrenta a cada día; y como siempre de ternura, de amistad, de pasión; de la infancia, la paternidad, la alegría y la tristeza, de la esperanza en un mundo mejor, con el convencimiento de que en el amor radica el verdadero sentido de las cosas. Un cuento universal e inspirador para los lectores de hoy y en especial para los incondicionales de Defreds que sabrán apreciar su delicadeza y sentimiento. Calará en el corazón de todos. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <h1 class="text-center"> Libros de Poesia </h1>

            <!-- Tarjetas -->
            <div class="card-group mt-5">
                <div class="card bg-primary bg-opacity-50 border border-info text-secondary p-3">
                    <img src="./img/portada/lumpen.jpg" class="card-img-top h-100" alt="Libro Lumpen">
                    <div class="card-body">
                        <h5 class="card-title">Lumpen</h5>
                        <p class="card-text">Aixa Bonilla</p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#Lumpen"> Ver más.. </button> 
                        </p>
                    </div>
                </div>

            <!-- Inicio Modal 1 -->
                <div class="modal fade text-center" id="Lumpen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="LumpenLabel"> Lumpen - Aixa Bonillas </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Espasa <br>
                                Temática: Poesía | Poesía urbana <br>
                                Colección: ESPASAesPOESÍA <br>
                                Número de páginas: 104
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Versos que nos interpelan sin demora, como un dardo en el pensamiento. </h4>
                                <h5 class="fw-normal"> Lumpen pone voz a los desgarradas vivencias de los excluidos, de aquellos que nunca se encuentran en su sitio, que navegan por la vida en una vieja barca sin adivinar el rumbo. Es un libro tan sagaz como conmovedor, cuajado de referencias urbanas, filosóficas, pero también de los medios de comunicación, la televisión, el cine y de la cultura pop en general. Sus textos son pequeños golpes con un ritmo ágil y dinámico que recuerda mucho a los «Spoken Words», recitales poéticos que combinan la palabra, su entonación, su ritmo, con distintos elementos teatrales. Lumpen puede ser leído como una performance de la vertiginosa vida de una marginada que lleva toda la vida intentando encajar en un mundo que le resulta incómodo, difícil, a veces inadmisible. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 1 -->

                <div class="card bg-primary bg-opacity-75 border border-info text-secondary p-3">
                    <img src="./img/portada/perdon-lluvia.jpg" class="card-img-top h-100" alt="Libro Perdón a la lluvia">
                    <div class="card-body">
                        <h5 class="card-title">Perdón a la lluvia</h5>
                        <p class="card-text">Sara Búho</p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#perdon-lluvia"> Ver más.. </button> 
                        </p>                    
                    </div>
                </div>

            <!-- Inicio Modal 2 -->
                <div class="modal fade text-center" id="perdon-lluvia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="perdon-lluvia" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="perdon-lluvia"> Perdón a la lluvia - Sara Búho </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Lunwerg Editores <br>
                                Temática: Poesía | Poesía urbana <br>
                                Colección: Poesía ilustrada <br>
                                Número de páginas: 160
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Vuelve la poeta Sara Búho con su libro más bello y personal </h4>
                                <h5 class="fw-normal"> Perdón a la lluvia es un conjunto de tormentas que no supimos navegar. Un viaje por todos los naufragios, por todo lo mal entendido. Una vuelta al dolor en brazos de la nostalgia. Un intento de convertir los recuerdos en alas, y que dejen de ser cadenas. Un paso atrás para recuperar lo que es valioso y quedó perdido en la huida, y también para sanar lo que un día no supimos cómo. En estas páginas los lectores se asomarán a un cuidado cuaderno de notas íntimas, acompañadas de frases manuscritas y dibujos originales de la propia Sara Búho. Al igual que en sus anteriores poemarios, y en palabras de Gioconda Belli, «permanecerán sus versos rondándote mientras vuelan frágiles pero contundentes frente a tus ojos». </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 2 -->

                <div class="card bg-primary bg-opacity-50 border border-info text-secondary p-3">
                    <img src="./img/portada/flores.jpg" class="card-img-top h-100" alt="Libro Flores">
                    <div class="card-body">
                        <h5 class="card-title"> Flores </h5>
                        <p class="card-text">Nieves Pulido</p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#Flores"> Ver más.. </button> 
                        </p>                      
                    </div>
                </div>

            <!-- Inicio Modal 3 -->
                <div class="modal fade text-center" id="Flores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Flores" aria-hidden="true">
                    <div class="modal-dialog">" 
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="Flores"> Flores - Nieves Pulido </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Espasa <br>
                                Temática: Poesía | Poesía contemporánea <br>
                                Colección: ESPASAesPOESÍA <br>
                                Número de páginas: 80
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> La delicadeza en estado puro: naturaleza y lirismo </h4>
                                <h5 class="fw-normal"> Flores es un breve y delicado libro compuesto por 42 poemas. Este poemario de Nieves Pulido, de clara influencia oriental, explora las correspondencias y tensiones que se dan entre poema y naturaleza, lenguaje y realidad. Ordenados a modo de manual botánico, los poemas van acompañados por las bellas ilustraciones de Eire (Irlanda Tambascio), que aparecen como una auténtica y logradísima reproducción de las flores originales. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 3 -->

                <div class="card bg-primary bg-opacity-75 border border-info text-secondary p-3">
                    <img src="./img/portada/eighteen.jpg" class="card-img-top h-100" alt="Limpro eighteen">
                    <div class="card-body">
                        <h5 class="card-title"> eighteen </h5>
                        <p class="card-text"> Alberto Ramos </p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#eighteen"> Ver más.. </button> 
                        </p>   
                    </div>
                </div>

            <!-- Inicio Modal 4 -->
                <div class="modal fade text-center" id="eighteen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eighteen" aria-hidden="true">
                    <div class="modal-dialog">" 
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="eighteen"> eighteen - Alberto Ramos </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Espasa <br>
                                Temática: Poesía | Poesía urbana <br>
                                Colección: ESPASAesPOESÍA <br>
                                Número de páginas: 248
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Poesía contra la discriminación para celebrar el amor y la belleza. </h4>
                                <h5 class="fw-normal"> Alberto Ramos tenía solo 15 años cuando decidió meter en una maleta su esperanza y voluntad, abandonar Málaga y establecerse en Estocolmo, buscando una nueva vida. Y realizar su sueño de estudiar en el extranjero su bachillerato internacional. El instituto está situado en Södertälje, un peculiar municipio de Estocolmo con una gran influencia del cristianismo (católico y ortodoxo) e ideologías inflexibles y totalitarias por su población proveniente de las diásporas asiria (assyrier/syrianer) y árabe. La resultante homofobia extrema de ese fuerte choque cultural hizo que lo que para Alberto comenzó como una aventura se transformara en una pesadilla que duró tres años. El joven tuvo que enfrentarse a continuos episodios de abusos, intimidaciones, desprecios y bullying por parte de sus compañeros debido a su orientación sexual. Las denuncias ante la policía no tuvieron efecto y fue entonces cuando decidió hacerlo públicamente a través de sus redes sociales, llegando así a los medios de comunicación. Estos se hicieron eco del caso. Le pusieron una pulsera de seguridad para estar conectado con la policía, comenzaron a ir agentes al instituto, la directora decidió llenar todo el instituto de banderas LGTB… <br><br> Todo su dolor quedó plasmado en eighteen, un diario poético en el que narra su experiencia a través de su poesía y sus ilustraciones. El libro condensa todo el dolor de esos años pero también su rebeldía y su voluntad de superarlo; se trata de un recorrido de crecimiento personal que refleja lo que es el abuso, el suicidio, la pérdida, el bullying, el trauma y la homofobia, pero también el amor, la celebración de uno mismo, el amor propio y la belleza, entre otras experiencias.  <br><br> El libro está dividido en tres partes, cada una de ellas supone una etapa en el proceso de superación personal que llevó a cabo el autor («el fin», «la transición» y «el principio») ejemplificada con la evolución de la larva hasta convertirse en la mariposa. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 4 -->

            </div>
        </div>

        <hr>

        <div class="pt-5">
            <h1 class="text-center"> Novelas Contemporaneas </h1>

            <!-- Tarjetas -->
            <div class="card-group mt-5">
                <div class="card bg-primary bg-opacity-50 border border-info text-secondary p-3">
                    <img src="./img/portada/sueño.jpg" class="card-img-top h-100" alt="Libro Lumpen">
                    <div class="card-body">
                        <h5 class="card-title"> Sueño </h5>
                        <p class="card-text"> Iván Sánchez Zapardiel </p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#sueño"> Ver más.. </button> 
                        </p>
                    </div>
                </div>

            <!-- Inicio Modal 1 -->
                <div class="modal fade text-center" id="sueño" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sueño" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="sueño"> Sueño - Iván Sánchez Zapardiel </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Editorial Planeta <br>
                                Temática: Novela contemporánea <br>
                                Colección: Autores Españoles e Iberoamericanos <br>
                                Número de páginas: 216
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Versos que nos interpelan sin demora, como un dardo en el pensamiento. </h4>
                                <h5 class="fw-normal"> Mientras un hombre misterioso no puede despertar de un terrible sueño en el que inquietantes escenas de desamor se van solapando, la hermosa Sofía viaja a un enclave paradisiaco para intentar resolver las dudas que pesan sobre su relación tras más de una década junto a su pareja. Sus largos paseos por la isla y un fascinante hombre llamado Alexandro le harán revivir sensaciones hace tiempo olvidadas y replantearse en qué consiste el amor y las razones que la han llevado hasta allí. <br><br> Entretanto, la joven Danae, disgustada por tener que pasar las vacaciones alejada de su mejor amiga, descubre lo que significa que, por primera vez, se te desboque el corazón. <br><br> Una novela intimista y reflexiva, a veces desgarradora, otras ilusionante y evocadora, sobre la naturaleza de las relaciones de pareja y las distintas etapas del amor. <br><br> A veces, la verdadera naturaleza del amor se manifiesta solo a través de los sueños. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 1 -->

                <div class="card bg-primary bg-opacity-75 border border-info text-secondary p-3">
                    <img src="./img/portada/federico.jpg" class="card-img-top h-100 img-fluid" alt="Libro Los hombres de Federico">
                    <div class="card-body">
                        <h5 class="card-title">Los hombres de Federico </h5>
                        <p class="card-text">Ana Bernal-Triviño | Lady Desidia</p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#federico"> Ver más.. </button> 
                        </p>                    
                    </div>
                </div>

            <!-- Inicio Modal 2 -->
                <div class="modal fade text-center" id="federico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="perdon-lluvia" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="federico"> Los hombres de Federico <br> Ana Bernal-Triviño | Lady Desidia </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Lunwerg Editores <br>
                                Temática: Novela contemporánea | Drama <br>
                                Arte | Ilustrados <br>
                                Colección: Literatura ilustrada <br>
                                Número de páginas: 224
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Tras el gran éxito de Las Mujeres de Federico, la segunda parte de esta trilogía de ficción se centra en los personajes masculinos de Lorca creando un vibrante y conmovedor relato </h4>
                                <h5 class="fw-normal"> Un año después, las mujeres de Federico se reúnen de nuevo en la Huerta de San Vicente ante la llamada de Novia, pero ellas ya no son las mismas y el entorno también ha cambiado por un paisaje sombrío y bañado en rojo. El encuentro se complicará cuando las protagonistas descubran que García Lorca creó un manuscrito sobre sus nuevas vidas que deja una puerta abierta a que otros personajes se adueñen de la historia. Las mujeres se darán cuenta de que algo no va bien cuando ocurran situaciones extrañas en la casa y su angustia irá en aumento con los rumores de que los hombres de Federico (las antiguas parejas o amantes de ellas) quieren llegar hasta el lugar con propósitos desconocidos. Solo la magia y mantenerse juntas podrán ayudarlas a enfrentarse a la incertidumbre y a los peligros que les depara esa imprevista llegada. </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 2 -->

                <div class="card bg-primary bg-opacity-50 border border-info text-secondary p-3">
                    <img src="./img/portada/chopin.jpg" class="card-img-top h-100" alt="Libro Flores">
                    <div class="card-body">
                        <h5 class="card-title"> Los crímenes de Chopin </h5>
                        <p class="card-text">Blue Jeans</p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#Chopin"> Ver más.. </button> 
                        </p>                      
                    </div>
                </div>

            <!-- Inicio Modal 3 -->
                <div class="modal fade text-center" id="Chopin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Chopin" aria-hidden="true">
                    <div class="modal-dialog">" 
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="Chopin"> Los crímenes de Chopin - Blue Jeans </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Editorial Planeta <br>
                                Temática: Novela contemporánea <br>
                                Juvenil | A partir de 14 años <br>
                                Novela negra | Thriller <br>
                                Colección: Planeta <br>
                                Número de páginas: 512
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Intriga, misterio y amor en la nueva novela de Blue Jeans </h4>
                                <h5 class="fw-normal"> En varias casas de Sevilla se han producido una serie de robos que preocupan a toda la ciudad. El ladrón, al que apodan «Chopin» porque siempre deja una partitura del famoso compositor para firmar el robo, se lleva dinero, joyas y diferentes artículos de valor. Una noche aparece un cadáver en el salón de una de esas viviendas y la tensión aumenta. <br><br> Nikolai Olejnik es un joven polaco que llegó a España con su abuelo hace varios años. Desde que este murió, está solo y sobrevive a base de delinquir. Fue un niño prodigio en su país y su mayor pasión es tocar el piano. De repente, todo se complica y se convierte en el principal sospechoso de un asesinato. Niko acude al despacho de Celia Mayo, detective privado, a pedirle ayuda y allí conoce a Triana, la hija de Celia. La joven enseguida llama su atención, aunque no es el mejor momento para enamorarse. <br><b></b> Blanca Sanz apenas lleva cinco meses trabajando en el periódico El Guadalquivir cuando recibe una extraña llamada en la que le filtran datos sobre el caso Chopin, que nadie más conoce. Desde ese momento se obsesiona con todo lo relacionado con la investigación e intenta averiguar quién está detrás de aquellos robos. <br><br> Intriga, misterio, amor y crímenes son la base de esta novela ambientada en las enigmáticas calles de Sevilla, en la que el lector formará parte de la investigación. ¿Conseguirás adivinar quién es el culpable? </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 3 -->

                <div class="card bg-primary bg-opacity-75 border border-info text-secondary p-3">
                    <img src="./img/portada/Anhelo.jpg" class="card-img-top h-100" alt="Libro Anhelo">
                    <div class="card-body">
                        <h5 class="card-title"> Anhelo </h5>
                        <p class="card-text"> Tracy Wolff </p>
                        <p class="card-text text-end"> 
                            <button type="button" class="btn btn-secondary rounded p-2 pe-3 ps-3" data-bs-toggle="modal" data-bs-target="#Anhelo"> Ver más.. </button> 
                        </p>   
                    </div>
                </div>

            <!-- Inicio Modal 4 -->
                <div class="modal fade text-center" id="Anhelo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Anhelo" aria-hidden="true">
                    <div class="modal-dialog">" 
                        <div class="modal-content bg-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 mx-auto" id="Anhelo"> Anhelo - Tracy Wolff </h1>
                            <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                Editorial: Booket <br>
                                Temática: Novela contemporánea <br>
                                Juvenil | A partir de 14 años <br>
                                Juvenil | Vampiros <br>
                                Colección: Especial Enero Febrero 2022 <br>
                                Traductor: Vicky Charques <br>
                                Número de páginas: 672
                            </p>

                            <div class="text-start pt-3 pb-3 p-5"> 
                                <!-- <b> Sinopsis: </b>  -->
                                <h4 class="fw-normal"> Tu nueva obsesión. Lo vas a devorar. Una historia de vampiros más adictiva que Crepúsculo. </h4>
                                <h5 class="fw-normal"> Primer volumen de la adictiva Serie Crave. <br><br> Una chica capaz de vencer al miedo. Un vampiro marcado por su oscuro pasado. Dos seres solitarios cuyos caminos se cruzan en el lugar más frío de la Tierra. <br><br> Mi mundo cambió en el instante en el que pisé el instituto Katmere. Aquí todo resulta extraño: la escuela, los alumnos, las asignaturas; y yo no soy más que una simple mortal entre ellos, dioses... o monstruos. Todavía no sé a qué bando pertenezco, si es que pertenezco a alguno, sólo sé que lo que parece unirlos a todos es su odio hacia mí. <br><br> Pero entre ellos está Jaxon Vega, un vampiro que esconde oscuros secretos y que no ha sentido nada durante un siglo. Algo en él me atrae, apenas lo conozco, pero sé que hay algo roto en su interior que de alguna manera encaja con lo que hay roto en mí. Acercarme a él puede significar el fin del mundo, pero empiezo a sospechar que alguien me ha traído a este lugar a propósito, y tengo que descubrir por qué. <br><br> «Vampiros, hombres lobo, dragones… ¡Lo tiene todo! Es imposible de soltar.» Andrea Izquierdo (@andreorowling) </h5>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary border border-primary rounded fw-normal"  data-bs-dismiss="modal"> Cerrar </button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Modal 4 -->
            </div>
            <hr>
        </div>

        <h3 class="mt-5"> Si desea encontrar más libros, puede continuar a nuestro catálogo... <a href="./vistas/libreria/catalogo.php" id="Link"> Ir a catálogo -> </a> </h3>
    </div>

    <?= footer(); ?>
</body>
</html>