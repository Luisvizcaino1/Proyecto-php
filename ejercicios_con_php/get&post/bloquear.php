<?php
session_start(); // Inicia la sesión para poder acceder a las variables de sesión

// Verificar si el usuario esta logueado
if (isset($_SESSION['user'])) {
    // Si el usuario esta logueado, mostrar el formulario para bloquear la sesión
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title> Sesión Bloqueada</title> 
    </head>
    <body>
        <h1>Desbloquear sesión</h1> <!-- Encabezado de la pagina -->
        <form action="bloquear.php" method="post"> <!-- Formulario para ingresar la contraseña de desbloqueo -->
            <label>Contraseña:</label>
            <input type="password" name="password" required> <!-- Campo para ingresar la contraseña -->
            <br><br>
            <input type="submit" value="Desbloquear"> <!-- Boton para enviar la contraseña -->
        </form>
    </body>
    </html>
    <?php
} else {
    // Si el usuario no está logueado, redirigir a la página de inicio de sesión
    header('Location: index.php'); // Redirige al formulario de inicio de sesión
    exit; // Finaliza el script después de la redirección
}

// Verificar si se ha enviado una contraseña para desbloquear la sesión
if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password']; // Obtener la contraseña ingresada

    // Comprobar si la contraseña ingresada coincide con la contraseña del usuario
    if ($password == $_SESSION['user']['password']) {
        // Si la contraseña es correcta, redirigir a la página de bienvenida
        header('Location: welcome.php'); // Redirige a la página de bienvenida
        exit; // Finaliza el script después de la redirección
    } else {
        // Mensaje de error si la contraseña es incorrecta
        echo "Credeciales incorrectas"; 
    }
}
?>