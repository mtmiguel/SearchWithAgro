<?php
include ("");
?>


<?php
session_start();

// Define tus credenciales de usuario aquí (reemplaza con tu base de datos)
$usuario_correcto = "usuario";
$contrasena_correcta = "contrasena_segura";

// Recupera las credenciales ingresadas por el usuario
$usuario_ingresado = $_POST['username'];
$contrasena_ingresada = $_POST['password'];

if ($usuario_ingresado === $usuario_correcto && $contrasena_ingresada === $contrasena_correcta) {
    // Las credenciales son correctas, inicia la sesión
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $usuario_ingresado;
    
    // Redirige al usuario a la página de inicio de sesión exitosa
    header("Location: inicio_exitoso.php");
} else {
    // Las credenciales son incorrectas, muestra un mensaje de error
    echo "Credenciales incorrectas. <a href='login.php'>Volver a intentar</a>";
}
?>
