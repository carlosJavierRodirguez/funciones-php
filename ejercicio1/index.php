<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función de Saludar</title>
</head>
<body>
    <?php
      include ('libreria/saludo.php');

     $saludar ='Hola Mundo';

     echo "Saludo como parametro";
     echo '<br>';
     echo saludo($saludar);
     
    ?>
</body>
</html>