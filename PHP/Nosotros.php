<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
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
    <title>Nosotros</title>
    <!-- Favicon-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
        .bg-light {
            background-image: url(CSS/IMG/frase.jpg);
            background-size: cover;
            background-position: center;

        }

        .down {
            margin-top: 100px;
        }

        p {
            text-align: justify;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">




            <a href="#" class="navbar-brand"><span class="text-primary">Search</span> For Agro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
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



    <!-- Page Content-->
    <div class="down container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="CSS/IMG/fertilizacion-de-fondo.jpg"
                    alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">¿Quiénes somos nosotros?</h1>
                <p>Somos Search with Agro tu recurso principal para el cuidado de cultivos en la región de Cúcuta,
                    Norte de Santander. Nos dedicamos a proporcionar a los agricultores locales las herramientas,
                    conocimientos y consejos necesarios para optimizar el rendimiento de sus cultivos, enfrentar
                    desafíos climáticos y promover prácticas sostenibles. Con información específica sobre variedades de
                    cultivos adaptadas a la región,
                    técnicas de cultivo, control de plagas y enfermedades,estamos comprometidos a apoyar el desarrollo
                    agrícola de Cúcuta y sus alrededores. ¡Únete a nuestra comunidad y haz crecer tus cosechas con
                    nosotros!</p>
            </div>
        </div>


        <div class="gojo">


            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="text-white fs-4 mb-4 fst-italic">"Con cada semilla plantada, estamos
                                    sembrando la esperanza de un futuro abundante y próspero para nuestra comunidad
                                    agrícola en Cúcuta. ¡Cultivemos juntos el camino hacia el éxito!"</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Call to Action-->





        <div class="yuta">
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Selección de Cultivos Adaptados</h2>
                            <p class="card-text">Escoger variedades de cultivos que estén adaptadas a las condiciones
                                climáticas y de suelo específicas de la región de Cúcuta es fundamental. Esto implica
                                investigar y seleccionar cultivos que sean resistentes a las enfermedades
                                comunes en la zona y que requieran cantidades adecuadas de agua y luz solar disponibles
                                en la región.</p>
                        </div>
                        <div class="card-footer text-center"><a class="btn btn-primary btn-sm"
                                href="cultivos.php">cultivos</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Manejo Integrado de Plagas y Enfermedades</h2>
                            <p class="card-text"> Implementar un enfoque integral para el control de plagas y
                                enfermedades es esencial para proteger los cultivos de Cúcuta. Esto incluye prácticas
                                preventivas, como la rotación de cultivos, la selección de variedades resistentes, el
                                uso de trampas y barreras físicas, así como el uso mínimo y selectivo de productos
                                químicos para el control de plagas y enfermedades</p>
                        </div>
                        <div class="card-footer text-center"><a class="btn btn-primary btn-sm"
                                href="cultivos.php">cultivos</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Prácticas de Manejo del Suelo</h2>
                            <p class="card-text">El cuidado adecuado del suelo es crucial para garantizar el éxito a
                                largo plazo de los cultivos en Cúcuta. Se deben implementar prácticas de conservación
                                del suelo, como la labranza mínima, el mantenimiento de la cobertura vegetal, y la
                                aplicación de enmiendas orgánicas para mejorar la estructura y fertilidad del suelo.
                                Además, es importante monitorear regularmente la salud del suelo mediante análisis
                                periódicos para ajustar las prácticas de manejo según sea necesario.</p>
                        </div>
                        <div class="card-footer text-center"><a class="btn btn-primary btn-sm"
                                href="cultivos.php">cultivos</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; Search For Agro 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>