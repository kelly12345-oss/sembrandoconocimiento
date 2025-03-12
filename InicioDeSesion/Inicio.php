<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sembrando Conocimiento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Estilos para la barra de menú */
    .barra-menu {
        background-color: white;
        padding: 10px 20px;
        position: relative;
        border-bottom: 2px solid #007bff;
        display: flex;
        align-items: center;
        justify-content: flex-start; /* Distribuye los elementos a los extremos */
    }

    .logo-container {
        display: flex;
        align-items: center; /* Alinea verticalmente el logo y el texto */
        margin-right: auto;
    }

    .logo {
        width: 100px; /* Ajusta el ancho del logo */
        height: auto;
        margin-right: 10px; /* Elimina el espacio entre el logo y el texto */
        position: static;
    }

    .texto-logo {
        font-size: 1.3em; /* Tamaño del texto al lado del logo */
        color: #007bff; /* Color del texto */
        font-weight: bold; /* Hace que el texto sea más grueso */
        margin-left: 0px; /* Elimina el espacio entre el logo y el texto */
    }

    .barra-menu a {
        color: #007bff;
        text-decoration: none;
        margin-left: 20px;
        font-size: 1.2em;
    }

    /* Estilos para el botón de cerrar sesión */
    .btn-cerrar {
        background-color: #dc3545;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-cerrar:hover {
        background-color: #c82333;
        transform: scale(1.1);
    }

    /* Estilos para el contenido */
    .contenido {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .contenido h1 {
        color:rgb(39, 195, 243);
        font-size: 3em;
        text-shadow: 2px 2px 5px #ccc;
    }

    .bienvenida {
        font-size: 3em;
        color:hsl(189, 84.80%, 63.90%);
        animation: parpadeo 2s infinite;
    }

    @keyframes parpadeo {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
        100% {
            opacity: 1;
        }
    }

    .subtitulo {
        font-size: 2em;
        color: #ffc107;
    }

    /* Estilos para el fondo */
    body {
        font-family: 'Comic Sans MS', 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Estilos para la imagen de fondo */
    .imagen-fondo {
        background-image: url('fondo2.png');
        height: 1000px;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .texto-imagen {
        color: white;
        text-shadow: 2px 2px 5px #000;
        font-size: 3em;
        text-align: center;
    }

    /* Estilos para el contenido de temas */
    .contenido-temas {
        padding: 20px;
        background-color: #f0f0f0;
    }

    .contenido-temas ul {
        list-style: none;
        padding: 0;
    }

    .contenido-temas li {
        margin-bottom: 10px;
    }

    .contenido-temas li::before {
        content: "\25B8";
        color: #28a745;
        margin-right: 10px;
        text-align: center;
    }
</style>
</head>
<body>
    <div class="barra-menu">
        <div class="logo-container">
        <img src="logo.png.jpeg" alt="Logo de la página" class="logo">
        <span class="texto-logo">Sembrando Conocimiento</span>
    </div>
        <a href="SobreNosotros.php">Sobre Nosotros</a>
        <a href="Información.php">Información</a>
        <a href="Videos.php">Videos</a>
        <a href="Juegos.php">Juegos</a>
        <a href="¡Más diversión!.php">Información</a>
        <a href="Contacto.php">Contacto</a>
        <a href="CerrarSesion.php" class="btn-cerrar" style="color: white;">Cerrar Sesión</a>
    </div>

    <div class="imagen-fondo">
       
    </div>

    <div class="contenido">
        <h1 class ="bienvenida">La educación ambiental es clave para un futuro brillante. ¡Únete a nosotros para aprender y proteger nuestro planeta!</h1>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
