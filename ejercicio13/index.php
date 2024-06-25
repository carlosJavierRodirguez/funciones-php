<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la edad e 3 personas</title>
</head>
<body>
    <?php
     include('libreria/calcular.php');

     echo 'Como parametro';
     echo '<br>';
     echo $edad1=calcularEdad (2006);
     echo '<br>';
     echo $edad2=calcularEdad (2006);
     echo '<br>';
     echo $edad3=calcularEdad (2005);
     echo '<br>';
    
     $suma = $edad1+$edad2+$edad3;

     echo promedio($suma,3);
     
    ?>
</body>
</html>