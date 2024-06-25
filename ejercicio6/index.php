<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentaje de Notas</title>
</head>
<body>
    <?php
        include('libreria/porcenNota.php');
     $nota1 = sumar(5,0.3);
     $nota2 = sumar(3.5,0.3);
     $nota3 = sumar(4,0.4);

     $suma = $nota1+$nota2+$nota3;

     echo 'Como parametro';
     echo '<br>';
     echo 'El porcentaje de la nota 1 es: ',$nota1;
     echo '<br>';
     echo 'El porcentaje de la nota 1 es: ',$nota2;
     echo '<br>';
     echo 'El porcentaje de la nota 1 es: ',$nota3;
     echo '<br>';
     echo 'La suma de las notas es: ',$suma;
    ?>
</body>
</html>