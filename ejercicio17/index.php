<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contar numeros pares e impares</title>
</head>
<body>
    <?php
        include('libreria/contar.php');

         $numero = 5;
    
        $resultadosContar= contar($numero);
        
        echo $resultadosContar;

    ?>
</body>
</html>