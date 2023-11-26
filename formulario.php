<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <form action="formulario.php" method="POST">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      <input type="submit" value="Enviar">

      <?php

      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      echo "<p>Nombre: $nombre</p>";
      echo "<p>Apellido: $apellido</p>";
      echo "<p>Email: $email</p>";

      for ($i = 0; $i < strlen($password); $i++) {

         echo "*";
      }





      ?>

</body>

</html>