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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo del cilantro</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/cilantro.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo del cilantro en la región de Cúcuta, Colombia, ha experimentado un crecimiento significativo en las últimas décadas debido a su importancia en la cocina local y regional. El cilantro es valorado por su sabor distintivo y su uso en una variedad de platos tradicionales colombianos.</p>
                        <p class="fs-5 mb-4">El cilantro es un componente esencial en la cocina colombiana, y su cultivo en Cúcuta se ha convertido en una actividad importante para muchos agricultores locales. La demanda constante de cilantro en los mercados locales y regionales ha impulsado la expansión de su cultivo en la región, con agricultores que adoptan prácticas modernas de producción para satisfacer las necesidades del mercado.</p>
                        <p class="fs-5 mb-4">La importancia del cilantro en la cocina y la cultura de Cúcuta:</p>
                        <p class="fs-5 mb-4">El cilantro es un ingrediente clave en muchos platos típicos de la región de Cúcuta y se utiliza en una variedad de preparaciones culinarias, incluyendo sopas, guisos, salsas y aderezos. Su sabor único y aromático lo convierte en un elemento indispensable en la cocina colombiana, y su presencia en los mercados locales es fundamental para la preparación de alimentos tradicionales.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del cilantro: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso del cilantro. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo del cilantro, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para la cosecha y post-cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de cilantro debido a su alta capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares del cilantro.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de cilantro en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de cilantro, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de cilantro en la región. </p>
                    </section>
                </article>

                <section>

                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>

                                </thead>
                                <tbody>
                                    <h2>Técnicas de Siembra y Manejo del Cultivo de Cilantro</h2>

                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Técnicas de Siembra y Manejo del Cultivo de Cilantro</title>
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



                                        <table>
                                            <tr>
                                                <th>Paso</th>
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
                                                <td>Siembra</td>
                                                <td>Plantar semillas de cilantro a una profundidad superficial y espaciado adecuados.</td>
                                            </tr>
                                            <tr>
                                                <td>Riego</td>
                                                <td>Proporcionar riego regular para mantener el suelo húmedo y favorecer el crecimiento de las plantas.</td>
                                            </tr>
                                            <tr>
                                                <td>Fertilización</td>
                                                <td>Aplicar fertilizantes equilibrados según las necesidades del suelo y del cultivo de cilantro.</td>
                                            </tr>
                                            <tr>
                                                <td>Cuidado de Plagas y Enfermedades</td>
                                                <td>Monitorear regularmente las plantas de cilantro para detectar signos de plagas y enfermedades, y tomar medidas de control cuando sea necesario.</td>
                                            </tr>
                                            <tr>
                                                <td>Cosecha</td>
                                                <td>Recolectar las hojas de cilantro cuando estén maduras y listas para su uso, evitando dañar las plantas.</td>
                                            </tr>
                                        </table>

                                        <h2>Guía Paso a Paso para la Siembra, Cuidado y Cosecha del Cilantro</h2>

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
                                                        <li>Utiliza semillas frescas de cilantro de variedades probadas.</li>
                                                        <li>Planta las semillas a una profundidad superficial en el suelo.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Riego y Cuidado</td>
                                                <td>
                                                    <ul>
                                                        <li>Mantén el suelo húmedo pero no saturado mediante riegos regulares.</li>
                                                        <li>Controla las malezas y elimina las plantas enfermas para evitar la competencia y la propagación de enfermedades.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cosecha</td>
                                                <td>
                                                    <ul>
                                                        <li>Recolecta las hojas de cilantro cuando estén maduras y listas para su uso.</li>
                                                        <li>Corta las hojas con tijeras afiladas cerca del suelo para fomentar el crecimiento continuo de la planta.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>
                                </tbody>
                            </table>
                        </div>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Pasos para el cultivo exitoso del cilantro</h2>
                        <p class="fs-5 mb-4">Preparación del terreno: Antes de la siembra, es crucial preparar adecuadamente el terreno. Esto implica nivelar el campo para asegurar una distribución uniforme del agua durante el riego y eliminar cualquier maleza presente.</p>
                        <p class="fs-5 mb-4">Preparación de la semilla: Las semillas de cilantro deben seleccionarse cuidadosamente y plantarse a una profundidad superficial en el suelo. Esto puede incluir tratamientos previos para prevenir enfermedades y promover la germinación.</p>
                        <p class="fs-5 mb-4">Cuidado durante el crecimiento: Durante el período de crecimiento del cilantro, es importante mantener el suelo húmedo pero no saturado mediante riegos regulares. Además, es necesario controlar las malezas y eliminar las plantas enfermas para evitar la competencia y la propagación de enfermedades.</p>
                        <p class="fs-5 mb-4">Cosecha: Las hojas de cilantro pueden ser recolectadas cuando estén maduras y listas para su uso. Es importante cortar las hojas cerca del suelo con tijeras afiladas para fomentar el crecimiento continuo de la planta.</p>


                        <h2 class="fw-bolder mb-4 mt-5">Prácticas recomendadas para el riego, la fertilización y el manejo de plagas y enfermedades:</h2>
                        <p class="fs-5 mb-4">Riego: El cilantro requiere un suministro constante de agua para un crecimiento óptimo. Se recomienda mantener el suelo húmedo pero no saturado mediante riegos regulares, especialmente durante los períodos secos.</p>
                        <p class="fs-5 mb-4">Fertilización: El suministro adecuado de nutrientes es esencial para el desarrollo saludable del cilantro. Se pueden aplicar fertilizantes equilibrados de acuerdo con las necesidades específicas del suelo y del cultivo para promover un crecimiento vigoroso.</p>
                        <p class="fs-5 mb-4">Control de plagas y enfermedades: Durante el cultivo del cilantro, es importante monitorear regularmente las plantas para detectar signos de plagas y enfermedades. Se deben tomar medidas de control apropiadas, como el uso de insecticidas y fungicidas, para prevenir daños significativos en los cultivos.</p>

                    </section>

                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Métodos y técnicas de cosecha del cilantro en la región:</h2>
                        <p class="fs-5 mb-4">Cosecha manual: El cilantro se puede cosechar manualmente cortando las hojas maduras con tijeras afiladas cerca del suelo. Esta técnica es común en pequeñas parcelas o huertos familiares.</p>
                        <p class="fs-5 mb-4">Cosecha mecánica: En grandes áreas de cultivo de cilantro, se pueden emplear máquinas cosechadoras especializadas para agilizar el proceso de recolección. Estas máquinas cortan y recogen las hojas de cilantro de manera eficiente, reduciendo la mano de obra necesaria.</p>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Desafíos en el cultivo de cilantro en Cúcuta: </h2>
                        <p class="fs-5 mb-4">Condiciones climáticas extremas: Cúcuta experimenta condiciones climáticas variables que pueden afectar el cultivo de cilantro. Las altas temperaturas y la falta de humedad durante los períodos secos pueden provocar estrés en las plantas, mientras que las lluvias intensas pueden aumentar el riesgo de enfermedades fúngicas.</p>
                        <p class="fs-5 mb-4">Plagas y enfermedades: El cilantro es susceptible a una variedad de plagas y enfermedades que pueden afectar su rendimiento y calidad. Los insectos como los trips y las enfermedades fúngicas como el mildiú polvoriento pueden causar daños significativos en los cultivos si no se controlan adecuadamente.</p>
                        <p class="fs-5 mb-4">Competencia de malezas: Las malezas pueden competir con el cilantro por agua, nutrientes y luz solar, reduciendo así su crecimiento y rendimiento. Es importante implementar medidas de control de malezas para mantener limpio el cultivo y favorecer su desarrollo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Soluciones y estrategias recomendadas: </h2>
                        <p class="fs-5 mb-4">Selección de variedades resistentes: Optar por variedades de cilantro que sean más resistentes a las enfermedades y condiciones adversas puede ayudar a reducir el impacto de los desafíos del cultivo.</p>
                        <p class="fs-5 mb-4">Prácticas de manejo integrado de plagas y enfermedades: Implementar estrategias de manejo integrado de plagas y enfermedades que incluyan el monitoreo regular de cultivos, la aplicación oportuna de medidas de control y el uso de métodos preventivos como la rotación de cultivos y la selección de variedades resistentes.</p>
                        <p class="fs-5 mb-4">Uso de cubiertas de suelo: La aplicación de mulch o cubiertas de suelo puede ayudar a controlar las malezas y conservar la humedad del suelo, reduciendo así la competencia con el cilantro y mejorando su crecimiento y rendimiento.</p>
                        <p class="fs-5 mb-4">Optimización del riego: Utilizar sistemas de riego eficientes y programar los riegos según las necesidades del cultivo puede ayudar a mantener el suelo húmedo y reducir el estrés hídrico en las plantas, especialmente durante los períodos secos.</p>

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
            </div> <!-- Pagination-->

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>