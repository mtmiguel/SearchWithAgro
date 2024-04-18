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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo de la naranja</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/naranja.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo de la naranja en la región de Cúcuta, Colombia, ha experimentado un crecimiento significativo en las últimas décadas debido a su importancia económica y demanda tanto a nivel nacional como internacional. La naranja, valorada por su alto contenido de vitamina C y su sabor refrescante, es un cultivo importante para los agricultores de la región.</p>
                        <p class="fs-5 mb-4">El cultivo de la naranja en Cúcuta se beneficia de las condiciones climáticas favorables y la calidad del suelo de la región. Con prácticas de cultivo adecuadas y el uso de variedades resistentes, los agricultores locales han logrado aumentar la producción y la calidad de las naranjas cosechadas.</p>
                        <p class="fs-5 mb-4">Importancia económica y social:</p>
                        <p class="fs-5 mb-4">El cultivo de la naranja desempeña un papel vital en la economía y el sustento de muchas familias en Cúcuta y sus alrededores. La producción de naranjas genera empleo en el sector agrícola, proporciona ingresos para los agricultores y contribuye al desarrollo económico de la región. Además, la naranja es un componente importante de la dieta local y se consume fresca, en jugos o se utiliza en la industria alimentaria.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo de la naranja: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso de la naranja. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo de la naranja, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para la cosecha y post-cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de naranjas debido a su alta capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares de la naranja.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de naranja en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de naranja, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de naranja en la región. </p>
                    </section>
                </article>

                <section>

                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>

                                </thead>
                                <tbody>
                                    <h2>Técnicas de Siembra y Manejo del Cultivo de naranja</h2>

                                    <meta charset="UTF-8">
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Procesos de Cultivo, Manejo y Comercialización de la naranja</title>
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

                                        <h2>Procesos de Cultivo, Manejo y Comercialización de la naranja</h2>

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
                                                <td>Plantar naranjas a una distancia adecuada entre plantas y filas para permitir un crecimiento óptimo y una buena circulación de aire.</td>
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
                                                <td>Recolectar las naranjas cuando estén maduras pero firmes, evitando daños en los frutos y utilizando herramientas adecuadas para la cosecha.</td>
                                            </tr>
                                            <tr>
                                                <td>Comercialización</td>
                                                <td>Vender las naranjas frescas en mercados locales o a través de canales de distribución más amplios, garantizando una manipulación adecuada para mantener la calidad del producto.</td>
                                            </tr>
                                        </table>






                                        <h2>Guía Paso a Paso para la Siembra, Cuidado y Cosecha de la naranja</h2>







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
                                                        <li>Utiliza semillas frescas de naranja de variedades probadas.</li>
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
                        <h2 class="fw-bolder mb-4 mt-5">Pasos para la siembra adecuada de la naranja </h2>
                        <p class="fs-5 mb-4">Preparación del terreno: Antes de la siembra, es crucial preparar adecuadamente el terreno. Esto implica nivelar el campo para asegurar una distribución uniforme del agua durante el riego y eliminar cualquier maleza presente.</p>
                        <p class="fs-5 mb-4">Preparación de la semilla: Las semillas de naranja deben seleccionarse cuidadosamente y prepararse para la siembra. Esto puede incluir tratamientos previos para prevenir enfermedades y promover la germinación.</p>
                        <p class="fs-5 mb-4">Control de malezas: Durante el período de crecimiento inicial de la naranja, es crucial controlar las malezas para evitar la competencia por nutrientes, agua y luz solar. Esto puede lograrse mediante la aplicación de herbicidas selectivos, el uso de prácticas culturales como el deshierbe manual y el mantenimiento adecuado del nivel del agua en el campo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Prácticas de Riego y Fertilización</h2>
                        <p class="fs-5 mb-4">El riego adecuado es esencial para el cultivo de naranja, especialmente durante las etapas de crecimiento activo y la formación de frutos. Se recomienda un sistema de riego por goteo para proporcionar agua de manera eficiente y evitar el exceso de humedad en el suelo.</p>
                        <p class="fs-5 mb-4">La fertilización también desempeña un papel importante en el cultivo de naranja, ya que ayuda a mantener la salud y la productividad de los árboles. Se deben aplicar fertilizantes balanceados y específicos para cítricos de acuerdo con las necesidades nutricionales del cultivo y las características del suelo.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Control de Plagas y Enfermedades</h2>
                        <p class="fs-5 mb-4">El control de plagas y enfermedades es fundamental para garantizar el éxito del cultivo de naranja. Se deben implementar medidas preventivas, como la selección de variedades resistentes, el manejo adecuado de malezas y la eliminación de restos de cultivos enfermos, para reducir el riesgo de infestaciones.</p>
                        <p class="fs-5 mb-4">En caso de presencia de plagas o enfermedades, se pueden utilizar métodos de control biológico, químico o cultural según sea necesario. Es importante monitorear regularmente el cultivo para detectar signos de problemas y tomar medidas correctivas de manera oportuna.</p>

                        <h2 class="fw-bolder mb-4 mt-5">Cosecha y Postcosecha</h2>
                        <p class="fs-5 mb-4">La cosecha de naranjas se realiza cuando los frutos alcanzan su madurez fisiológica y presentan un color y tamaño adecuados para su comercialización. Se recomienda realizar la cosecha manualmente, utilizando tijeras de podar limpias para evitar dañar los frutos.</p>
                        <p class="fs-5 mb-4">Una vez cosechadas, las naranjas deben manipularse con cuidado para evitar golpes y magulladuras que puedan afectar su calidad. Se pueden almacenar en cámaras frigoríficas a una temperatura y humedad específicas para prolongar su vida útil y mantener su frescura.</p>

                    </section>

            </div>
            <!-- Sidebar-->
            <div class="col-lg-4">

                <!-- Categories widget-->
                <div class="card mb-4 mt">
                    <div class="card-header">Categorías</div>
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
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Search for Agro 2024 </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>