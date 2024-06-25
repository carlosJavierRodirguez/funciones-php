<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <?php
    include('libreria/notas.php');
     $notaUno = 3;
     $notaDos = 5;
     $notaTres= 2.5;
     
     
     $sumaNotas= $notaUno + $notaDos + $notaTres;
    echo 'El porcentaje de la nota uno es: ' . nota1($notaUno);
    echo '<br>';
    echo 'El porcentaje de la nota dos es: ' .  nota2($notaDos);
    echo '<br>';
    echo 'El porcentaje de la nota tres es: ' . nota3($notaTres) ;
    echo '<br>';
    echo suma($sumaNotas) . $sumaNotas;

    ?>
</body>
</html>