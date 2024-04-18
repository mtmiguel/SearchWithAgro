<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iniciar session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/inicioSe.css">
  <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
  <style>
    body {
      border: none;
      background-image: url(CSS/IMG/fertilizacion-de-fondo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">




      <a href="#" class="navbar-brand"><span class="text-primary">Search</span> For Agro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarS">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Inicio</a>
          </li>

          <li class="nav-item">
            <a href="crearCuen.php" class="nav-link">Registrarse</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

<body>
  <div class="h-auto form-container">
    <p class="title">Bienvenido</p>
    <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <?php
      $conexion = new mysqli("localhost:3306", "root", "", "search_with_agro");

      if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
      }


      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contraseña1 = $_POST["contraseña1"];


        $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE (usuario = ? or correo1 = ? )AND contraseña1 = ?");
        $stmt->bind_param("sss", $usuario, $usuario, $contraseña1);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {

          session_start();
          $_SESSION['usuario'] = $usuario;
          header("Location: index2.php");
          exit();
        } else {
          echo "Usuario o contraseña incorrecta.";
        }

        $stmt->close();
      }

      $conexion->close();
      ?>

      <input type="text" class="input" placeholder="Usuario o Correo Electrónico" name="usuario" required>
      <input type="password" class="input" placeholder="Contraseña" name="contraseña1" required>



      <input class="text-decoration-none ini text-center form-btn" type="submit" value="Iniciar Sesión">
    </form>


    <p class="mt-5 sign-up-label">
      ¿No tienes una cuenta? <a href="crearCuen.php">Registrarse</a>
    </p>
    <div class="mb-5 buttons-container">


  <footer>
    <div class="footer__p">
      <p class="footer__p-color">&copy; Search For Agro 2024</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>