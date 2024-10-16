<?php
// Nombre de usuario y contraseña predefinidos
$usuario_correcto = "mario";
$contraseña_correcta = "mario1234";

// Inicializa una variable para almacenar el mensaje
$mensaje = "";

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los valores enviados por el formulario
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);
    
    // Verifica si las credenciales coinciden
    if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
        // Si coinciden, muestra mensaje de éxito
        $mensaje = "<h3>Bienvenido, $usuario.</h3>";
    } else {
        // Si no coinciden, muestra un error
        $mensaje = "<h3>Nombre de usuario o contraseña incorrectos.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="post" action="">
        <label for="usuario">Nombre de usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        
        <input type="submit" value="Entrar">
    </form>

    <?php
    // Muestra el mensaje de bienvenida o error, si existe
    if (!empty($mensaje)) {
        echo $mensaje;
    }
    ?>
</body>
</html>
