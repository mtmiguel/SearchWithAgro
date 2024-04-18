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
    <title>Cultivos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
    <style>
        .bg-light {

            background-image: url(CSS/IMG/campo.jpg);

            color: white;
            border-radius: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center 30%;
        }
    </style>

</head>

<body>
    <!-- Responsive navbar-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
    <!-- Page header with logo and tagline-->
    <header class="mike py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder text-white">Cultivos</h1>
                <p class="lead mb-0">Aqui podras ver todos los cultivos que tenemos para ti</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="CSS/IMG/cultivos3.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">Publicado el 1 de marzo del 2024, por Search for Agro</div>
                        <h2 class="card-title">¡Únete a la innovación agrícola con Search for Agro!</h2>
                        <p class="card-text">Nos complace invitarte a unirse a nosotros en un emocionante viaje hacia el futuro de la agricultura. En Search for Agro, estamos comprometidos con la búsqueda constante de soluciones innovadoras para mejorar la productividad y la sostenibilidad en el sector agrícola.</p>

                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/cilantro.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Cilantro</h2>
                                <p class="card-text">
                                cilantro el cultivo de cilantro es una actividad importante en la región de Cúcuta, Colombia, que contribuye a la gastronomía local y a la economía agrícola. Su uso versátil en la cocina y su popularidad entre los consumidores lo convierten en un cultivo valioso para los agricultores locales.</p>                                <a class="btn btn-primary" href="infocilantro.php">Leer más→</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/cimarron.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Cimarron</h2>
                                <p class="card-text">
                                limon mandarino , el cultivo de limón mandarino es una actividad agrícola importante en la región de Cúcuta, Colombia, que contribuye tanto a la economía local como al suministro de alimentos para la población. Los limones mandarinos cultivados en la región son apreciados por su calidad y sabor, y forman parte integral de la dieta y la cultura culinaria de la región.</p>                                
                                <a class="btn btn-primary" href="infocimarron.php">Leer más→</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/tomate.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Tomate</h2>
                                <p class="card-text">
                                el cultivo de tomate es una actividad agrícola importante en la región de Cúcuta, Colombia, que contribuye tanto a la economía local como al suministro de alimentos para la población. Los tomates cultivados en la región son apreciados por su calidad y sabor, y forman parte integral de la dieta y la cultura culinaria de la región.</p>
                                <a class="btn btn-primary" href="infoTomate.php">Leer más→</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/onions5.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Cebolla Larga</h2>
                                <p class="card-text">
                                el cultivo de cebolla larga es una actividad agrícola importante en la región de Cúcuta, Colombia, que contribuye tanto a la economía local como al suministro de alimentos para la población. La cebolla larga cultivada en la región es apreciada por su calidad y sabor, y forma parte integral de la dieta y la cultura culinaria de la región.</p>                                <a class="btn btn-primary" href="infocebollalarga.php">Leer más →</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
             
                <!-- Categories widget-->
                <div class="card mb-4">
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
            </div>                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                    <li class="page-item"><a class="page-link" href="cultivos2.php">Anterior</a></li>
                        <li class="page-item"><a class="page-link" href="cultivos.php">1</a></li>
                        <li class="page-item" aria-current="page"><a class="page-link" href="cultivos2.php">2</a></li>
                        <li class="page-item active"><a class="page-link" href="cultivos3.php">3</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->

    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="container px-4 px-lg-5">
                <p class="m-0 text-center text-white">&copy; Search for Agro 2024</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="https://bot.insertchatgpt.com/widgets/bubble.js?widget_id=51a2f4ec-5840-4d1c-857d-eec17876ce96" async></script>

</body>

</html>