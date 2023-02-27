-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 19:31:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(17, ''),
(15, 'ae'),
(16, 'ae'),
(18, 'ae'),
(13, 'apio'),
(14, 'apio'),
(6, 'Aventura'),
(3, 'Ciencia Ficción'),
(1, 'Ficción Adolescente'),
(12, 'Nikol'),
(5, 'Novela contemporánea'),
(4, 'Poesía '),
(7, 'Poesía Neoburguesa'),
(9, 'poesia turca'),
(2, 'Romance'),
(11, 'siuu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` int(11) NOT NULL,
  `nombreEditorial` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `nombreEditorial`) VALUES
(5, 'Booket'),
(3, 'Espasa'),
(1, 'Flower'),
(4, 'Lunwerg Editores'),
(6, 'Panini'),
(2, 'Planeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'Habilitado'),
(2, 'Inhabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id` int(7) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreLibro` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '',
  `autorLibro` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '',
  `descripcion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idEstado` int(7) NOT NULL,
  `fecha` datetime NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT 0,
  `identificador` int(7) NOT NULL DEFAULT 0,
  `ult_respuesta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `idUsuario`, `nombreLibro`, `autorLibro`, `descripcion`, `idEstado`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(1, 1, 'Perdón a la lluvia', ' Sara Búho', 'Perd&oacute;n a la lluvia es un conjunto de tormentas que no supimos navegar. Un viaje por todos los naufragios, por todo lo mal entendido. Una vuelta al dolor en brazos de la nostalgia. Un intento de convertir los recuerdos en alas, y que dejen de ser cadenas. Un paso atr&aacute;s para recuperar lo que es valioso y qued&oacute; perdido en la huida, y tambi&eacute;n para sanar lo que un d&iacute;a no supimos c&oacute;mo. En estas p&aacute;ginas los lectores se asomar&aacute;n a un cuidado cuaderno de notas &iacute;ntimas, acompa&ntilde;adas de frases manuscritas y dibujos originales de la propia Sara B&uacute;ho. Al igual que en sus anteriores poemarios, y en palabras de Gioconda Belli, &laquo;permanecer&aacute;n sus versos rond&aacute;ndote mientras vuelan fr&aacute;giles pero contundentes frente a tus ojos&raquo;.', 1, '2014-11-22 00:00:00', 3, 0, '2014-11-22 00:00:00'),
(2, 7, '---', '---', 'El libro est&aacute; dividido en tres partes, cada una de ellas supone una etapa en el proceso de superaci&oacute;n personal que llev&oacute; a cabo el autor (&laquo;el fin&raquo;, &laquo;la transici&oacute;n&raquo; y &laquo;el principio&raquo;) ejemplificada con la evoluci&oacute;n de la larva hasta convertirse en la mariposa.', 1, '2015-11-22 00:00:00', 0, 1, '2015-11-22 00:00:00'),
(4, 10, 'Los Siete Maridos de Evelyn Hugo', 'Taylor Jenkins Reid', 'Evelyn Hugo, el &iacute;cono de Hollywood que se ha recluido en su edad madura, decide al fin contar la verdad sobre su vida llena de glamour y de esc&aacute;ndalos. Pero cuando elige para ello a Monique Grant, una periodista desconocida, nadie se sorprende m&aacute;s que la misma Monique. &iquest;Por qu&eacute; ella? &iquest;Por qu&eacute; ahora? Monique no est&aacute; precisamente en su mejor momento. Su marido la abandon&oacute;, y su vida profesional no avanza. Aun ignorando por qu&eacute; Evelyn la ha elegido para escribir su biograf&iacute;a, Monique est&aacute; decidida a aprovechar esa oportunidad para dar impulso a su carrera. Convocada al lujoso apartamento de Evelyn, Monique escucha fascinada mientras la actriz le cuenta su historia. Desde su llegada a Los &Aacute;ngeles en los a&ntilde;os 50 hasta su decisi&oacute;n de abandonar su carrera en el espect&aacute;culo en los 80 &mdash;y, desde luego, los siete maridos que tuvo en ese tiempo&mdash; Evelyn narra una historia de ambici&oacute;n implacable, amistad inesperada, y un gran amor prohibido. Monique empieza a sentir una conexi&oacute;n muy real con la actriz legendaria, pero cuando el relato de Evelyn se acerca a su fin, resulta evidente que su vida se cruza con la de Monique de un modo tr&aacute;gico e irreversible. &laquo;Fascinante, desgarradora y llena del glamour de la Vieja Hollywood, Los siete maridos de Evelyn Hugo es una de las novelas m&aacute;s cautivantes.&raquo;', 1, '2015-11-22 00:00:00', 0, 0, '2015-11-22 00:00:00'),
(5, 15, 'Lucky Boy (libro en Inglés)', 'Shanthi Sekeran', 'Two women. Two possible futures. One lucky boy. Eighteen years old and fizzing with optimism, Solimar Castro Valdez embarks on a perilous journey across the Mexican border. Weeks later, she arrives in Berkeley, California, dazed by first love found then lost, and pregnant. This was not the plan. Undocumented and unmoored, Soli discovers that her son, Mr. Ignacio, can become her touchstone, and motherhood her identity in a world where she&#039;s otherwise invisible. Kavya Reddy has created a beautiful life in Berkeley, but then she can&#039;t get pregnant and that beautiful life seems suddenly empty. When Soli is placed in immigrant detention, Ignacio comes under Kavya&#039;s care and she finally gets to be the singing, storytelling kind of mother she dreamed of being. But she builds her love on a fault line, her heart wrapped around someone else&#039;s child. &quot;Nacho&quot; to Soli, and &quot;Iggy&quot; to Kavya, the boy is steeped in love, but his destiny and that of his two mothers teeters between two worlds as Soli fights to get back to him. Lucky Boy is a moving and revelatory ode to the ever-changing boundaries of love. &quot;Swept me away and took a little piece of my heart with it. It&#039;s a perfect book.&quot; Edan Lepucki , New York Times bestselling author of California &quot;A heartfelt and moving novel that challenges the true meaning of home. A deeply beautiful book.&quot; Molly Antopol, author of The UnAmericans', 1, '2015-11-22 00:00:00', 0, 0, '2015-11-22 00:00:00'),
(27, 1, 'Foro', 'Administrador', 'Este es un foro de prueba por administrador', 1, '2005-12-22 00:00:00', 0, 0, '2005-12-22 00:00:00'),
(33, 37, 'Perdón a la lluvia -', ' Sara Búho', 'Descripci&oacute;n del libro', 1, '2014-02-23 00:00:00', 0, 0, '2014-02-23 00:00:00'),
(34, 1, 'Prueba', 'autor', 'descripci&oacute;n', 1, '2014-02-23 00:00:00', 0, 0, '2014-02-23 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLibro` int(11) NOT NULL,
  `nombreLibro` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionLibro` text COLLATE utf8_spanish2_ci NOT NULL,
  `precioLibro` int(20) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `idEditorial` int(11) NOT NULL,
  `paginas` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `publicacion` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idPais` int(11) DEFAULT NULL,
  `idTematica` int(11) NOT NULL,
  `ISBN` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `img` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idLibro`, `nombreLibro`, `autor`, `descripcionLibro`, `precioLibro`, `cantidad`, `idEditorial`, `paginas`, `publicacion`, `idPais`, `idTematica`, `ISBN`, `idCategoria`, `idEstado`, `img`) VALUES
(3, 'Lumpen', 'Aixa Bonilla', 'Lumpen pone voz a los desgarradas vivencias de los excluidos, de aquellos que nunca se encuentran en su sitio, que navegan por la vida en una vieja barca sin adivinar el rumbo. Es un libro tan sagaz como conmovedor, cuajado de referencias urbanas, filosóficas, pero también de los medios de comunicación, la televisión, el cine y de la cultura pop en general. Sus textos son pequeños golpes con un ritmo ágil y dinámico que recuerda mucho a los «Spoken Words», recitales poéticos que combinan la palabra, su entonación, su ritmo, con distintos elementos teatrales. Lumpen puede ser leído como una performance de la vertiginosa vida de una marginada que lleva toda la vida intentando encajar en un mundo que le resulta incómodo, difícil, a veces inadmisible.', 90454, 2, 3, '104', '2022', 73, 2, '9788467066678', 4, 1, '/img/lumpen.jpg'),
(6, 'El Mapa De Los Anhelos', 'Alice Kellen', '   ¿Y si te diesen un mapa para descubrir quién eres? ¿Seguirías la ruta marcada hasta el final? Imagina que estás destinada a salvar a tu hermana, pero al final ella muere y la razón de tu existencia se desvanece. Eso es lo que le ocurre a Grace Peterson, la chica que siempre se ha sentido invisible, la que nunca ha salido de Nebraska, la que colecciona palabras y ve pasar los días refugiada en la monotonía. Hasta que llega a sus manos el juego de El mapa de los anhelos y, siguiendo las instrucciones, lo primero que debe hacer es encontrar a alguien llamado Will Tucker, del que nunca ha oído hablar y que está a punto de embarcarse con ella en un viaje directo al corazón, lleno de vulnerabilidades y sueños olvidados, anhelos y afectos inesperados. Pero ¿es posible avanzar cuando los secretos comienzan a pesar demasiado? ¿Quién es quién en esta historia?   ', 43200, 20, 3, '490', '2022', 15, 2, '9786280001654', 1, 1, '/img/10.jpg'),
(7, 'Perdón a la lluvia', 'Sara Búho', '  Perdón a la lluvia es un conjunto de tormentas que no supimos navegar. Un viaje por todos los naufragios, por todo lo mal entendido. Una vuelta al dolor en brazos de la nostalgia. Un intento de convertir los recuerdos en alas, y que dejen de ser cadenas. Un paso atrás para recuperar lo que es valioso y quedó perdido en la huida, y también para sanar lo que un día no supimos cómo. En estas páginas los lectores se asomarán a un cuidado cuaderno de notas íntimas, acompañadas de frases manuscritas y dibujos originales de la propia Sara Búho. Al igual que en sus anteriores poemarios, y en palabras de Gioconda Belli, «permanecerán sus versos rondándote mientras vuelan frágiles pero contundentes frente a tus ojos».  ', 115287, 80, 3, '160', '2022', 241, 2, '9788418820755', 4, 1, '/img/perdon-lluvia.jpg'),
(8, 'Flores', 'Nieves Pulido', 'Flores es un breve y delicado libro compuesto por 42 poemas. Este poemario de Nieves Pulido, de clara influencia oriental, explora las correspondencias y tensiones que se dan entre poema y naturaleza, lenguaje y realidad. Ordenados a modo de manual botánico, los poemas van acompañados por las bellas ilustraciones de Eire (Irlanda Tambascio), que aparecen como una auténtica y logradísima reproducción de las flores originales.', 90454, 12, 3, '80', '2022', 73, 2, '9788467065510', 4, 1, '/img/flores.jpg'),
(9, 'eighteen ', 'Alberto Ramos', 'Alberto Ramos tenía solo 15 años cuando decidió meter en una maleta su esperanza y voluntad, abandonar Málaga y establecerse en Estocolmo, buscando una nueva vida. Y realizar su sueño de estudiar en el extranjero su bachillerato internacional. El instituto está situado en Södertälje, un peculiar municipio de Estocolmo con una gran influencia del cristianismo (católico y ortodoxo) e ideologías inflexibles y totalitarias por su población proveniente de las diásporas asiria (assyrier/syrianer) y árabe. La resultante homofobia extrema de ese fuerte choque cultural hizo que lo que para Alberto comenzó como una aventura se transformara en una pesadilla que duró tres años. El joven tuvo que enfrentarse a continuos episodios de abusos, intimidaciones, desprecios y bullying por parte de sus compañeros debido a su orientación sexual. Las denuncias ante la policía no tuvieron efecto y fue entonces cuando decidió hacerlo públicamente a través de sus redes sociales, llegando así a los medios de comunicación. Estos se hicieron eco del caso. Le pusieron una pulsera de seguridad para estar conectado con la policía, comenzaron a ir agentes al instituto, la directora decidió llenar todo el instituto de banderas LGTB…', 90454, 20, 3, '248', '2021', 73, 2, '9788467061291', 4, 1, '/img/eighteen.jpg'),
(10, 'Anhelo ', 'Tracy Wolff', ' Primer volumen de la adictiva Serie Crave.\r\n\r\nUna chica capaz de vencer al miedo. Un vampiro marcado por su oscuro pasado. Dos seres solitarios cuyos caminos se cruzan en el lugar más frío de la Tierra.\r\n\r\nMi mundo cambió en el instante en el que pisé el instituto Katmere. Aquí todo resulta extraño: la escuela, los alumnos, las asignaturas; y yo no soy más que una simple mortal entre ellos, dioses... o monstruos. Todavía no sé a qué bando pertenezco, si es que pertenezco a alguno, sólo sé que lo que parece unirlos a todos es su odio hacia mí.\r\n\r\nPero entre ellos está Jaxon Vega, un vampiro que esconde oscuros secretos y que no ha sentido nada durante un siglo. Algo en él me atrae, apenas lo conozco, pero sé que hay algo roto en su interior que de alguna manera encaja con lo que hay roto en mí. Acercarme a él puede significar el fin del mundo, pero empiezo a sospechar que alguien me ha traído a este lugar a propósito, y tengo que descubrir por qué.\r\n\r\n«Vampiros, hombres lobo, dragones… ¡Lo tiene todo! Es imposible de soltar.» Andrea Izquierdo (@andreorowling) ', 110173, 10, 5, '672', '2022', 241, 2, '9788408232995', 5, 1, '/img/Anhelo.jpg'),
(11, 'Los crímenes de Chopin', 'Blue Jeans', 'En varias casas de Sevilla se han producido una serie de robos que preocupan a toda la ciudad. El ladrón, al que apodan «Chopin» porque siempre deja una partitura del famoso compositor para firmar el robo, se lleva dinero, joyas y diferentes artículos de valor. Una noche aparece un cadáver en el salón de una de esas viviendas y la tensión aumenta.\r\n\r\nNikolai Olejnik es un joven polaco que llegó a España con su abuelo hace varios años. Desde que este murió, está solo y sobrevive a base de delinquir. Fue un niño prodigio en su país y su mayor pasión es tocar el piano. De repente, todo se complica y se convierte en el principal sospechoso de un asesinato. Niko acude al despacho de Celia Mayo, detective privado, a pedirle ayuda y allí conoce a Triana, la hija de Celia. La joven enseguida llama su atención, aunque no es el mejor momento para enamorarse.\r\nBlanca Sanz apenas lleva cinco meses trabajando en el periódico El Guadalquivir cuando recibe una extraña llamada en la que le filtran datos sobre el caso Chopin, que nadie más conoce. Desde ese momento se obsesiona con todo lo relacionado con la investigación e intenta averiguar quién está detrás de aquellos robos. \r\n\r\nIntriga, misterio, amor y crímenes son la base de esta novela ambientada en las enigmáticas calles de Sevilla, en la que el lector formará parte de la investigación. ¿Conseguirás adivinar quién es el culpable?', 113928, 6, 2, '512', '2022', 173, 2, '9786123197599', 5, 1, '/img/chopin.jpg'),
(12, 'Los hombres de Federico', 'Ana Bernal', '   Un año después, las mujeres de Federico se reúnen de nuevo en la Huerta de San Vicente ante la llamada de Novia, pero ellas ya no son las mismas y el entorno también ha cambiado por un paisaje sombrío y bañado en rojo. El encuentro se complicará cuando las protagonistas descubran que García Lorca creó un manuscrito sobre sus nuevas vidas que deja una puerta abierta a que otros personajes se adueñen de la historia. Las mujeres se darán cuenta de que algo no va bien cuando ocurran situaciones extrañas en la casa y su angustia irá en aumento con los rumores de que los hombres de Federico (las antiguas parejas o amantes de ellas) quieren llegar hasta el lugar con propósitos desconocidos. Solo la magia y mantenerse juntas podrán ayudarlas a enfrentarse a la incertidumbre y a los peligros que les depara esa imprevista llegada.   ', 122334, 8, 4, '170', '2022', 73, 2, '9788418820861', 5, 1, '/img/federico.jpg'),
(13, 'Sueño ', 'Iván Sánchez', ' Mientras un hombre misterioso no puede despertar de un terrible sueño en el que inquietantes escenas de desamor se van solapando, la hermosa Sofía viaja a un enclave paradisiaco para intentar resolver las dudas que pesan sobre su relación tras más de una década junto a su pareja. Sus largos paseos por la isla y un fascinante hombre llamado Alexandro le harán revivir sensaciones hace tiempo olvidadas y replantearse en qué consiste el amor y las razones que la han llevado hasta allí.\r\n\r\nEntretanto, la joven Danae, disgustada por tener que pasar las vacaciones alejada de su mejor amiga, descubre lo que significa que, por primera vez, se te desboque el corazón.\r\n\r\nUna novela intimista y reflexiva, a veces desgarradora, otras ilusionante y evocadora, sobre la naturaleza de las relaciones de pareja y las distintas etapas del amor.\r\n\r\nA veces, la verdadera naturaleza del amor se manifiesta solo a través de los sueños. ', 111593, 12, 2, '208', '2022', 73, 2, '9788408263432', 5, 1, '/img/Sueño.jpg'),
(15, 'La Canción de Aquiles', 'Madeline Miller', 'Grecia en la era de los héroes. Patroclo, un príncipe joven y torpe, ha sido exiliado al reino de Ftía, donde vive a la sombra del rey Peleo y su hijo divino, Aquiles. Aquiles, el mejor de los griegos, es todo lo que no es Patroclo: fuerte, apuesto, hijo de una diosa. Un día Aquiles toma bajo su protección al lastimoso príncipe y ese vínculo provisional da paso a una sólida amistad mientras ambos se convierten en jóvenes habilidosos en las artes de la guerra. Pero el destino nunca está lejos de los talones de Aquiles. Cuando se extiende la noticia del rapto de Helena de Esparta, se convoca a los hombres de Grecia para asediar la ciudad de Troya. Aquiles, seducido por la promesa de un destino glorioso, se une a la causa, y Patroclo, dividido entre el amor y el miedo por su compañero, lo sigue a la guerra. Poco podía imaginar que los años siguientes iban a poner a prueba todo cuanto habían aprendido y todo cuanto valoraban profundamente.', 95749, 100, 2, '230', '2021', 146, 2, '9786075508054', 2, 1, '/img/aquiles.jpg'),
(16, 'e', 'That', ' e ', 3, 45, 1, '34', '43', 3, 5, '3', 1, 1, '/img/1449378000.jpg'),
(18, '5', 'Fool me twice', ' f ', 3, 98, 1, '43', '4', 5, 9, '4', 5, 1, '/img/1668975860.jpg'),
(19, 'Libro de prueba', 'Think I Lose', ' Esta descripción es de prueba ', 190000, 17, 1, '90', '2022', 30, 4, '091274482', 3, 1, '/img/1670289097.jpg'),
(20, 'Libro de prueba 2', 'My Sanity', 'Este es el segundo libro de prueba', 90000, 56, 1, '123', '0912', 5, 1, '0912742821', 3, 1, '/img/1670290923.png'),
(21, '1', 'Years Ago', '1', 1, 22, 1, '1', '1', 14, 5, '1', 1, 1, '/img/1670291077.png'),
(24, '3', 'Everyting Change', '3', 2323232, 33, 1, '333', '543', 14, 5, '332323', 1, 1, '/img/PortadaPredeterminada.jpg'),
(25, 'Ma City', 'BTS', '   El lugar que más me gusta en el mundo\r\nNaturaleza y ciudad, lugares para construir\r\nPara mí, me gusta más el parque Lake que el río Han\r\nIncluso si eres pequeño, me abrazas tan plácidamente\r\nCuando se siente como si me fuera a olvidar de mis raíces\r\nEn ese lugar, encuentro el yo que se había desvanecido\r\nRecuerdo tu aroma y todo\r\nEres mi verano, otoño, invierno y cada primavera   ', 120000, 10, 1, '90', '2015', 58, 4, '20130613', 3, 1, '/img/1674325593.jpg'),
(26, 'Inner Child', 'V', 'The smiling kid,\nThe child who used to just laugh brightly\nWhen I see you like that\nI keep laughing\n \nThe tingling sun and that summer&#039;s air\nThe grey-lit streets&#039; sounds that were so cold\nI draw in a breath and knock at your door', 109000, 5, 1, '210', '2020', 58, 2, '20200222', 4, 1, '/img/1674329922.jpg'),
(27, 'Inner Child', 'Dennis', ' Libro de aventura por Dennis ', 156999, 10, 1, '583', '2023', 7, 2, '8923478789837329', 6, 1, '/img/1676379244.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nombrePais` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nombrePais`) VALUES
(1, 'Afganistán'),
(2, 'Islas Gland'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antártida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Holandesas'),
(11, 'Arabia Saudí'),
(12, 'Argelia'),
(13, 'Argentina'),
(14, 'Armenia'),
(15, 'Aruba'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaiyán'),
(19, 'Bahamas'),
(20, 'Bahréin'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Bielorrusia'),
(24, 'Bélgica'),
(25, 'Belice'),
(26, 'Benin'),
(27, 'Bermudas'),
(28, 'Bhután'),
(29, 'Bolivia'),
(30, 'Bosnia y Herzegovina'),
(31, 'Botsuana'),
(32, 'Isla Bouvet'),
(33, 'Brasil'),
(34, 'Brunéi'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cabo Verde'),
(39, 'Islas Caimán'),
(40, 'Camboya'),
(41, 'Camerún'),
(42, 'Canadá'),
(43, 'República Centroafricana'),
(44, 'Chad'),
(45, 'República Checa'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Isla de Navidad'),
(50, 'Ciudad del Vaticano'),
(51, 'Islas Cocos'),
(52, 'Colombia'),
(53, 'Comoras'),
(54, 'República Democrática del'),
(55, 'Congo'),
(56, 'Islas Cook'),
(57, 'Corea del Norte'),
(58, 'Corea del Sur'),
(59, 'Costa de Marfil'),
(60, 'Costa Rica'),
(61, 'Croacia'),
(62, 'Cuba'),
(63, 'Dinamarca'),
(64, 'Dominica'),
(65, 'República Dominicana'),
(66, 'Ecuador'),
(67, 'Egipto'),
(68, 'El Salvador'),
(69, 'Emiratos Árabes Unidos'),
(70, 'Eritrea'),
(71, 'Eslovaquia'),
(72, 'Eslovenia'),
(73, 'España'),
(74, 'Islas ultramarinas de Est'),
(75, 'Estados Unidos'),
(76, 'Estonia'),
(77, 'Etiopía'),
(78, 'Islas Feroe'),
(79, 'Filipinas'),
(80, 'Finlandia'),
(81, 'Fiyi'),
(82, 'Francia'),
(83, 'Gabón'),
(84, 'Gambia'),
(85, 'Georgia'),
(86, 'Islas Georgias del Sur y '),
(87, 'Ghana'),
(88, 'Gibraltar'),
(89, 'Granada'),
(90, 'Grecia'),
(91, 'Groenlandia'),
(92, 'Guadalupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guayana Francesa'),
(96, 'Guinea'),
(97, 'Guinea Ecuatorial'),
(98, 'Guinea-Bissau'),
(99, 'Guyana'),
(100, 'Haití'),
(101, 'Islas Heard y McDonald'),
(102, 'Honduras'),
(103, 'Hong Kong'),
(104, 'Hungría'),
(105, 'India'),
(106, 'Indonesia'),
(107, 'Irán'),
(108, 'Iraq'),
(109, 'Irlanda'),
(110, 'Islandia'),
(111, 'Israel'),
(112, 'Italia'),
(113, 'Jamaica'),
(114, 'Japón'),
(115, 'Jordania'),
(116, 'Kazajstán'),
(117, 'Kenia'),
(118, 'Kirguistán'),
(119, 'Kiribati'),
(120, 'Kuwait'),
(121, 'Laos'),
(122, 'Lesotho'),
(123, 'Letonia'),
(124, 'Líbano'),
(125, 'Liberia'),
(126, 'Libia'),
(127, 'Liechtenstein'),
(128, 'Lituania'),
(129, 'Luxemburgo'),
(130, 'Macao'),
(131, 'ARY Macedonia'),
(132, 'Madagascar'),
(133, 'Malasia'),
(134, 'Malawi'),
(135, 'Maldivas'),
(136, 'Malí'),
(137, 'Malta'),
(138, 'Islas Malvinas'),
(139, 'Islas Marianas del Norte'),
(140, 'Marruecos'),
(141, 'Islas Marshall'),
(142, 'Martinica'),
(143, 'Mauricio'),
(144, 'Mauritania'),
(145, 'Mayotte'),
(146, 'México'),
(147, 'Micronesia'),
(148, 'Moldavia'),
(149, 'Mónaco'),
(150, 'Mongolia'),
(151, 'Montserrat'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Nicaragua'),
(158, 'Níger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Isla Norfolk'),
(162, 'Noruega'),
(163, 'Nueva Caledonia'),
(164, 'Nueva Zelanda'),
(165, 'Omán'),
(166, 'Países Bajos'),
(167, 'Pakistán'),
(168, 'Palau'),
(169, 'Palestina'),
(170, 'Panamá'),
(171, 'Papúa Nueva Guinea'),
(172, 'Paraguay'),
(173, 'Perú'),
(174, 'Islas Pitcairn'),
(175, 'Polinesia Francesa'),
(176, 'Polonia'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reino Unido'),
(181, 'Reunión'),
(182, 'Ruanda'),
(183, 'Rumania'),
(184, 'Rusia'),
(185, 'Sahara Occidental'),
(186, 'Islas Salomón'),
(187, 'Samoa'),
(188, 'Samoa Americana'),
(189, 'San Cristóbal y Nevis'),
(190, 'San Marino'),
(191, 'San Pedro y Miquelón'),
(192, 'San Vicente y las Granadi'),
(193, 'Santa Helena'),
(194, 'Santa Lucía'),
(195, 'Santo Tomé y Príncipe'),
(196, 'Senegal'),
(197, 'Serbia y Montenegro'),
(198, 'Seychelles'),
(199, 'Sierra Leona'),
(200, 'Singapur'),
(201, 'Siria'),
(202, 'Somalia'),
(203, 'Sri Lanka'),
(204, 'Suazilandia'),
(205, 'Sudáfrica'),
(206, 'Sudán'),
(207, 'Suecia'),
(208, 'Suiza'),
(209, 'Surinam'),
(210, 'Svalbard y Jan Mayen'),
(211, 'Tailandia'),
(212, 'Taiwán'),
(213, 'Tanzania'),
(214, 'Tayikistán'),
(215, 'Territorio Británico del '),
(216, 'Territorios Australes Fra'),
(217, 'Timor Oriental'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad y Tobago'),
(222, 'Túnez'),
(223, 'Islas Turcas y Caicos'),
(224, 'Turkmenistán'),
(225, 'Turquía'),
(226, 'Tuvalu'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'Uruguay'),
(230, 'Uzbekistán'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Islas Vírgenes Británicas'),
(235, 'Islas Vírgenes de los Est'),
(236, 'Wallis y Futuna'),
(237, 'Yemen'),
(238, 'Yibuti'),
(239, 'Zambia'),
(240, 'Zimbabue'),
(241, '- Ninguno -');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rolUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rolUsuario`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematica`
--

CREATE TABLE `tematica` (
  `idTematica` int(11) NOT NULL,
  `tematica` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tematica`
--

INSERT INTO `tematica` (`idTematica`, `tematica`) VALUES
(4, 'Arte'),
(12, 'Booket'),
(3, 'Ciencias'),
(6, 'Cómics'),
(11, 'Derecho'),
(9, 'Economía'),
(10, 'Fotografía'),
(1, 'Historia'),
(5, 'Idiomas'),
(7, 'Informática'),
(2, 'Literatura'),
(8, 'Medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `correoUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `idRol` int(25) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenaUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `correoUsuario`, `idRol`, `usuario`, `contrasenaUsuario`, `idEstado`, `idPais`) VALUES
(1, 'Nikol', 'Ramírez', 'nikol@admin.com', 1, 'Nikol', 'HgLesw==', 1, 52),
(5, 'Alexandra', 'Ramos', 'Alexandra@gmail.com', 2, 'Alexandra', 'HgLesw==', 1, 96),
(6, 'Dennis', 'Morato', 'dennis@gmail.com', 2, 'Dennis', 'HwnctaM=', 1, 16),
(7, 'Jessenia', 'Quintero', 'dennisquintero@gmail.com', 2, 'Jk', 'HwnctaPl', 1, 114),
(8, 'N', 'R', 'nr@gmail.com', 2, 'nr', 'QEnes6Xndg==', 1, 52),
(9, 'Julian', 'Lopez', 'julian@gmail.com', 3, 'Julian', 'HwnctaM=', 1, 70),
(10, 'Pepe', 'Ramírez', 'pepe1@gmail.com', 3, 'Pepe', 'HgLesw==', 1, 115),
(11, 'Jaime', 'Surita', 'jaimesurita@gmail.com', 3, 'JaimeSur', 'Gw3YuQ==', 1, 113),
(12, 'Neil', 'Armstrong', 'Neil@hotmail.com', 3, 'Neil', 'HgLesw==', 2, 127),
(13, 'John', 'Glenn', 'JohnGlenn@gmail.com', 2, 'JohnGlenn', 'HgLetA==', 1, 236),
(14, 'Wild', 'Flower', 'nikolr9.29@gmail.com', 3, 'WildFlower', 'HgLesw==', 1, 52),
(15, 'Nikol', 'Ramírez', 'nikol@gmail.com', 3, 'v', 'HgLesw==', 1, 82),
(19, 'Stream', 'Indigo', 'y@gmail.com', 3, 'Yun', 'V0I=', 1, 14),
(20, 'el sonas', 'cra', 'diego@gmail.com', 3, 'sonas', 'HwnctaM=', 1, 52),
(28, '22', '2', '2@gmail.com', 3, '2', 'HAndsw==', 1, 227),
(29, '23', '23', '23456789@gmail.com', 3, '23', 'HAg=', 1, 11),
(30, 'f', 'f', 'sf@gmail.com', 3, 'f', 'SF2J5w==', 1, 16),
(34, '&lt;h1&gt; Nikol &lt;/h1&', '&lt;b&gt;  Ram&iacute;rez', 'noooooooooo@gmail.com', 3, 'Noooooooooooo', 'HgLesw==', 1, 13),
(35, '&lt;h1&gt; Nikol &lt;/h1&', '&lt;b&gt;  Ram&iacute;rez', 'so@gmail.com', 3, 'soooo', 'HgLXtg==', 1, 10),
(36, '&lt;h1&gt; Sexy &lt;/h1&a', '&lt;b&gt;  Nukim', 'sexynukim@gmail.com', 2, 'SexyNukim', 'HgLesw==', 1, 131),
(37, 'Dennis', 'Morato', 'dennis23@gmail.com', 3, 'Dennis23', 'Hwnc', 1, 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `categoria` (`categoria`) USING BTREE;

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`),
  ADD KEY `nombreEditorial` (`nombreEditorial`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEstado` (`idEstado`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLibro`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `idEditorial` (`idEditorial`),
  ADD KEY `idTematica` (`idTematica`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `libro` (`idEstado`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`idTematica`),
  ADD KEY `tematica` (`tematica`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correoUsuario` (`correoUsuario`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idEstado` (`idEstado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tematica`
--
ALTER TABLE `tematica`
  MODIFY `idTematica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `foro_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`idTematica`) REFERENCES `tematica` (`idTematica`),
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `libro_ibfk_4` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
