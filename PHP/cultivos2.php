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
                    <a href="#!"><img class="card-img-top" src="CSS/IMG/cultivos2.jpg" alt="..." /></a>
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
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/cacao.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Cacao</h2>
                                <p class="card-text">
                                En Cúcuta, ciudad ubicada en el departamento de Norte de Santander en Colombia, el cacao también desempeña un papel relevante en la economía local y en la cultura de la región. Aunque Cúcuta no es una de las principales zonas de producción de cacao en Colombia, el cultivo y la comercialización de este producto pueden encontrarse en áreas cercanas a la ciudad y en el departamento en general.</p>                                
                                <a class="btn btn-primary" href="infocacao.php">Leer más→</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/yuca.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Yuca</h2>
                                <p class="card-text">
                                el cultivo de yuca es una actividad agrícola importante en la región de Cúcuta, Colombia, que contribuye tanto a la economía local como al suministro de alimentos para la población. La yuca cultivada en la región es apreciada por su versatilidad, valor nutricional y su papel en la cultura culinaria local.</p>                                <a class="btn btn-primary" href="infoyuca.php">Leer más→</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/aguacate.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Aguacate</h2>
                                <p class="card-text">
                                
                                El aguacate es un elemento fundamental en la cocina colombiana y un alimento muy querido en todo el país. Conocido localmente como "palta" o "aguacate", esta fruta no solo es apreciada por su delicioso sabor y textura cremosa, sino que también desempeña un papel importante en la cultura y la economía de Colombia.</p>                                
                                <a class="btn btn-primary" href="infoAguacate.php">Leer más→</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="CSS/IMG/arroz.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">1 de marzo, 2024</div>
                                <h2 class="card-title h4">Arroz</h2>
                                <p class="card-text">
                                El arroz es uno de los alimentos básicos más importantes a nivel mundial y es consumido por una gran parte de la población en diferentes culturas y regiones. El arroz es un alimento versátil y nutritivo que desempeña un papel fundamental en la alimentación de muchas culturas en todo el mundo. Su importancia va más allá de su función como fuente de calorías, ya que también tiene un gran significado cultural y económico.</p>                                
                                <a class="btn btn-primary" href="infoCultivo.php">Leer más →</a>
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
                    <li class="page-item"><a class="page-link" href="cultivos.php">Anterior</a></li>
                        <li class="page-item"><a class="page-link" href="cultivos.php">1</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="cultivos2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="cultivos3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="cultivos3.php">Siguiente</a></li>
                    </ul>
                </nav>
        </div>
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