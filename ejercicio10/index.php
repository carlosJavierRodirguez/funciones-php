<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <?php
      include('libreria/edades.php');
      
      $anioActual = 2024;
      $anioNaci= 2005;

      echo 'Como parametro';
      echo '<br>';
      echo edades($anioNaci,$anioActual);
    ?>
</body>
</html>