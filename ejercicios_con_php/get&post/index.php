<!DOCTYPE html>
<html>
<head>
  <title>EJERCICIO CON PHP</title> 
  <link rel="stylesheet" href="index.css">
<body>
  <div class="formulario">
    <h1 class="inicio">Inicio de sesión</h1> 
      <!-- formulario pra que el usuario inicie sesion y estamos utilizando el metodo post  -->
      <form action="login.php" method="post"> <br>
        <label>Usuario:</label><br> <!-- se le pide al usuario ingresar su nombre de usuario -->
        <input type="text" name="user" required> <!-- Campo de texto donde el usuario ingresa su nombre de usuario. -->
        <br>
        
        <label>Contraseña:</label> <br> <!-- aca le indicamos al  usuario que debe ingresar su contraseña -->
        <input type="password" name="password" required> 
        <br>
        <br>
        <input type="submit" value="Iniciar sesión" class="boton"> <br> <!-- aqui tenemos un boton que nos envia el formulario 
        al archivo 'login.php', donde tenemos toda lalogica y se verificaremos  el usuario y contraseña -->
      </form>
   
  </div>
</body>
</html>
<?php
include './inclides/footer.php'; 
?>