<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Dos Numero</title>
</head>
<body>
    <?php
        include('libreria/suma.php');

        $numeroUno = 4;
        $numeroDos = 8;
        echo 'Como parametro';
        echo '<br>';
        echo 'La suma da: ', suma($numeroUno,$numeroDos);
    ?>
</body>
</html>