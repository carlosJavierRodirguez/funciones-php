<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de 3 cuadrados</title>
</head>
<body>
    <?php
        include('libreria/area.php');

      $n1 = 5;
      $n2 = 6;
      $n3 = 8;

      echo 'Como parametro';
      echo '<br>';
      echo areaMayor($n1,$n2,$n3);
    ?>
</body>
</html>