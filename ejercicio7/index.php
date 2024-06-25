<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <?php
     include('libreria/areas.php');
     echo 'Como parametro';
     echo '<br>';
     echo 'El area del cuadrado es: ',areas('cuadrado',0,0,4);
     echo '<br>';
     echo 'El area del rectangulo es: ',areas('rectangulo',4,8,0);
     echo '<br>';
     echo 'El area del triangulo es: ',areas('triangulo',4,4,0);
    ?>
</body>
</html>