<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resta, Multiplicacion, Division</title>
</head>
<body>
    <?php
        include('libreria/operaciones.php');
        echo 'Como parametro';
        echo '<br>';
        echo 'Resta: ', operacion("resta", 9,8);
        echo '<br>';
        echo 'Multiplicacion: ', operacion("multiplicacion", 9,8);
        echo '<br>';
        echo 'Division: ', operacion("division", 19,11);
    ?>
</body>
</html>