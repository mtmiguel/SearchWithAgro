<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: iniciarSe.php");
    exit();
}

// Función para obtener y mostrar los cultivos
function mostrarCultivos($conn) {
    $sql = "SELECT cultivo, fecha_siembra, fecha_cosecha, comentarios FROM registro_cultivos";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Mostrar los datos en una tabla HTML
        echo "<table id='cultivoTable'>";
        echo "<tr><th>Tipo de Cultivo</th><th>Fecha de Siembra</th><th>Fecha de Cosecha</th><th>Rendimiento</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cultivo"] . "</td>";
            echo "<td>" . $row["fecha_siembra"] . "</td>";
            echo "<td>" . $row["fecha_cosecha"] . "</td>";
            echo "<td>" . $row["comentarios"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron cultivos.";
    }
}

// Conexión a la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "search_with_agro";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los datos del formulario están presentes
    if (isset($_POST['tipo_cultivo'], $_POST['fecha_siembra'], $_POST['fecha_cosecha'], $_POST['rendimiento'])) {
        
        // Obtener los datos del formulario
        $tipo_cultivo = $_POST['tipo_cultivo'];
        $fecha_siembra = $_POST['fecha_siembra'];
        $fecha_cosecha = $_POST['fecha_cosecha'];
        $rendimiento = $_POST['rendimiento']; // Corrección del nombre del campo

        // Verificar el formato de la fecha de siembra y cosecha
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha_siembra) || !preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha_cosecha)) {
            echo "Error: El formato de la fecha debe ser YYYY-MM-DD.";
            exit();
        }

        // Preparar y ejecutar la consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO registro_cultivos (cultivo, fecha_siembra, fecha_cosecha, comentarios) VALUES (?, ?, ?, ?)"; // Corrección del nombre de la columna
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            echo "Error en la preparación de la consulta: " . $conn->error;
        } else {
            // Vincular parámetros y ejecutar la consulta
            $stmt->bind_param("ssss", $tipo_cultivo, $fecha_siembra, $fecha_cosecha, $rendimiento); // Corrección del nombre del campo
            if ($stmt->execute() === TRUE) {
                echo "Cultivo agregado con éxito.";
            } else {
                echo "Error al agregar el cultivo: " . $conn->error;
            }
            // Cerrar la declaración
            $stmt->close();
        }
    } else {
        echo "No se han recibido todos los datos del formulario.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Progreso</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/stylo.css">
    <style>
        .mt-5 {
            margin-top: 150px !important;
        }

        body {
            background-image: url(CSS/IMG/fertilizacion-de-fondo.jpg);
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
                        <a href="cerrar_sesion.php" class="nav-link">cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center ">
    <div class="cont mt-5 ">
        <h1>Registro de Cultivos</h1>
        <form id="cultivoForm" method="post">
            <label for="cultivo">Tipo de Cultivo:</label>
            <input type="text" id="tipo_cultivo" name="tipo_cultivo">
            <label for="fecha-siembra">Fecha de Siembra:</label>
            <input type="date" id="fecha_siembra" name="fecha_siembra">
            <label for="fecha-cosecha">Fecha de Cosecha:</label>
            <input type="date" id="fecha_cosecha" name="fecha_cosecha">
            <label for="rendimiento">Rendimiento:</label>
            <input type="text" id="rendimiento" name="rendimiento"> <!-- Corrección del nombre del campo -->
            <button type="submit" name="agregar">Agregar Cultivo</button>
        </form>
        <!-- Botón para mostrar cultivos -->
        <button id="mostrarCultivosBtn" onclick="mostrarCultivosPHP()">Mostrar Cultivos</button>
        <h2>Historial de Cultivos</h2>

        <div id="statistics" class="statistics">
            <!-- Aquí se mostrarían dinámicamente las estadísticas -->
            <?php mostrarCultivos($conn); ?>
        </div>

    </div>
</div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="scripto.js"></script>
    <script>
        function mostrarCultivosPHP() {
            // Esta función no hace nada en este contexto, ya que los cultivos ya se están mostrando en el mismo archivo PHP
        }
    </script>
      <script type="text/javascript" src="https://bot.insertchatgpt.com/widgets/bubble.js?widget_id=51a2f4ec-5840-4d1c-857d-eec17876ce96" async></script>

</body>
</html>
