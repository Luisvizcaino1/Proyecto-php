<?php
session_start(); // Iniciar la sesión para poder acceder a las variables de sesión, incluyendo los posts y el usuario.

// Verificar si el usuario esta logueado.
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    header('Location: index.php'); // Si no esta logueado, redirigir al formulario de inicio de sesion.
    exit; // Finaliza el script después de la redirección.
}

// Verificar si existen posts almacenados en la sesion y si estan avcias o no .
if (isset($_SESSION['posts']) && !empty($_SESSION['posts'])) {
    echo "<h1>Posts creados:</h1>"; // un h1 en el caul   mostraremos como titulo " POSTS CREADOS" .

    // Utilizamos el el foreach para recorrer y mostrar los post almacenados .
    foreach ($_SESSION['posts'] as $post) {
        // Mostrar el titulo del post.
        echo "<h2>{$post['titulo']}</h2>";
        // Mostrar el contenido del post.
        echo "<p>{$post['contenido']}</p>";
        // Mostrar el autor del post y la fecha en la que fue creado.
        echo "<small>Creado por: {$post['autor']} el {$post['fecha']}</small><br><br>";
    }
} else {
    // Si no hay posts creados, mostrar un mensaje indicandole.
    echo "No hay posts creados, vuelve y crea uno por favor";
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Ver posts</title> 
</head>
<body>
  <br>
  <a href="welcome.php">Regresar a la página principal</a> 
  <!-- Enlace que nos hace regresar a la pagina principal la cual se llama (welcome.php) -->
</body>
</html>