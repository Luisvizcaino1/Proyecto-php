<?php
session_start(); // Inicia una nueva sesión o reanuda la existente para poder acceder a los datos del usuario.

 // Verificar si el usuario está logueado comprobando si existe y no está vacío el dato de sesión 'user'.
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    // Si el usuario está logueado, mostramos un mensaje de bienvenida con su nombre.
    echo "BIENVENID@: {$_SESSION['user']['name']} <br>"; // Utiliza la variable de sesión para acceder al nombre del usuario.
} else {
    // Si el usuario no está logueado, redirigimos a la página de inicio de sesión.
    header('Location: index.php'); // Redirige a index.php para que el usuario pueda iniciar sesión.
    exit; // Detiene la ejecucion del codigo  después de redirigirnos .
}
?>

<!-- Formulario para crear un nuevo post -->
<form action="crear_post.php" method="post"> <!-- Cuando se envie el formulario, nos envia a crear_post.php -->
    <input type="submit" value="Crear un nuevo post"> <!-- Botón para crear un nuevo post -->
</form>

<!-- Formulario para cerrar sesion -->
<form action="logaut.php" method="post"> <!-- Cuando se envíe el formulario, nos envia a index.php -->
    <input type="submit" value="Cerrar sesión"> <!-- Botón para cerrar sesión -->
</form>

<!-- Formulario para bloquear sesiin -->
<form action="bloquear.php" method="post"> <!-- Cuando se envie el formulario, nos envia a bloquear.php -->
    <input type="submit" value="Bloquear Sesión"> <!-- Botón para bloquear sesion -->
</form>
<form action="ver_posts.php" method="post">
    <input type="submit" value="Ver Posts Creados"> 
</form>

<?php
include './inclides/footer.php'; // Incluir el pie de pagina :) .
?>
