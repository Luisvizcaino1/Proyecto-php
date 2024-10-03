<?php
session_start(); // iniciamos una nuevaa sesion,   Esto nos  permite utilizar variables de sesión para guardar datos del usuario.

// Incluimos el archivo del arreglo donde tenemos la lista de usuarios.
require_once './db/db.php'; 

// Verificar si el formulario ha enviado el nombre de usuario y la contraseña, y si estos no están vacíos.
if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $user_name = $_POST['user']; // Guardamos el valor del campo 'user' en la variable $user_name.
    $pass = $_POST['password']; // Guardamos el valor del campo 'password' en la variable $pass.

    // Recorremos el arreglo de usuarios para comparar los datos ingresados con los datos almacenados en nuestro arreglo.
    foreach ($users as $user) {
        // Si el nombre de usuario y la contraseña coinciden con alguno de los usuarios en el arreglo 
        if ($user['user'] == $user_name && $user['password'] == $pass) {
            // Guardamos la información del usuario en la sesión.
            $_SESSION['user'] = $user; 
            
            // Creamos una cookie para guardar el nombre de usuario y que se acabe despues  de una hora.
            setcookie('user', $user['user'], time() + 3600);
            
            // manda  al usuario a la página de bienvenida (welcome.php) si las credenciales son correctas.
            header('Location: welcome.php');
            exit; // para detener la ejecucion del codigo después que nos redirige a la otra vista.
        }
    }

    // Si no se encuentra una coincidencia en el arreglo de usuarios, mostramos un mensaje de error.
    echo "Usuario o contraseña incorrectos"; // le damos un mensaje asi por seguridad 
} 
?>