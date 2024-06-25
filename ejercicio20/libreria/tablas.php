<?php
function tabla($plimite)
{

    $limite = $plimite;
    $tabla = 0;
    $pares = 0;
    $impares = 0;

    while ($tabla < $limite) {
        $tabla = $tabla + 1;
        for ($num = 1; $num <= $limite; $num++) {
            $resultado = $tabla * $num;
            if ($resultado % 2 == 0) {
                $pares = $pares + 1;
                echo $tabla . "x" . $num . "=" . $resultado . " buzz <br>";
            } else {
                $impares = $impares + 1;
                echo $tabla . "x" . $num . "=" . $resultado . " bass <br>";
            }
        }
        echo "<br>";
    }
    return "Cantidad de pares: " . $pares . " Cantidad de impares: " . $impares;
}
