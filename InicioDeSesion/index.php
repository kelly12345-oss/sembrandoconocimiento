<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Style.css">
    
    <title>Inicio de Sesión</title>
</head>
<body>
    <form action="IniciarSesion.php" method="POST">
        <hr>
<?php
if (isset($_GET['error'])) {
    ?>
    <P class="error">
        <?php
        echo $_GET['error']
        ?>

    </p>
    <?php
}

?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="Usuario" placeholder="Nombre de usuario" required>
        
        <i class="fa-solid fa-unlock"></i>
        <label for="clave">Clave</label>
        <input type="password" id="clave" name="Clave" placeholder="Clave" required>
        
        <button type="submit">Iniciar Sesión</button>
      
    </form>
</body>
</html>

