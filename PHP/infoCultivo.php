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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo del arroz</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/arroz.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">Cúcuta, en el departamento de Norte de Santander, Colombia, no solo es conocida por su rica historia y diversidad cultural, sino también por su destacado papel en el cultivo del arroz. Desde tiempos inmemoriales, el cultivo del arroz ha sido una parte integral de la vida agrícola en esta región, forjando un legado arraigado en la tierra y en las tradiciones locales.</p>
                        <p class="fs-5 mb-4">El cultivo del arroz en Cúcuta tiene raíces profundas que se remontan a siglos atrás. Se cree que esta práctica fue introducida por las comunidades indígenas que habitaban la región mucho antes de la llegada de los colonizadores españoles. Con el paso del tiempo, el arroz se convirtió en un cultivo fundamental para la subsistencia y el comercio local, influyendo en la configuración socioeconómica de la zona.</p>
                        <p class="fs-5 mb-4">La importancia del arroz en la economía local:</p>
                        <p class="fs-5 mb-4">Hoy en día, el cultivo del arroz sigue desempeñando un papel vital en la economía de Cúcuta y sus alrededores. La región se destaca como uno de los principales productores de arroz en Colombia, contribuyendo significativamente al sector agrícola del país. La producción de arroz no solo proporciona empleo y sustento a miles de familias campesinas, sino que también impulsa el desarrollo económico y la seguridad alimentaria en la región.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del Arroz: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso del arroz. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo del arroz, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para la cosecha y post-cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de arroz debido a su alta capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares del arroz.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de arroz en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de arroz, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de arroz en la región. </p>
                    </section>
                </article>

                <section>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Procesos de Secado, Almacenamiento y Comercialización del Arroz</title>
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

                        <h2>Procesos de Secado, Almacenamiento y Comercialización del Arroz</h2>

                        <table>
                            <tr>
                                <th>Proceso</th>
                                <th>Descripción</th>
                            </tr>
                            <tr>
                                <td>Secado</td>
                                <td>Después de la cosecha, el arroz se seca para reducir su contenido de humedad y prevenir el crecimiento de moho. Este proceso puede realizarse al sol o mediante secadores mecánicos.</td>
                            </tr>
                            <tr>
                                <td>Almacenamiento</td>
                                <td>El arroz se almacena en condiciones secas y bien ventiladas para mantener su calidad y evitar la contaminación por plagas. Se pueden utilizar silos o almacenes herméticos para el almacenamiento a largo plazo.</td>
                            </tr>
                            <tr>
                                <td>Comercialización</td>
                                <td>Una vez secado y almacenado, el arroz se comercializa a través de canales locales, regionales o internacionales, dependiendo de la escala de producción y la demanda del mercado.</td>
                            </tr>
                        </table>

                        <h2>Desafíos y Soluciones</h2>

                        <table>
                            <tr>
                                <th>Desafío</th>
                                <th>Solución</th>
                            </tr>
                            <tr>
                                <td>Plagas y Enfermedades</td>
                                <td>Implementar prácticas de manejo integrado de plagas y enfermedades, que incluyan el uso de variedades resistentes, rotación de cultivos, control biológico y uso selectivo de pesticidas.</td>
                            </tr>
                            <tr>
                                <td>Condiciones Climáticas Extremas</td>
                                <td>Adaptar las prácticas agrícolas para enfrentar las variaciones climáticas, mediante la implementación de sistemas de riego eficientes, uso de coberturas vegetales para protección del suelo y selección de variedades tolerantes a condiciones adversas.</td>
                            </tr>
                            <tr>
                                <td>Cosecha y Postcosecha</td>
                                <td>Capacitar a los agricultores en técnicas de cosecha y postcosecha adecuadas para minimizar pérdidas y garantizar la calidad del producto final. Esto incluye el manejo adecuado de maquinaria, selección cuidadosa de momentos de cosecha y prácticas de secado y almacenamiento adecuadas.</td>
                            </tr>
                        </table>

                        <section>
                            <h2 class="fw-bolder mb-4 mt-5">Enfermedades que afectan la salud y el rendimiento de los cultivos</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered custom-table">
                                    <p class="fs-5 mb-4">Algunas de las enfermedades más comunes que pueden afectar al cultivo de arroz incluyen: </p>
                                    <thead>
                                        <tr>
                                            <th>Enfermedad</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Piriculariosis (Pyricularia grisea)</td>
                                            <td>
                                                <ul>
                                                    <li>Esta enfermedad, también conocida como "quemazón del arroz", puede afectar todas las partes aéreas de la planta, incluyendo hojas, tallos y espigas.</li>
                                                    <li>Se manifiesta como manchas necróticas de color pardo a negras en las hojas, tallos y panículas del arroz.</li>
                                                    <li>En condiciones favorables de humedad y temperatura, la piriculariosis puede causar daños significativos en los cultivos, reduciendo el rendimiento y la calidad del arroz.</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tizón bacteriano (Xanthomonas oryzae pv. oryzae)</td>
                                            <td>
                                                <ul>
                                                    <li>El tizón bacteriano es una enfermedad bacteriana que afecta principalmente las hojas del arroz.</li>
                                                    <li>Se caracteriza por la aparición de manchas de color amarillo pálido a marrón en las hojas, que pueden coalescer y causar la muerte del tejido foliar.</li>
                                                    <li>En casos graves, el tizón bacteriano puede provocar la defoliación prematura de las plantas de arroz y reducir significativamente el rendimiento del cultivo.</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Blasto (Magnaporthe oryzae)</td>
                                            <td>
                                                <ul>
                                                    <li>El blasto es una enfermedad fúngica que afecta principalmente a las hojas, tallos y espigas del arroz.</li>
                                                    <li>Se manifiesta como lesiones necróticas de forma ovalada en las hojas, que pueden expandirse y coalescer, causando daños graves en el cultivo.</li>
                                                    <li>El blasto es especialmente problemático en áreas con alta humedad y temperaturas cálidas, y puede causar pérdidas significativas en el rendimiento del arroz si no se controla adecuadamente.</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bacteriosis (Burkholderia glumae)</td>
                                            <td>
                                                <ul>
                                                    <li>La bacteriosis es una enfermedad bacteriana que afecta principalmente las panículas del arroz.</li>
                                                    <li>Se manifiesta como manchas necróticas en las espigas y el grano del arroz, que pueden causar pudrición y pérdida de rendimiento.</li>
                                                    <li>Las condiciones de alta humedad y temperatura favorecen el desarrollo de la bacteriosis, por lo que es importante implementar medidas de control preventivas para minimizar su impacto en los cultivos.</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>


                        <section>
                            <h2 class="fw-bolder mb-4 mt-5">Pasos para la siembra adecuada del arroz </h2>
                            <p class="fs-5 mb-4">Preparación del terreno: Antes de la siembra, es crucial preparar adecuadamente el terreno. Esto implica nivelar el campo para asegurar una distribución uniforme del agua durante el riego y eliminar cualquier maleza presente.</p>
                            <p class="fs-5 mb-4">Preparación de la semilla: Las semillas de arroz deben seleccionarse cuidadosamente y prepararse para la siembra. Esto puede incluir tratamientos previos para prevenir enfermedades y promover la germinación.</p>
                            <p class="fs-5 mb-4">Control de malezas: Durante el período de crecimiento inicial del arroz, es crucial controlar las malezas para evitar la competencia por nutrientes, agua y luz solar. Esto puede lograrse mediante la aplicación de herbicidas selectivos, el uso de prácticas culturales como el deshierbe manual y el mantenimiento adecuado del nivel del agua en el campo.</p>

                            <h2 class="fw-bolder mb-4 mt-5">Prácticas recomendadas para el riego, la fertilización y el manejo de plagas y enfermedades:</h2>
                            <p class="fs-5 mb-4">Riego: El arroz es un cultivo que requiere abundante agua durante su ciclo de crecimiento. Se recomienda implementar sistemas de riego adecuados, como el riego por inundación controlada o el riego por goteo, para garantizar un suministro constante de agua a las plantas.</p>
                            <p class="fs-5 mb-4">Fertilización: El suministro adecuado de nutrientes es esencial para el crecimiento saludable del arroz. Se pueden aplicar fertilizantes orgánicos o químicos de acuerdo con las necesidades específicas del cultivo y las condiciones del suelo. Es importante realizar análisis de suelo periódicos para determinar los requerimientos nutricionales del cultivo.</p>
                            <p class="fs-5 mb-4">Manejo de plagas y enfermedades: El arroz es susceptible a una variedad de plagas y enfermedades que pueden afectar su rendimiento. Se recomienda implementar medidas preventivas, como la rotación de cultivos, el uso de variedades resistentes, la eliminación de malezas hospederas y la aplicación oportuna de insecticidas y fungicidas cuando sea necesario para controlar las plagas y enfermedades.</p>


                        </section>

                        <section>
                            <h2 class="fw-bolder mb-4 mt-5">Métodos y técnicas de cosecha del arroz en la región:</h2>
                            <p class="fs-5 mb-4">Cosecha manual: En muchas regiones, especialmente en áreas pequeñas o con topografía irregular, la cosecha del arroz se realiza de forma manual. Los agricultores cortan las espigas maduras con herramientas manuales como segadoras o guadañas y las agrupan en manojos para su posterior procesamiento.</p>
                            <p class="fs-5 mb-4">Cosecha mecánica: En áreas con grandes extensiones de cultivo de arroz, se emplean máquinas cosechadoras especializadas. Estas máquinas cortan y trillan las espigas de arroz de manera eficiente, separando los granos de la paja. La cosecha mecánica es más rápida y puede reducir los costos laborales en comparación con la cosecha manual.</p>
                        </section>


                        <section>
                            <h2 class="fw-bolder mb-4 mt-5">Desafíos en el cultivo de arroz en Cúcuta: </h2>
                            <p class="fs-5 mb-4">Plagas: Los agricultores de arroz en Cúcuta enfrentan desafíos significativos debido a la presencia de plagas como el gusano cogollero, el pulgón del arroz y el barrenador del tallo. Estas plagas pueden causar daños severos a los cultivos, reduciendo el rendimiento y la calidad del arroz.</p>
                            <p class="fs-5 mb-4">Enfermedades: Otras amenazas importantes para los agricultores de arroz en la región son las enfermedades como la piriculariosis, el tizón bacteriano y el blasto. Estas enfermedades pueden propagarse rápidamente en condiciones de alta humedad y temperatura, afectando la salud de las plantas y disminuyendo la productividad del cultivo.</p>
                            <p class="fs-5 mb-4">Condiciones climáticas extremas: Cúcuta experimenta condiciones climáticas extremas, como sequías o inundaciones repentinas, que pueden afectar negativamente el cultivo de arroz. El exceso de lluvias puede provocar inundaciones en los campos de arroz, mientras que la sequía puede causar estrés hídrico en las plantas y reducir el rendimiento del cultivo.</p>

                            <h2 class="fw-bolder mb-4 mt-5">Soluciones y estrategias recomendadas: </h2>
                            <p class="fs-5 mb-4">Control integrado de plagas y enfermedades: Implementar prácticas de manejo integrado de plagas y enfermedades que incluyan el uso de variedades resistentes, rotación de cultivos, monitoreo regular de plagas y enfermedades, y aplicación oportuna y selectiva de insecticidas y fungicidas cuando sea necesario.</p>
                            <p class="fs-5 mb-4">Mejora de la infraestructura de riego: Invertir en sistemas de riego eficientes y tecnologías de conservación de agua para garantizar un suministro adecuado de agua durante todo el ciclo de crecimiento del arroz. Esto ayudará a mitigar los efectos de las sequías y reducir la dependencia de las lluvias para el riego.</p>
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