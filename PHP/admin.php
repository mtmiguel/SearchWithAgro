<?php

$conexion = new mysqli("localhost:3306", "root", "", "search_with_agro");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $cedula = $_POST["cedula"];

 
    $stmt = $conexion->prepare("SELECT id FROM admins WHERE usuario = ? AND cedula = ?");
    $stmt->bind_param("ss", $usuario, $cedula);
    $stmt->execute();
    $stmt->store_result();

if ($stmt->num_rows > 0) {
   
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: crud_admin.php");
    exit();
} else {
    echo "NO SOS ADMIN";
}

    $stmt->close();
}

$conexion->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iniciar session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Estilos para el modo claro */
    body.modo-claro {
      background-color: #fff;
      color: #000;
    }

    /* Estilos para el modo oscuro */
    body.modo-oscuro {
      background-color: #161815;
      color: #fff;
    }


    .section-padding {
      padding: 16px;
    }

    .carousel-item {
      height: 80vh;
      min-width: 300px;
    }

    .carousel-caption {
      bottom: 25px;
      z-index: 2;

    }

    .carousel-caption h5 {
      font-size: 45px;
      text-transform: uppercase;
      letter-spacing: 50px;
      margin-top: 25px;
    }

    .carousel-caption p {
      width: 60%;
      margin: auto;
      font-size: 25px;
      line-height: 1.9;

    }

    h1,
    h2 {
      color: #0066cc;
    }

    .carusel-iner::before {
      content: 0;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      background-color: rgba(0, 30, 82, 0.327);
      left: 0;
      z-index: 1;
    }

    .navbar a {
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 500;

    }

    .navbar-dark .navbar-brand {
      color: #fff;
      font-size: 25px;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 3px;
      margin: auto 2em;
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
      color: #000;
    }

    .w-100 {
      height: 100vh;
    }

    .navbar-toggler {
      padding: 1px 5px;
      font-size: 18px;
      line-height: 0.3;
    }

    .services .card-body i {
      font-size: 50px;
    }

    .team .card-body i {
      font-size: 20px;
    }


    @media(max-width:767px) {
      .navbar-nav {
        text-align: center;
      }

      .carousel-item {
        height: 70vh;

      }

      .w-100 {
        height: 70vh;

      }

      .carousel-caption {
        bottom: 125px;
      }

      .carousel-caption h1 {
        font-size: 17px;

      }

      .carousel-caption a {
        padding: 10px 15px;
        font-size: 15px;
      }

      .carousel-caption p {
        width: 100%;
        line-height: 1.5;
        font-size: 12px;
      }

      .about-text {
        padding-top: 50px;

      }

      .card {
        margin-bottom: 30px;
      }

      .section-padding {
        padding: 50px 0;
      }
    }

    .text-primary {
      font-size: 25px;
    }

    .btn-container {
      display: table-cell;
      vertical-align: middle;
      text-align: center;
    }

    .btn-container i {
      display: inline-block;
      position: relative;
      top: -9px;
    }

    label {
      font-size: 13px;
      color: #424242;
      font-weight: 500;
    }

    .btn-color-mode-switch {
      display: inline-block;
      margin: 0px;
      position: relative;
    }

    .btn-color-mode-switch>label.btn-color-mode-switch-inner {
      margin: 0px;
      width: 140px;
      height: 30px;
      background: #E0E0E0;
      border-radius: 26px;
      overflow: hidden;
      position: relative;
      transition: all 0.3s ease;
      /*box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;*/
      display: block;
    }

    .btn-color-mode-switch>label.btn-color-mode-switch-inner:before {
      content: attr(data-on);
      position: absolute;
      font-size: 12px;
      font-weight: 500;
      top: 7px;
      right: 20px;
    }

    .btn-color-mode-switch>label.btn-color-mode-switch-inner:after {
      content: attr(data-off);
      width: 70px;
      height: 16px;
      background: #fff;
      border-radius: 26px;
      position: absolute;
      left: 2px;
      top: 2px;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0px 0px 6px -2px #111;
      padding: 5px 0px;
    }

    .btn-color-mode-switch>.alert {
      display: none;
      background: #FF9800;
      border: none;
      color: #fff;
    }

    .btn-color-mode-switch input[type="checkbox"] {
      cursor: pointer;
      width: 50px;
      height: 25px;
      opacity: 0;
      position: absolute;
      top: 0;
      z-index: 1;
      margin: 0px;
    }

    .btn-color-mode-switch input[type="checkbox"]:checked+label.btn-color-mode-switch-inner {
      background: #151515;
      color: #fff;
    }

    .btn-color-mode-switch input[type="checkbox"]:checked+label.btn-color-mode-switch-inner:after {
      content: attr(data-on);
      left: 68px;
      background: #3c3c3c;
    }

    .btn-color-mode-switch input[type="checkbox"]:checked+label.btn-color-mode-switch-inner:before {
      content: attr(data-off);
      right: auto;
      left: 20px;
    }

    .btn-color-mode-switch input[type="checkbox"]:checked~.alert {
      display: block;
    }

    .dark-preview {
      background: #0d0d0d;
    }

    .white-preview {
      background: #fff;
    }

    .fondow {
      background: #212529;
      margin: 2em;
      border-radius: .5em;
      display: flex;

    }

    img {
      border-radius: .5em;
    }

    .flexi {
      margin: 2em 2em;
      display: flex;
      flex-grow: initial;

    }

    .footer__p {
      display: flex;
      justify-content: center;
      padding-top: 2em;
    }

    .theme-switch {
      --toggle-size: 15px;
      /* the size is adjusted using font-size,
     this is not transform scale,
     so you can choose any size */
      --container-width: 5.625em;
      --container-height: 2.5em;
      --container-radius: 6.25em;
      /* radius 0 - minecraft mode :) */
      --container-light-bg: #3D7EAE;
      --container-night-bg: #1D1F2C;
      --circle-container-diameter: 3.375em;
      --sun-moon-diameter: 2.125em;
      --sun-bg: #ECCA2F;
      --moon-bg: #C4C9D1;
      --spot-color: #959DB1;
      --circle-container-offset: calc((var(--circle-container-diameter) - var(--container-height)) / 2 * -1);
      --stars-color: #fff;
      --clouds-color: #F3FDFF;
      --back-clouds-color: #AACADF;
      --transition: .5s cubic-bezier(0, -0.02, 0.4, 1.25);
      --circle-transition: .3s cubic-bezier(0, -0.02, 0.35, 1.17);
    }

    .theme-switch,
    .theme-switch *,
    .theme-switch *::before,
    .theme-switch *::after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-size: var(--toggle-size);
    }

    .theme-switch__container {
      width: var(--container-width);
      height: var(--container-height);
      background-color: var(--container-light-bg);
      border-radius: var(--container-radius);
      overflow: hidden;
      cursor: pointer;
      -webkit-box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
      box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
      -webkit-transition: var(--transition);
      -o-transition: var(--transition);
      transition: var(--transition);
      position: relative;
    }

    .theme-switch__container::before {
      content: "";
      position: absolute;
      z-index: 1;
      inset: 0;
      -webkit-box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
      box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
      border-radius: var(--container-radius)
    }

    .theme-switch__checkbox {
      display: none;
    }

    .theme-switch__circle-container {
      width: var(--circle-container-diameter);
      height: var(--circle-container-diameter);
      background-color: rgba(255, 255, 255, 0.1);
      position: absolute;
      left: var(--circle-container-offset);
      top: var(--circle-container-offset);
      border-radius: var(--container-radius);
      -webkit-box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
      box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-transition: var(--circle-transition);
      -o-transition: var(--circle-transition);
      transition: var(--circle-transition);
      pointer-events: none;
    }

    .theme-switch__sun-moon-container {
      pointer-events: auto;
      position: relative;
      z-index: 2;
      width: var(--sun-moon-diameter);
      height: var(--sun-moon-diameter);
      margin: auto;
      border-radius: var(--container-radius);
      background-color: var(--sun-bg);
      -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
      box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
      -webkit-filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
      filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
      overflow: hidden;
      -webkit-transition: var(--transition);
      -o-transition: var(--transition);
      transition: var(--transition);
    }

    .theme-switch__moon {
      -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
      transform: translateX(100%);
      width: 100%;
      height: 100%;
      background-color: var(--moon-bg);
      border-radius: inherit;
      -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
      box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
      -webkit-transition: var(--transition);
      -o-transition: var(--transition);
      transition: var(--transition);
      position: relative;
    }

    .theme-switch__spot {
      position: absolute;
      top: 0.75em;
      left: 0.312em;
      width: 0.75em;
      height: 0.75em;
      border-radius: var(--container-radius);
      background-color: var(--spot-color);
      -webkit-box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
      box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
    }

    .theme-switch__spot:nth-of-type(2) {
      width: 0.375em;
      height: 0.375em;
      top: 0.937em;
      left: 1.375em;
    }

    .theme-switch__spot:nth-last-of-type(3) {
      width: 0.25em;
      height: 0.25em;
      top: 0.312em;
      left: 0.812em;
    }

    .theme-switch__clouds {
      width: 1.25em;
      height: 1.25em;
      background-color: var(--clouds-color);
      border-radius: var(--container-radius);
      position: absolute;
      bottom: -0.625em;
      left: 0.312em;
      -webkit-box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
      box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
      -webkit-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
      -o-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
      transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
    }

    .theme-switch__stars-container {
      position: absolute;
      color: var(--stars-color);
      top: -100%;
      left: 0.312em;
      width: 2.75em;
      height: auto;
      -webkit-transition: var(--transition);
      -o-transition: var(--transition);
      transition: var(--transition);
    }



    .theme-switch__checkbox:checked+.theme-switch__container {
      background-color: var(--container-night-bg);
    }

    .theme-switch__checkbox:checked+.theme-switch__container .theme-switch__circle-container {
      left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter));
    }

    .theme-switch__checkbox:checked+.theme-switch__container .theme-switch__circle-container:hover {
      left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter) - 0.187em)
    }

    .theme-switch__circle-container:hover {
      left: calc(var(--circle-container-offset) + 0.187em);
    }

    .theme-switch__checkbox:checked+.theme-switch__container .theme-switch__moon {
      -webkit-transform: translate(0);
      -ms-transform: translate(0);
      transform: translate(0);
    }

    .theme-switch__checkbox:checked+.theme-switch__container .theme-switch__clouds {
      bottom: -4.062em;
    }

    .theme-switch__checkbox:checked+.theme-switch__container .theme-switch__stars-container {
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }



    .nav-link {
      color: white;
    }

    .d-block {
      filter: blur(8px);
      margin-top: 50px;
    }


    .tomarT {
      border-radius: 500px;
      margin-top: 50px;

    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      text-decoration: none;
      list-style: none;
      outline: none;
      font-size: 10px;

      & img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }

    html {
      width: 100vw;
      height: 100vh;
    }

    body {
      width: 100%;
      height: 100%;
      position: relative;
      border: 1px solid purple;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 3em;
      background-image: url(https://www.dfgrupo.com/wp-content/uploads/2023/11/fertilizacion-de-fondo.jpg);
    }

    .form-container {
      width: 350px;
      height: 500px;
      background-color: #fff;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 10px;
      box-sizing: border-box;
      padding: 20px 30px;
      margin-bottom: 200px;
      margin-top: 300px;
    }

    .title {
      text-align: center;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      margin: 10px 0 30px 0;
      font-size: 28px;
      font-weight: 800;
    }

    .form {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-bottom: 15px;

    }

    .input {
      border-radius: 20px;
      border: 1px solid #c0c0c0;
      outline: 0 !important;
      box-sizing: border-box;
      padding: 12px 15px;
    }

    .page-link {
      text-decoration: underline;
      margin: 0;
      text-align: end;
      color: #747474;
      text-decoration-color: #747474;
    }

    .page-link-label {
      cursor: pointer;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      font-size: 9px;
      font-weight: 700;
    }

    .page-link-label:hover {
      color: #000;
    }

    .form-btn {
      padding: 10px 15px;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      border-radius: 20px;
      border: 0 !important;
      outline: 0 !important;
      background: teal;
      color: white;
      cursor: pointer;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .form-btn:active {
      box-shadow: none;
    }

    .sign-up-label {
      margin: 0;
      font-size: 10px;
      color: #747474;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .sign-up-link {
      margin-left: 1px;
      font-size: 11px;
      text-decoration: underline;
      text-decoration-color: teal;
      color: teal;
      cursor: pointer;
      font-weight: 800;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .buttons-container {
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      margin-top: 20px;
      gap: 15px;
    }

    .apple-login-button,
    .google-login-button {
      border-radius: 20px;
      box-sizing: border-box;
      padding: 10px 15px;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
        rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      font-size: 11px;
      gap: 5px;
    }

    .apple-login-button {
      background-color: #217BF0;
      color: #fff;
      border: 2px solid #217BF0;
    }

    .google-login-button {
      border: 2px solid #747474;
    }

    .apple-icon,
    .google-icon {
      font-size: 18px;
      margin-bottom: 1px;
    }

    .footer__p {
      display: flex;
      justify-content: center;
      position: absolute;
      width: 100%;
      bottom: 0;
      left: 0;
      height: 3em;
    }

    p {
      font-size: 12px;
    }

    .ini {
      color: #fff;
    }

    a {
      color: black;
    }

    a:hover {
      color: bl;
    }

    .footer__p-color {
      color: white;
    }




    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .aviso {
      font-size: 12px;
    }




    .agro-market-form p {
      margin-bottom: 20px;
    }

    .agro-market-form label {
      display: block;
    }

    .agro-market-form input[type="text"],
    .agro-market-form input[type="email"],
    .agro-market-form input[type="tel"],
    .agro-market-form textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .agro-market-form-btn {
      padding: 10px 15px;
      border-radius: 5px;
      border: 0;
      background: teal;
      color: white;
      cursor: pointer;
    }


    /* Estilos para el contenedor del formulario */
    .agro-market-form-container {
      width: 450px;
      height: 650px;
      background-color: #fff;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 10px;
      box-sizing: border-box;
      padding: 20px 30px;
      margin-top: 300px;
      margin-bottom: 150px;

      /* Estilos para el título */
      .agro-market-title {
        text-align: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        margin: 10px 0 30px 0;
        font-size: 28px;
        font-weight: 800;
      }

      /* Estilos para el formulario */
      .agro-market-form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 15px;
      }

      /* Estilos para los campos de entrada */
      .agro-market-input {
        border-radius: 20px;
        border: 1px solid #c0c0c0;
        outline: 0 !important;
        box-sizing: border-box;
        padding: 12px 15px;
      }

      /* Estilos para los enlaces del pie de página */
      .agro-market-page-link {
        text-decoration: underline;
        margin: 0;
        text-align: end;
        color: #747474;
        text-decoration-color: #747474;
      }

      /* Estilos para las etiquetas de los enlaces del pie de página */
      .agro-market-page-link-label {
        cursor: pointer;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        font-size: 9px;
        font-weight: 700;
      }

      /* Estilos para el botón del formulario */
      .agro-market-form-btn {
        padding: 10px 15px;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        border-radius: 20px;
        border: 0 !important;
        outline: 0 !important;
        background: teal;
        color: white;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      }

      /* Estilos para el botón del formulario cuando está activo */
      .agro-market-form-btn:active {
        box-shadow: none;
      }

      /* Estilos para la etiqueta de registro */
      .agro-market-sign-up-label {
        margin: 0;
        font-size: 10px;
        color: #747474;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      }

      /* Estilos para el enlace de registro */
      .agro-market-sign-up-link {
        margin-left: 1px;
        font-size: 11px;
        text-decoration: underline;
        text-decoration-color: teal;
        color: teal;
        cursor: pointer;
        font-weight: 800;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      }

      /* Estilos para el contenedor de los botones */
      .agro-market-buttons-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-top: 20px;
        gap: 15px;
      }

      /* Estilos para el botón de inicio de sesión con Apple */
      .agro-market-apple-login-button,
      .agro-market-google-login-button {
        border-radius: 20px;
        box-sizing: border-box;
        padding: 10px 15px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        font-size: 11px;
        gap: 5px;
      }

      /* Estilos para el botón de inicio de sesión con Apple */
      .agro-market-apple-login-button {
        background-color: #000;
        color: #fff;
        border: 2px solid #000;
      }

      /* Estilos para el botón de inicio de sesión con Google */
      .agro-market-google-login-button {
        border: 2px solid #747474;
      }

      /* Estilos para el icono de Apple y Google */
      .agro-market-apple-icon,
      .agro-market-google-icon {
        font-size: 18px;
        margin-bottom: 1px;
      }
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
    </div>
  </nav>
</header>

<body>
  <div class="h-auto form-container">
    <p class="title">Bienvenido Administrador</p>
    <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      <input type="text" class="input"  name="usuario" required>
      <input type="password" class="input"  name="cedula" required>
      <input class="text-decoration-none ini text-center form-btn" type="submit" value="Iniciar Sesión">

    </form>
  </div>

  <footer>
    <div class="footer__p">
      <p class="footer__p-color">&copy; 2024 Todos los derechos reservados.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>