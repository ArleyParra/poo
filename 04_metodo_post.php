<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Digite la siguiente informacion:</h1>
   <form action="03_metodo_post.php" method="post">
    Nombre:
    <input type="text" name="nombre"/>
    <br>
    Fecha:
    <input type="date" name="fecha" id="">
    <br>
    Observacion:
    <input type="text" value="obs">
    <br>
    <input type="" value="Enviar">
    <br>
  </form>
  <h2>Informacion enviada es:</h2>
  <?php
  print_r($_GET);
  ?>
</body>
</html>