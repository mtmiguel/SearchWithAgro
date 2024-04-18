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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo del limón mandarino</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/limonM.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo del limón mandarino en la región de Cúcuta, Colombia, ha experimentado un crecimiento significativo en las últimas décadas debido a su importancia económica y demanda tanto a nivel nacional como internacional. El limón mandarino es valorado por su sabor único y sus propiedades nutricionales beneficiosas.</p>
                        <p class="fs-5 mb-4">El cultivo del limón mandarino en Cúcuta se beneficia del clima tropical de la región, que proporciona las condiciones ideales para su crecimiento y desarrollo. Además, los suelos fértiles y las prácticas de cultivo mejoradas han contribuido al éxito de este cultivo en la zona.</p>
                        <p class="fs-5 mb-4">La importancia del limón mandarino en la economía local:</p>
                        <p class="fs-5 mb-4">El cultivo y la comercialización del limón mandarino son una fuente importante de ingresos para los agricultores de Cúcuta y sus alrededores. Este cultivo no solo genera empleo en la zona, sino que también contribuye al desarrollo económico y al comercio internacional de productos agrícolas colombianos.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del limón mandarino: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso del limón mandarino. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo del limón mandarino, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para la cosecha y post-cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de limón mandarino debido a su alta capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares del limón mandarino.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de limón mandarino en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de limón mandarino, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de limón mandarino en la región. </p>
                    </section>
                </article>

                <section>

                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered custom-table">
                                <thead>

                                </thead>
                                <tbody>
                                    <h2>Técnicas de Siembra y Manejo del Cultivo de Limón Mandarino</h2>

                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Técnicas de Siembra y Manejo del Cultivo de Limón Mandarino</title>
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
                                                <td>Plantación</td>
                                                <td>Plantar árboles de limón mandarino a una distancia adecuada (generalmente de 5 a 7 metros entre árboles) y asegurarse de plantar en la época adecuada según las condiciones climáticas locales.</td>
                                            </tr>
                                            <tr>
                                                <td>Riego</td>
                                                <td>Proporcionar riego adecuado, especialmente durante la etapa de establecimiento y en períodos secos.</td>
                                            </tr>
                                            <tr>
                                                <td>Fertilización</td>
                                                <td>Aplicar fertilizantes equilibrados según las necesidades del suelo y del árbol.</td>
                                            </tr>
                                            <tr>
                                                <td>Poda</td>
                                                <td>Realizar podas regulares para mantener la forma del árbol, promover la aireación y reducir la carga de frutas.</td>
                                            </tr>
                                            <tr>
                                                <td>Control de Malezas y Plagas</td>
                                                <td>Implementar medidas de control de malezas y monitorear y controlar plagas y enfermedades de manera regular.</td>
                                            </tr>
                                            <tr>
                                                <td>Cosecha</td>
                                                <td>Recolectar los frutos en el momento adecuado de madurez y manejarlos con cuidado para evitar daños.</td>
                                            </tr>
                                        </table>

                                        <h2>Guía Paso a Paso para la Siembra, Cuidado y Cosecha del Limón Mandarino</h2>

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
                                                        <li>Utiliza semillas frescas de limón mandarino de variedades probadas.</li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>