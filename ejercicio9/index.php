<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saber si la persona es mayor de edad</title>
</head>
<body>
    <?php
     include('libreria/persona.php');
      $edad = 12;

      echo 'Como parametro';
      echo '<br>';
      echo edades($edad);
    ?>
</body>
</html>