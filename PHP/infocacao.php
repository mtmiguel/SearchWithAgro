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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo del cacao</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/cacao.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4" La producción de cacao es significativa en varias regiones del mundo, especialmente en áreas tropicales y subtropicales con condiciones climáticas adecuadas y suelos fértiles. Aquí hay información general sobre las condiciones climáticas y del suelo para la producción de cacao.</p>
                        <p class="fs-5 mb-4">Regiones Productoras: El cacao se cultiva principalmente en regiones cercanas al ecuador, donde las temperaturas son cálidas y las precipitaciones son abundantes y bien distribuidas durante todo el año. Algunas de las principales regiones productoras de cacao incluyen África Occidental (principalmente Costa de Marfil y Ghana), América Latina (especialmente Brasil, Ecuador, y Colombia) y Asia (principalmente Indonesia y algunos países como Filipinas y Malasia.</p>
                        <p class="fs-5 mb-4">La importancia del cacao en la economía local:</p>
                        <p class="fs-5 mb-4">Hoy en día, el cultivo del cacao sigue desempeñando un papel vital en la economía de Cúcuta y sus alrededores. La región se destaca como uno de los principales productores de cacao en Colombia, contribuyendo significativamente al sector agrícola del país. La producción de cacao no solo proporciona empleo y sustento a miles de familias campesinas, sino que también impulsa el desarrollo económico y la seguridad alimentaria en la región.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del cacao: </p>
                        <p class="fs-5 mb-4">Clima: El cacao prospera en climas tropicales y subtropicales, con temperaturas que oscilan entre los 21°C y los 32°C. Se requiere una humedad relativa alta (alrededor del 80-85%) y precipitaciones anuales bien distribuidas, generalmente entre 1,000 y 2,500 mm por año. Sin embargo, el exceso de humedad puede provocar enfermedades fúngicas en las plantas. </p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">LSuelo: El cacao prefiere suelos bien drenados y fértiles con un pH ligeramente ácido o neutro, idealmente entre 5.0 y 7.0. Los suelos arcillosos o franco-arcillosos son comunes en las regiones productoras de cacao, ya que retienen la humedad necesaria para el crecimiento de la planta. Además, es importante que el suelo sea rico en materia orgánica y tenga una buena capacidad de retención de nutrientes.

                            Altitud: La altitud también es un factor importante para la producción de cacao. En general, el cacao se cultiva a altitudes que van desde el nivel del mar hasta unos 800 metros sobre el nivel del mar, aunque ciertas variedades pueden cultivarse a altitudes más altas.

                            Sombra: En muchas regiones, el cacao se cultiva bajo la sombra de árboles más altos, como árboles de sombra o árboles frutales. Esto ayuda a proteger las plantas de cacao del sol directo y proporciona un microclima adecuado para su crecimiento. </p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de cacao en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de cacao, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de cacao en la región. </p>
                    </section>
                </article>

                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Procesos de Cultivo, Manejo y Comercialización del Cacao</title>
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

                    <h2>Procesos de Cultivo, Manejo y Comercialización del Cacao</h2>

                    <table>
                        <tr>
                            <th>Proceso</th>
                            <th>Descripción</th>
                        </tr>
                        <tr>
                            <td>Selección del Sitio</td>
                            <td>Elegir un lugar con suelo bien drenado, sombra parcial y altitud adecuada para el cultivo del cacao.</td>
                        </tr>
                        <tr>
                            <td>Preparación del Suelo</td>
                            <td>Limpiar y preparar el suelo eliminando malezas, rocas y otros residuos. Se puede agregar materia orgánica para mejorar la estructura y fertilidad del suelo.</td>
                        </tr>
                        <tr>
                            <td>Plantación</td>
                            <td>Plantar las semillas de cacao en pozos o surcos a una distancia adecuada para permitir un buen crecimiento y facilitar la cosecha.</td>
                        </tr>
                        <tr>
                            <td>Cuidados y Mantenimiento</td>
                            <td>Proporcionar riego regular y controlar malezas, plagas y enfermedades para garantizar el crecimiento saludable de las plantas.</td>
                        </tr>
                        <tr>
                            <td>Fertilización</td>
                            <td>Aplicar fertilizantes orgánicos o químicos según las necesidades del suelo y las recomendaciones agronómicas.</td>
                        </tr>
                        <tr>
                            <td>Poda</td>
                            <td>Realizar podas para eliminar ramas muertas, enfermas o mal ubicadas, y promover un desarrollo estructural adecuado de las plantas.</td>
                        </tr>
                        <tr>
                            <td>Recolección</td>
                            <td>Recolectar las mazorcas maduras cuando alcanzan su color característico y separar las semillas de cacao de la pulpa para su posterior fermentación y secado.</td>
                        </tr>
                        <tr>
                            <td>Fermentación y Secado</td>
                            <td>Fermentar las semillas de cacao en montones o cajas durante varios días, seguido del secado al sol o en secadores artificiales hasta alcanzar el nivel de humedad adecuado.</td>
                        </tr>
                        <tr>
                            <td>Comercialización</td>
                            <td>Vender el cacao a intermediarios o empresas chocolateras, o procesarlo localmente para obtener productos de mayor valor agregado como chocolate.</td>
                        </tr>
                    </table>
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