<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador CRUD</title>
    <!-- Agregar Bootstrap para estilos -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="CSS/style.css">

    <style>
        /* Estilos CSS aquí */
        .mt{
            margin-top: 100px;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
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



<div class="container mt">
    <h2>Tabla de Usuarios</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Establecer la conexión con la base de datos
            $servername = "localhost:3306"; // Cambia esto si tu servidor de base de datos está en otro lugar
            $username = "root";
            $password = "";
            $database = "search_with_agro";

            $conn = new mysqli($servername, $username, $password, $database);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta para obtener los datos de la tabla 'usuarios'
            $sql = "SELECT id, usuario, correo1, contraseña1 FROM usuarios";
            $result = $conn->query($sql);

            // Mostrar los datos en la tabla
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["usuario"]."</td>";
                    echo "<td>".$row["correo1"]."</td>";
                    echo "<td>".$row["contraseña1"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay usuarios</td></tr>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<div class="container mt-5 mb">
    <h2>Actualizar Datos de Usuario</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="id">ID del Usuario:</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="usuario">Nuevo Nombre de Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">
            <label for="correo">Nuevo Correo Electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo">
        </div>
        <div class="form-group">
            <label for="contraseña">Nueva Contraseña:</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han proporcionado los datos del formulario
    if (isset($_POST['id']) && isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['contraseña'])) {
        // Limpiar y validar los datos de entrada
        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        // Establecer la conexión con la base de datos
        $servername = "localhost:3306"; // Cambia esto si tu servidor de base de datos está en otro lugar
        $username = "root";
        $password = "";
        $database = "search_with_agro";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta preparada para actualizar los datos del usuario
        $sql = "UPDATE usuarios SET usuario=?, correo1=?, contraseña1=? WHERE id=?";
        
        $stmt = $conn->prepare($sql);

        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param("sssi", $usuario, $correo, $contraseña, $id);

        if ($stmt->execute() === TRUE) {
            echo "<div class='container mt-3'>";
            echo "<div class='alert alert-success' role='alert'>Los datos del usuario con ID $id han sido actualizados correctamente.</div>";
            echo "</div>";
        } else {
            echo "<div class='container mt-3'>";
            echo "<div class='alert alert-danger' role='alert'>Error al actualizar los datos del usuario: " . $conn->error . "</div>";
            echo "</div>";
        }

        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    } else {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-warning' role='alert'>Por favor, complete todos los campos del formulario.</div>";
        echo "</div>";
    }
}
?>

</body>
</html>
