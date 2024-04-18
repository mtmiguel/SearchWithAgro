<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: iniciarSe.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Informacion</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
    <style>
        .mt {
            margin-top: 50px !important;
        }
    </style>


</head>

<body>
    <!-- Responsive navbar-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb">
        <div class="container">




            <a href="#" class="navbar-brand"><span class="text-primary">Search</span> For Agro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index2.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="historial.php" class="nav-link">Progreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="cultivos.php" class="nav-link">Cultivos</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotros.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="cerrar_sesion.php" class="nav-link">Cerrar sesión</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo de la mandarina</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/manda.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo de la mandarina en la región de Cúcuta, Colombia, ha experimentado un crecimiento significativo en las últimas décadas debido a su importancia económica y demanda tanto a nivel nacional como internacional. La mandarina, valorada por su sabor único y sus propiedades nutritivas, es cultivada en la región con técnicas modernas para garantizar una alta calidad del producto.</p>
                        <p class="fs-5 mb-4">El cultivo de la mandarina en Cúcuta se beneficia del clima subtropical de la región, que proporciona condiciones óptimas para el crecimiento de este cítrico. Además, los suelos fértiles y bien drenados contribuyen al éxito del cultivo en la zona.</p>
                        <p class="fs-5 mb-4">La importancia de la mandarina en la economía local:</p>
                        <p class="fs-5 mb-4">El cultivo de la mandarina no solo genera empleo y sustento para los agricultores locales, sino que también impulsa el desarrollo económico de la región al contribuir a las exportaciones agrícolas y satisfacer la demanda nacional de esta fruta.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo de la mandarina: </p>
                        <p class="fs-5 mb-4">El clima subtropical de Cúcuta, ubicado en el departamento de Norte de Santander, proporciona las condiciones ideales para el cultivo exitoso de la mandarina. Esta región experimenta temperaturas cálidas y moderadas durante todo el año, con una temporada de lluvias que favorece el crecimiento y desarrollo de los árboles de mandarina.</p>
                        <p class="fs-5 mb-4">Suelos Aptos y Preparación del Terreno: </p>
                        <p class="fs-5 mb-4">Los suelos fértiles y bien drenados de Cúcuta son ideales para el cultivo de la mandarina. La preparación del terreno para el cultivo de mandarina incluye prácticas como el arado, la nivelación del terreno y la incorporación de materia orgánica para mejorar la estructura del suelo y promover un óptimo desarrollo de las raíces de los árboles.</p>
                    </section>
                </article>

                <section>

                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>

                                </thead>
                                <tbody>
                                    <h2>Técnicas de Siembra y Manejo del Cultivo de mandarina</h2>

                                    <meta charset="UTF-8">
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Procesos de Cultivo, Manejo y Comercialización de la Mandarina</title>
                                    <style>
                                        table {
                                            width: 100%;
                                            border-collapse: collapse;
                                        }

                                        th,
                                        td {
                                            padding: 8px;
                                            text-align: left;
                                            border-bottom: 1px solid #ddd;
                                        }

                                        th {
                                            background-color: #f2f2f2;
                                        }
                                    </style>
                                    </head>

                                    <body>

                                        <h2>Procesos de Cultivo, Manejo y Comercialización de la Mandarina</h2>

                                        <table>
                                            <tr>
                                                <th>Proceso</th>
                                                <th>Descripción</th>
                                            </tr>
                                            <tr>
                                                <td>Selección del Sitio</td>
                                                <td>Elegir un lugar con suelo bien drenado y exposición al sol adecuada.</td>
                                            </tr>
                                            <tr>
                                                <td>Preparación del Suelo</td>
                                                <td>Asegurar que el suelo esté bien preparado con buen drenaje y nivelación adecuada.</td>
                                            </tr>
                                            <tr>
                                                <td>Plantación</td>
                                                <td>Plantar mandarinas a una distancia adecuada entre árboles para permitir un crecimiento óptimo y una buena circulación de aire.</td>
                                            </tr>
                                            <tr>
                                                <td>Riego</td>
                                                <td>Proporcionar riego regular para mantener el suelo húmedo pero no saturado, especialmente durante períodos secos o de alta temperatura.</td>
                                            </tr>
                                            <tr>
                                                <td>Fertilización</td>
                                                <td>Aplicar fertilizantes balanceados según las necesidades del suelo y las etapas de crecimiento de los árboles de mandarina.</td>
                                            </tr>
                                            <tr>
                                                <td>Poda</td>
                                                <td>Realizar podas para eliminar ramas muertas o enfermas, promover un crecimiento vigoroso y mejorar la calidad de la fruta.</td>
                                            </tr>
                                            <tr>
                                                <td>Control de Plagas y Enfermedades</td>
                                                <td>Implementar medidas de control integrado de plagas y enfermedades para proteger los árboles de mandarina de insectos y patógenos.</td>
                                            </tr>
                                            <tr>
                                                <td>Cosecha</td>
                                                <td>Recolectar las mandarinas cuando estén maduras pero firmes, evitando daños en la piel de la fruta y utilizando técnicas adecuadas de cosecha.</td>
                                            </tr>
                                            <tr>
                                                <td>Comercialización</td>
                                                <td>Vender las mandarinas frescas en mercados locales o a través de canales de distribución más amplios, asegurando una manipulación adecuada para mantener la calidad del producto.</td>
                                            </tr>
                                        </table>






                                        <h2>Guía Paso a Paso para la Siembra, Cuidado y Cosecha de la Mandarina</h2>







                                        <table>
                                            <tr>
                                                <th>Paso</th>
                                                <th>Descripción</th>
                                            </tr>
                                            <tr>
                                                <td>Selección del Sitio y Preparación del Terreno</td>
                                                <td>
                                                    <ul>
                                                        <li>Elige un sitio con suelo bien drenado y exposición al sol.</li>
                                                        <li>Prepara el terreno eliminando malezas y piedras.</li>
                                                        <li>Mejora la calidad del suelo si es necesario, agregando materia orgánica como compost.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Selección y Preparación de las Semillas</td>
                                                <td>
                                                    <ul>
                                                        <li>Utiliza semillas frescas de mandarina de variedades probadas.</li>
                                                        <li>Planta las semillas en macetas con tierra para macetas bien drenada.</li>
                                                        <li>Mantén las macetas en un lugar cálido y húmedo para promover la germinación.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trasplante de las Plántulas</td>
                                                <td>
                                                    <ul>
                                                        <li>Trasplanta las plántulas de mandarina al campo cuando tengan entre 1 y 2 años de edad.</li>
                                                        <li>Elige un día nublado para reducir el estrés de trasplante.</li>
                                                        <li>Excava un hoyo lo suficientemente grande para las raíces y coloca la plántula en el centro.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>
                                </tbody>
                            </table>
                        </div>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Pasos para la siembra adecuada de la mandarina </h2>
                        <p class="fs-5 mb-4">Preparación del terreno: Antes de la siembra, es crucial preparar adecuadamente el terreno. Esto implica nivelar el campo para asegurar una distribución uniforme del agua durante el riego y eliminar cualquier maleza presente.</p>
                        <p class="fs-5 mb-4">Preparación de la semilla: Las semillas de mandarina deben seleccionarse cuidadosamente y prepararse para la siembra. Esto puede incluir tratamientos previos para prevenir enfermedades y promover la germinación.</p>
                        <p class="fs-5 mb-4">Control de malezas: Durante el período de crecimiento inicial de la mandarina, es crucial controlar las malezas para evitar la competencia por nutrientes, agua y luz solar. Esto puede lograrse mediante la aplicación de herbicidas selectivos, el uso de prácticas culturales como el deshierbe manual y el mantenimiento adecuado del nivel del agua en el campo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Prácticas recomendadas para el riego, la fertilización y el manejo de plagas y enfermedades:</h2>
                        <p class="fs-5 mb-4">Riego: La mandarina es un árbol que requiere agua regular para un crecimiento saludable. Se recomienda un sistema de riego por goteo o microaspersión para proporcionar agua de manera eficiente y reducir el riesgo de enfermedades relacionadas con el exceso de humedad.</p>
                        <p class="fs-5 mb-4">Fertilización: La mandarina responde bien a la fertilización equilibrada con macro y micronutrientes. Se pueden aplicar fertilizantes orgánicos o químicos según las necesidades del suelo y los requerimientos del cultivo. Es importante evitar el exceso de nitrógeno, ya que puede afectar negativamente la calidad de la fruta.</p>
                        <p class="fs-5 mb-4">Manejo de plagas y enfermedades: La mandarina es susceptible a diversas plagas y enfermedades, como la mosca de la fruta, la cochinilla y la enfermedad de la cancrosis. Se recomienda monitorear regularmente los árboles y tomar medidas preventivas, como la poda adecuada, el control de malezas y la aplicación de tratamientos fitosanitarios cuando sea necesario.</p>


                    </section>

                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Métodos y técnicas de cosecha de mandarina en la región:</h2>
                        <p class="fs-5 mb-4">Cosecha manual: La mayoría de las mandarinas se cosechan a mano para evitar daños en la piel de la fruta. Los trabajadores cortan cuidadosamente cada fruta con tijeras de podar y la colocan en cestas o contenedores.</p>
                        <p class="fs-5 mb-4">Cosecha mecanizada: En grandes plantaciones comerciales, la cosecha de mandarinas se realiza a menudo con equipos de cosecha mecanizados. Estas máquinas sacuden suavemente los árboles para desprender las frutas, que luego son recolectadas en cintas transportadoras y clasificadas por tamaño y calidad.</p>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Desafíos en el cultivo de mandarina en Cúcuta: </h2>
                        <p class="fs-5 mb-4">Condiciones climáticas: Las variaciones climáticas, como las heladas tardías o las sequías prolongadas, pueden afectar negativamente el cultivo de mandarinas en la región. Es importante seleccionar variedades resistentes al frío y tomar medidas para proteger los árboles durante los períodos de clima extremo.</p>
                        <p class="fs-5 mb-4">Plagas y enfermedades: Las mandarinas son vulnerables a una serie de plagas y enfermedades, como la mosca de la fruta, el gusano cítrico y la enfermedad de la cancrosis. El manejo integrado de plagas y enfermedades es esencial para prevenir daños significativos en los cultivos.</p>
                        <p class="fs-5 mb-4">Competencia del mercado: La producción de mandarinas en Cúcuta debe competir con otras regiones productoras tanto a nivel nacional como internacional. Es importante mejorar la calidad del producto y desarrollar estrategias de comercialización efectivas para destacar en el mercado.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Soluciones y estrategias recomendadas: </h2>
                        <p class="fs-5 mb-4">Diversificación varietal: Se recomienda cultivar una variedad de mandarinas que se adapten a las condiciones climáticas y de suelo de la región, reduciendo así el riesgo de pérdidas debido a condiciones climáticas adversas o enfermedades específicas.</p>
                        <p class="fs-5 mb-4">Manejo integrado de plagas y enfermedades: Implementar prácticas de manejo integrado de plagas y enfermedades que incluyan el monitoreo regular de los cultivos, la selección de variedades resistentes, la aplicación oportuna de tratamientos fitosanitarios y la promoción de prácticas culturales saludables.</p>
                        <p class="fs-5 mb-4">Mejora de la infraestructura y tecnología agrícola: Invertir en sistemas de riego eficientes, tecnologías de protección de cultivos y equipos de cosecha modernos puede mejorar la productividad y rentabilidad del cultivo de mandarina en Cúcuta.</p>
                        <p class="fs-5 mb-4">Promoción y marketing: Desarrollar estrategias de promoción y marketing para destacar la calidad y frescura de las mandarinas cultivadas en la región. Esto puede incluir la certificación de productos, la participación en ferias comerciales y la creación de asociaciones con distribuidores locales y nacionales.</p>

                    </section>



            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

                <!-- Categories widget-->
                <div class="card mb-4 mt">
                    <div class="card-header">Categorias</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="infoAguacate.php">Aguacate</a></li>
                                    <li><a href="infoCultivo.php">Arroz</a></li>
                                    <li><a href="infopalaceite.php">Palma de Aceite</a></li>
                                    <li><a href="infocacao.php">Cacao</a></li>
                                    <li><a href="infotomate.php">Tomate</a></li>
                                    <li><a href="infolimon.php">Limon</a></li>
                                    <li><a href="infocebollalarga.php">Cebolla larga</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="infomandarina.php">Mandarina</a></li>
                                    <li><a href="infonaranja.php">Naranja</a></li>
                                    <li><a href="infoyuca.php">Yuca</a></li>
                                    <li><a href="infocafe.php">Café </a></li>
                                    <li><a href="infocimarron.php">Cimarron</a></li>
                                    <li><a href="infolimonmandarino.php">Limon mandarino</a></li>
                                    <li><a href="infocilantro.php">Cilantro</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Recuerda</div>
                    <div class="card-body">"Con cada semilla que siembras, estás sembrando la esperanza de un futuro más verde y próspero. Sigue cultivando con amor y dedicación, porque cada cosecha es un paso hacia la abundancia y la renovación." 🌱💚</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Search for Agro 2024 </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>