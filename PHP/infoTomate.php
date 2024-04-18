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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo del tomate</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/tomate.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo del tomate en la región de Cúcuta, Colombia, ha experimentado un crecimiento significativo en las últimas décadas debido a su importancia económica y demanda tanto a nivel nacional como internacional. El tomate, también conocido como palta en algunas regiones, es valorado por su versatilidad culinaria, su alto contenido de grasas saludables y sus propiedades nutritivas. </p>
                        <p class="fs-5 mb-4">El cultivo del tomate en Cúcuta tiene sus raíces en la introducción de variedades comerciales y técnicas de cultivo mejoradas en la región en las últimas décadas. Anteriormente, el tomate era cultivado principalmente para consumo local, pero con el aumento de la demanda nacional e internacional, los agricultores locales han ampliado sus plantaciones y adoptado prácticas más modernas de producción. </p>
                        <p class="fs-5 mb-4">La importancia del tomate en la economía local:</p>
                        <p class="fs-5 mb-4">Hoy en día, el cultivo del tomate sigue desempeñando un papel vital en la economía de Cúcuta y sus alrededores. La región se destaca como uno de los principales productores de tomate en Colombia, contribuyendo significativamente al sector agrícola del país. La producción de tomate no solo proporciona empleo y sustento a miles de familias campesinas, sino que también impulsa el desarrollo económico y la seguridad alimentaria en la región.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del tomate: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso del tomate. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo del tomate, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para la cosecha y post-cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de tomate debido a su alta capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares del tomate.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de tomate en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de tomate, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de tomate en la región. </p>
                    </section>
                </article>

                <section>

                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>

                                </thead>
                                <tbody>
                                    <h2>Técnicas de Siembra y Manejo del Cultivo de tomate</h2>

                                    <meta charset="UTF-8">
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Procesos de Cultivo, Manejo y Comercialización del Tomate</title>
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

                                        <h2>Procesos de Cultivo, Manejo y Comercialización del Tomate</h2>

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
                                                <td>Plantar tomates a una distancia adecuada entre plantas y filas para permitir un crecimiento óptimo y una buena circulación de aire.</td>
                                            </tr>
                                            <tr>
                                                <td>Riego</td>
                                                <td>Proporcionar riego regular para mantener el suelo húmedo pero no saturado, especialmente durante períodos secos o de alta temperatura.</td>
                                            </tr>
                                            <tr>
                                                <td>Fertilización</td>
                                                <td>Aplicar fertilizantes balanceados según las necesidades del suelo y las etapas de crecimiento de las plantas.</td>
                                            </tr>
                                            <tr>
                                                <td>Poda</td>
                                                <td>Realizar podas para eliminar brotes laterales y hojas viejas, promoviendo así un crecimiento más vigoroso y la producción de frutos de mejor calidad.</td>
                                            </tr>
                                            <tr>
                                                <td>Control de Plagas y Enfermedades</td>
                                                <td>Implementar medidas de control integrado de plagas y enfermedades, que incluyan la rotación de cultivos, el uso de cultivos de cobertura y el control biológico.</td>
                                            </tr>
                                            <tr>
                                                <td>Cosecha</td>
                                                <td>Recolectar los tomates cuando estén maduros pero firmes, evitando daños en los frutos y utilizando herramientas adecuadas para el corte.</td>
                                            </tr>
                                            <tr>
                                                <td>Comercialización</td>
                                                <td>Vender los tomates frescos en mercados locales o a través de canales de distribución más amplios, garantizando una manipulación adecuada para mantener la calidad del producto.</td>
                                            </tr>
                                        </table>






                                        <h2>Guía Paso a Paso para la Siembra, Cuidado y Cosecha del tomate</h2>







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
                                                        <li>Utiliza semillas frescas de tomate de variedades probadas.</li>
                                                        <li>Lava la semilla para eliminar la pulpa y sécala.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Germinación de la Semilla</td>
                                                <td>
                                                    <ul>
                                                        <li>Inserta tres o cuatro palillos en la semilla y colócala en un vaso con agua, asegurándote de que la mitad inferior esté sumergida.</li>
                                                        <li>Cambia el agua cada pocos días.</li>
                                                        <li>La germinación puede tardar de dos a seis semanas.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trasplante de la Plántula</td>
                                                <td>
                                                    <ul>
                                                        <li>Cuando las raíces midan unos quince centímetros, trasplanta la semilla a una maceta con tierra para macetas.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>
                                </tbody>
                            </table>
                        </div>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Pasos para la siembra adecuada del tomate </h2>
                        <p class="fs-5 mb-4">Preparación del terreno: Antes de la siembra, es crucial preparar adecuadamente el terreno. Esto implica nivelar el campo para asegurar una distribución uniforme del agua durante el riego y eliminar cualquier maleza presente.</p>
                        <p class="fs-5 mb-4">Preparación de la semilla: Las semillas de tomate deben seleccionarse cuidadosamente y prepararse para la siembra. Esto puede incluir tratamientos previos para prevenir enfermedades y promover la germinación.</p>
                        <p class="fs-5 mb-4">Control de malezas: Durante el período de crecimiento inicial del tomate, es crucial controlar las malezas para evitar la competencia por nutrientes, agua y luz solar. Esto puede lograrse mediante la aplicación de herbicidas selectivos, el uso de prácticas culturales como el deshierbe manual y el mantenimiento adecuado del nivel del agua en el campo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Prácticas recomendadas para el riego, la fertilización y el manejo de plagas y enfermedades:</h2>
                        <p class="fs-5 mb-4">Riego: El tomate es un cultivo que requiere abundante agua durante su ciclo de crecimiento. Se recomienda implementar sistemas de riego adecuados, como el riego por inundación controlada o el riego por goteo, para garantizar un suministro constante de agua a las plantas.</p>
                        <p class="fs-5 mb-4">Fertilización: El suministro adecuado de nutrientes es esencial para el crecimiento saludable del tomate. Se pueden aplicar fertilizantes orgánicos o químicos de acuerdo con las necesidades específicas del cultivo y las condiciones del suelo. Es importante realizar análisis de suelo periódicos para determinar los requerimientos nutricionales del cultivo.</p>
                        <p class="fs-5 mb-4">Manejo de plagas y enfermedades: El tomate es susceptible a una variedad de plagas y enfermedades que pueden afectar su rendimiento. Se recomienda implementar medidas preventivas, como la rotación de cultivos, el uso de variedades resistentes, la eliminación de malezas hospederas y la aplicación oportuna de insecticidas y fungicidas cuando sea necesario para controlar las plagas y enfermedades.</p>


                    </section>

                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Métodos y técnicas de cosecha del tomate en la región:</h2>
                        <p class="fs-5 mb-4">Cosecha manual: En muchas regiones, especialmente en áreas pequeñas o con topografía irregular, la cosecha del tomate se realiza de forma manual. Los agricultores cortan las espigas maduras con herramientas manuales como segadoras o guadañas y las agrupan en manojos para su posterior procesamiento.</p>
                        <p class="fs-5 mb-4">Cosecha mecánica: En áreas con grandes extensiones de cultivo de tomate, se emplean máquinas cosechadoras especializadas. Estas máquinas cortan y trillan las espigas de tomate de manera eficiente, separando los granos de la paja. La cosecha mecánica es más rápida y puede reducir los costos laborales en comparación con la cosecha manual.</p>
                    </section>


                    <section>
                        <h2 class="fw-bolder mb-4 mt-5">Desafíos en el cultivo de tomate en Cúcuta: </h2>
                        <p class="fs-5 mb-4">Plagas: Los agricultores de tomate en Cúcuta enfrentan desafíos significativos debido a la presencia de plagas como el gusano cogollero, el pulgón del tomate y el barrenador del tallo. Estas plagas pueden causar daños severos a los cultivos, reduciendo el rendimiento y la calidad del tomate.</p>
                        <p class="fs-5 mb-4">Enfermedades: Otras amenazas importantes para los agricultores de tomate en la región son las enfermedades como la piriculariosis, el tizón bacteriano y el blasto. Estas enfermedades pueden propagarse rápidamente en condiciones de alta humedad y temperatura, afectando la salud de las plantas y disminuyendo la productividad del cultivo.</p>
                        <p class="fs-5 mb-4">Condiciones climáticas extremas: Cúcuta experimenta condiciones climáticas extremas, como sequías o inundaciones repentinas, que pueden afectar negativamente el cultivo de tomate. El exceso de lluvias puede provocar inundaciones en los campos de tomate, mientras que la sequía puede causar estrés hídrico en las plantas y reducir el rendimiento del cultivo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Soluciones y estrategias recomendadas: </h2>
                        <p class="fs-5 mb-4">Control integrado de plagas y enfermedades: Implementar prácticas de manejo integrado de plagas y enfermedades que incluyan el uso de variedades resistentes, rotación de cultivos, monitoreo regular de plagas y enfermedades, y aplicación oportuna y selectiva de insecticidas y fungicidas cuando sea necesario.</p>
                        <p class="fs-5 mb-4">Mejora de la infraestructura de riego: Invertir en sistemas de riego eficientes y tecnologías de conservación de agua para garantizar un suministro adecuado de agua durante todo el ciclo de crecimiento del tomate. Esto ayudará a mitigar los efectos de las sequías y reducir la dependencia de las lluvias para el riego.</p>
                        <p class="fs-5 mb-4">Prácticas de manejo del suelo: Promover prácticas de manejo del suelo sostenibles, como la siembra directa, la rotación de cultivos y el uso de cobertura vegetal, para mejorar la estructura del suelo, aumentar la retención de agua y nutrientes, y reducir la erosión del suelo.</p>
                        <p class="fs-5 mb-4">Capacitación y asistencia técnica: Brindar capacitación y asistencia técnica a los agricultores sobre prácticas agronómicas adecuadas, manejo integrado de plagas y enfermedades, y uso eficiente de recursos como agua y fertilizantes. Esto ayudará a mejorar las habilidades y conocimientos de los agricultores, permitiéndoles tomar decisiones informadas para aumentar la productividad y la rentabilidad de sus cultivos.</p>

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
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Search for Agro 2024 </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>