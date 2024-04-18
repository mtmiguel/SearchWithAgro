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
                        <h1 class="fw-bolder mb-1 mt">Acerca del cultivo de yuca</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/yuca.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">Cúcuta, en el departamento de Norte de Santander, Colombia, es conocida por su rica historia y diversidad cultural, así como por su destacado papel en el cultivo de la yuca. Desde tiempos antiguos, el cultivo de la yuca ha sido una parte esencial de la vida agrícola en esta región, creando un legado arraigado en la tierra y en las tradiciones locales.</p>
                        <p class="fs-5 mb-4">El cultivo de la yuca en Cúcuta tiene profundas raíces que se remontan a siglos atrás. Se cree que esta práctica fue introducida por las comunidades indígenas que habitaban la región mucho antes de la llegada de los colonizadores españoles. Con el tiempo, la yuca se convirtió en un cultivo fundamental para la subsistencia y el comercio local, influyendo en la configuración socioeconómica de la zona.</p>
                        <p class="fs-5 mb-4">La importancia de la yuca en la economía local:</p>
                        <p class="fs-5 mb-4">Hoy en día, el cultivo de la yuca sigue desempeñando un papel vital en la economía de Cúcuta y sus alrededores. La región se destaca como uno de los principales productores de yuca en Colombia, contribuyendo significativamente al sector agrícola del país. La producción de yuca no solo proporciona empleo y sustento a miles de familias campesinas, sino que también impulsa el desarrollo económico y la seguridad alimentaria en la región.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo de la Yuca: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta, ubicado en el departamento de Norte de Santander, brinda condiciones propicias para el cultivo exitoso de la yuca. Esta región se caracteriza por su clima tropical con dos estaciones bien definidas: una temporada seca y otra de lluvias abundantes. Durante la temporada de lluvias, que generalmente se extiende de abril a noviembre, se registra una precipitación suficiente para el cultivo de la yuca, mientras que la estación seca, de diciembre a marzo, ofrece condiciones óptimas para el crecimiento y la cosecha del cultivo.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Preparación: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta y sus alrededores son conocidos por su fertilidad y variedad. Los suelos aluviales, típicos de la región, son especialmente adecuados para el cultivo de yuca debido a su capacidad de retención de agua y nutrientes. Estos suelos se forman por la sedimentación de materiales arrastrados por los ríos de la zona, lo que los convierte en un medio ideal para el desarrollo de los sistemas radiculares de la yuca.</p>
                        <p class="fs-5 mb-4">Para preparar el suelo para el cultivo de yuca en Cúcuta, se emplean diversas técnicas, como el arado y la nivelación del terreno. Estas prácticas ayudan a mejorar la estructura del suelo, facilitan la absorción de agua y nutrientes por parte de las plantas de yuca, y promueven un crecimiento uniforme del cultivo. Además, se pueden aplicar enmiendas orgánicas o minerales para corregir posibles deficiencias de nutrientes y mejorar la fertilidad del suelo, asegurando así una producción óptima de yuca en la región. </p>
                    </section>
                </article>

                <section>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Procesos de Secado, Almacenamiento y Comercialización de la Yuca</title>
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

                        <h2>Procesos de Secado, Almacenamiento y Comercialización de la Yuca</h2>

                        <table>
                            <tr>
                                <th>Proceso</th>
                                <th>Descripción</th>
                            </tr>
                            <tr>
                                <td>Secado</td>
                                <td>Después de la cosecha, la yuca se seca para reducir su contenido de humedad y prevenir el desarrollo de moho. Este proceso puede realizarse al sol o mediante secadores mecánicos.</td>
                            </tr>
                            <tr>
                                <td>Almacenamiento</td>
                                <td>La yuca se almacena en condiciones secas y bien ventiladas para mantener su calidad y evitar la contaminación por plagas. Se pueden utilizar silos o almacenes herméticos para el almacenamiento a largo plazo.</td>
                            </tr>
                            <tr>
                                <td>Comercialización</td>
                                <td>Una vez seca y almacenada, la yuca se comercializa a través de canales locales, regionales o internacionales, dependiendo de la escala de producción y la demanda del mercado.</td>
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
        </div> <!-- Pagination-->

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