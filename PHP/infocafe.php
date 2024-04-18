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
                        <h1 class="fw-bolder mb-1m mt">Acerca del cultivo del café en Cúcuta</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                        <!-- Post categories-->

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/cafeculti.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">Cúcuta, en el departamento de Norte de Santander, Colombia, es conocida por su rica historia y diversidad cultural. Sin embargo, también es reconocida por su destacado papel en el cultivo del café. El café ha sido una parte integral de la vida agrícola en esta región durante décadas, contribuyendo al sustento de miles de familias y al desarrollo económico de la zona.</p>
                        <p class="fs-5 mb-4">El cultivo del café en Cúcuta se beneficia de las condiciones climáticas y del suelo de la región, que son propicias para la producción de granos de alta calidad. Además, la tradición cafetera arraigada en la cultura local ha permitido el desarrollo de prácticas agrícolas y técnicas de procesamiento que resaltan las características únicas del café cultivado en esta área.</p>
                        <p class="fs-5 mb-4">La importancia del café en la economía local:</p>
                        <p class="fs-5 mb-4">El café es uno de los principales productos agrícolas de Cúcuta, y su producción y comercialización juegan un papel crucial en la economía local y nacional. La región se destaca por la calidad de sus granos de café, que son apreciados en los mercados nacionales e internacionales por su sabor distintivo y su aroma excepcional.</p>
                        <h2 class="fw-bolder mb-4 mt-5">Condiciones Climáticas y Suelo en Cúcuta, Norte de Santander</h2>
                        <p class="fs-5 mb-4">Clima Favorable para el Cultivo del Café: </p>
                        <p class="fs-5 mb-4">El clima de Cúcuta es ideal para el cultivo del café, ya que ofrece una combinación de temperaturas cálidas y lluvias moderadas a lo largo del año. Estas condiciones proporcionan el ambiente óptimo para el crecimiento y desarrollo de los cafetos, permitiendo una producción constante de granos de café de alta calidad.</p>
                        <p class="fs-5 mb-4">Tipos de Suelo Adecuados y Técnicas de Cultivo: </p>
                        <p class="fs-5 mb-4">Los suelos de Cúcuta son variados y ofrecen una amplia gama de características adecuadas para el cultivo del café. Los suelos fértiles y bien drenados son ideales para el cultivo de cafetos, proporcionando los nutrientes necesarios para un crecimiento saludable y una alta producción de granos de café. Además, se emplean técnicas de cultivo sostenibles, como la sombra natural y la rotación de cultivos, para promover la salud del suelo y la biodiversidad en las fincas cafeteras de la región.</p>
                        <p class="fs-5 mb-4">El café de Cúcuta se cultiva principalmente en pequeñas fincas familiares, donde se practican métodos de producción tradicionales y se fomenta la conservación del medio ambiente. Los caficultores de la región están comprometidos con la producción de café de alta calidad y la preservación de la herencia cafetera que ha definido a Cúcuta durante generaciones.</p>
                    </section>
                </article>
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