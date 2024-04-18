<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: iniciarSe.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información sobre el Limón</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Estilos CSS (incluye Bootstrap)-->
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
    <!-- Navbar responsiva-->
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
    <!-- Contenido de la página-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Contenido del artículo-->
                <article>
                    <!-- Encabezado del artículo-->
                    <header class="mb-4">
                        <!-- Título del artículo-->
                        <h1 class="fw-bolder mb-1 mt">Acerca del Cultivo de Limón en Cúcuta</h1>
                        <!-- Meta información del artículo-->
                        <div class="text-muted fst-italic mb-2">Publicado el 1 de marzo de 2024, por Search for Agro</div>
                    </header>
                    <!-- Imagen de vista previa-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="CSS/IMG/limon.jpg" alt="Limón en Cúcuta" /></figure>
                    <!-- Contenido del artículo-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">El cultivo de limón es una actividad importante en la región de Cúcuta, Colombia. Aquí proporcionamos información general sobre el cultivo de limón en esta área.</p>
                        <p class="fs-5 mb-4">Condiciones Climáticas Favorables:</p>
                        <p class="fs-5 mb-4">Clima: El limón prospera en climas cálidos y subtropicales, con temperaturas que oscilan entre los 15°C y los 30°C. Requiere una exposición moderada al sol y una humedad relativa alta para su crecimiento óptimo. Las precipitaciones anuales en Cúcuta son adecuadas para el cultivo de limón, ya que proporcionan el agua necesaria para las plantas.</p>
                        <p class="fs-5 mb-4">Suelo y Preparación del Terreno:</p>
                        <p class="fs-5 mb-4">El limón prefiere suelos bien drenados y ligeramente ácidos. En Cúcuta, se utilizan técnicas de preparación del suelo como el arado y la nivelación para garantizar condiciones óptimas de crecimiento. Además, se pueden aplicar fertilizantes orgánicos o químicos según las necesidades del suelo y las recomendaciones agronómicas.</p>
                        <p class="fs-5 mb-4">Cuidados y Mantenimiento:</p>
                        <p class="fs-5 mb-4">Los cuidados del limonero incluyen riego regular, control de malezas, poda y protección contra plagas y enfermedades comunes. Estas prácticas ayudan a promover un crecimiento saludable y una buena producción de limones en la región.</p>
                    </section>
                </article>
            </div>
            <!-- Widgets laterales-->
            <div class="col-lg-4 mt">
                <!-- Widget de categorías-->
                <div class="card mb-4">
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
                <!-- Widget lateral-->
                <div class="card mb-4">
                    <div class="card-header">Recuerda</div>
                    <div class="card-body">"Con cada semilla que siembras, estás sembrando la esperanza de un futuro más verde y próspero. Sigue cultivando con amor y dedicación, porque cada cosecha es un paso hacia la abundancia y la renovación." 🌱💚</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pie de página-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Derechos de autor &copy; Search for Agro 2024 </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>