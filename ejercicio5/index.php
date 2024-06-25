<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Notas</title>
</head>
<body>
    <?php
        include('libreria/promedio.php');
        echo 'Como parametro';
        echo '<br>';
        echo 'El promedio de las tres notas es:';
        echo '<br>';
        echo promedio(5,3,1);
    ?>
</body>
</html>