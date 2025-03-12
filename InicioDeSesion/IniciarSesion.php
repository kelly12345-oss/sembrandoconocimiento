<?php
session_start();
include('Conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave']) ) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validar las entradas del formulario
$Usuario = validate($_POST['Usuario']);
$Clave = validate($_POST['Clave']);

// Comprobar si el usuario está vacío
if (empty($Usuario)) {
    header("Location: Index.php?error=El Usuario Es Requerido");
    exit();
}

// Comprobar si la clave está vacía
if (empty($Clave)) {
    header("Location: Index.php?error=La clave Es Requerida");
    exit();
} else{

// Encriptar la clave


// Realizar la consulta a la base de datos
$Sql = "SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Clave='$Clave'";
$result = mysqli_query($conexion, $Sql);

// Comprobar si se encontró un registro
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    
    // Almacenar datos en la sesión
    $_SESSION['Usuario'] = $row['Usuario'];
    $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
    $_SESSION['Id'] = $row['Id'];
    
    // Redirigir a la página de inicio
    header("Location: Inicio.php");
    exit();
} else {
    // Redirigir si el usuario o la clave son incorrectos
    header("Location: Index.php?error=El usuario o la clave son incorrectas");
    exit();
    }
}

} else  {
    // Redirigir si el usuario o la clave son incorrectos
    header("Location: Index.php");
    exit();
}
?>