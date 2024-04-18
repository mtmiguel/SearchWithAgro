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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SFA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
  <style>
    .d-block {
      filter: blur(0);
      margin-top: 0;
    }

    .text-white {
      font-weight: bold;
    }

    p {
      text-align: justify;

    }

    .carousel-caption {
      backdrop-filter: blur(5px);
    }
  </style>
</head>

<body>

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


  <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators mb-5">
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="CSS/IMG/cafe-grano.jpg" class="d-block w-100" alt="" />

        <div class="carousel-caption mb-5">
          <h1 class="text-white">Planificación de cultivos y rotación</h1>
          <p>
            Antes de sembrar, dedica tiempo a planificar qué cultivos serán más beneficiosos para tu terreno y tu región.
          </p>
          <a href="cultivos.php" class="btn btn-primary mt-3">Más Información</a>
        </div>

      </div>
      <div class="carousel-item">
        <img src="CSS/IMG/zanahoria-carrusel.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption mb-5">
          <h1 class="text-white">Manejo integrado de plagas y enfermedades</h1>
          <p>
            En lugar de depender únicamente de pesticidas químicos, considera adoptar un enfoque más holístico para controlar las plagas y enfermedades en tu cultivo. 
          </p>
          <a href="cultivos.php" class="btn btn-primary mt-3">Más Información</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="CSS/IMG/arroz-carrusel.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption mb-5">
          <h1 class="text-white">Gestión del agua y conservación del suelo</h1>
          <p>
            El agua y el suelo son recursos fundamentales en la agricultura, por lo que es crucial utilizarlos de manera eficiente y sostenible. 
          </p>
          <a href="cultivos.php" class="btn btn-primary mt-3">Más Información</a>
        </div>
      </div>
    </div>
  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
    <span class="visually-hidden">hola</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"> </span>
    <span class="visually-hidden">hola</span>
  </button>
  </div>

  <div class="fondow bg-light">
    <section class="about section-padding">

      <div class="container conteiner-flex">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="CSS/IMG/cultivo.jpg" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md5">
            <div class="about-text">
              <h2>Calidad de los productos</h2>
              <p>

                La calidad de los productos agrícolas es esencial para la satisfacción del consumidor y su salud. El cultivo adecuado influye en aspectos como el sabor, la textura, el valor nutricional y la seguridad alimentaria de los alimentos. Por ejemplo, la cosecha en el momento óptimo de madurez y el manejo adecuado durante la postcosecha pueden realzar el sabor y la frescura de los productos, mientras que el uso responsable de fertilizantes y prácticas orgánicas puede aumentar su valor nutricional </p>
              <a href="cultivos.php" class="btn btn-primary">Mas informacion</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>












  <section class="services section-padding">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="section-header text-center text-white pb-5">
            <h2>Nuestros servicios</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-laptop"></i>
              <h3 class="card-title">Registrate</h3>
              <p class="lead">
                Puedes usar algunas funciones de nuestra pagina web pero si quieres utilizar las demás funciones solo tendrás que regístrate llenando un simple formulario dando click en el botón de aquí abajo, o si ya tienes una cuenta simplemente inicia session.

              </p>
              <button class="btn bg-primary text-white">
                <a href="crearCuen.php" class="text-white text-decoration-none">Regístrate</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-people-fill"></i>
              <h3 class="card-title">Nosotros</h3>
              <p class="lead">
                Somos Search For Agro tu recurso principal para el cuidado de cultivos en la región de Cúcuta,
                Norte de Santander. Nos dedicamos a proporcionar a los agricultores locales las herramientas,
                conocimientos y consejos necesarios para optimizar el rendimiento de sus cultivos, enfrentar desafíos climáticos y promover prácticas sostenibles.
              </p>
              <button class="btn bg-primary text-white">
                <a href="nosotros.php" class="text-white text-decoration-none">Sobre Nosotros</a>


              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-chat-square-text"></i>
              <h3 class="card-title">Progreso</h3>
              <p class="lead">
                Con nosotros podrás agregar tus cultivos y ver un aproximado de cuando estarán listos para cosechar (el tiempo puede variar), recuerda que para acceder a esta sección tendrás que haberte registrado o iniciado sección con tu cuenta para guardar tus avances.
              </p>
              <button class="btn bg-primary text-white">
                <a href="historial.php" class="text-white text-decoration-none">Mi Progreso</a>


              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portafolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 section-header bg-dark text-white text-center p-5 rounded mb-5">
            <h2>Cultivos</h2>
            <p>

              Los cultivos agrícolas son la base fundamental de la agricultura y juegan un papel crucial en la alimentación, economía y sostenibilidad ambiental a nivel global. Desde los cereales que constituyen la base de la dieta humana hasta las frutas y hortalizas que añaden diversidad y nutrientes esenciales a nuestra alimentación, los cultivos son la columna vertebral de la seguridad alimentaria y la salud pública.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/tomate-cultivos.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Tomates</h3>
              <p class="lead">
                Los tomates prefieren suelos bien drenados y fértiles con un pH entre 6.0 y 6.8. Necesitan pleno sol y temperaturas cálidas para crecer adecuadamente.
              </p>
              <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/papas-cultivo.jpg" class="mb-4 img-fluid" alt="" />
              </div>
              <h3>Papa</h3>
              <p class="lead">
                La cosecha de las papas generalmente ocurre de 90 a 120 días después de la siembra, dependiendo de la variedad y las condiciones de crecimiento. </p>
                <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/arroz-cultivos.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Arroz</h3>
              <p class="lead">
                El arroz se cultiva en campos inundados o en suelos saturados de agua. Se siembra en primavera en áreas más frías y en verano en áreas más cálidas. </p>
                <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portafolio section-padding mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 section-header bg-dark text-white text-center p-5 rounded mb-5">
            <h2>Plagas</h2>
            <p>

              La presencia de plagas en los cultivos representa uno de los desafíos más significativos para los agricultores en todo el mundo. Estas plagas, que pueden incluir insectos, enfermedades y malezas, tienen el potencial de causar daños severos a los cultivos, reduciendo rendimientos y calidad, e incluso provocando pérdidas económicas significativas
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body ">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/pulgones-plaga.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Insectos Herbívoros</h3>
              <p class="lead">
                Estos pequeños insectos chupadores de savia se alimentan de una amplia variedad de plantas cultivadas, incluyendo tomates, papas, cereales y frutas. Pueden debilitar las plantas al extraer nutrientes y transmitir enfermedades virales.

              </p>
              <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/hongos-plagas.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Enfermedades fúngicas</h3>
              <p class="lead">
                Los hongos patógenos pueden infectar los cultivos y causar enfermedades como mildiú polvoriento, oídio, roya, tizón tardío y manchas foliares. Estas enfermedades pueden provocar marchitez, pudrición, manchas en las hojas y frutos </p>
                <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="CSS/IMG/maleza.plagas.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maleza</h3>
              <p class="lead">
                Las plantas no deseadas que compiten por nutrientes, agua y luz solar con los cultivos se conocen como malezas. Pueden reducir los rendimientos de los cultivos y dificultar las labores de manejo y cosecha.
              </p>
              <button class="btn bg-primary text-white">
                <a href="cultivos.php" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Search For Agro 2024</p>
    </div>
  </footer>

  <script>
    const body = document.body;
    const labelToggle = document.querySelector(".theme-switch");

    labelToggle.addEventListener("click", (event) => {
      if (event.target.tagName.toLowerCase() !== 'input') {
        if (body.classList.contains("modo-oscuro")) {
          body.classList.remove("modo-oscuro");
          localStorage.setItem("modo", "claro");
        } else {
          body.classList.add("modo-oscuro");
          localStorage.setItem("modo", "oscuro");
        }
      }
    });

    const modoAlmacenado = localStorage.getItem("modo");
    if (modoAlmacenado) {
      body.classList.add(
        modoAlmacenado === "oscuro" ? "modo-oscuro" : "modo-claro"
      );
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://bot.insertchatgpt.com/widgets/bubble.js?widget_id=51a2f4ec-5840-4d1c-857d-eec17876ce96" async></script>


</body>

</html>