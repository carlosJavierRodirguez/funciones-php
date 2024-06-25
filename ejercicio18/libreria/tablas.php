<?php
function tabla($pmultiplicar,$pnumero){
     $multiplicar = $pmultiplicar;
     $numero = $pnumero;

    for($multiplicar = 1; $multiplicar<=$numero; $multiplicar++){
        $result = $multiplicar * $numero;
        echo $numero."x".$multiplicar ."=". $result . "<br>";
    }
    return "Final";
}

function tablaDelCinco($limite) {
    // Creamos un array para guardar los resultados
    $resultados = array();

    // Bucle para calcular la tabla del 5
    for ($i = 1; $i <= $limite; $i++) {
        $resultados[] = "5 x $i = " . (5 * $i); // Guardamos el resultado en el array
    }

    // Retornamos el array con los resultados
    return $resultados;
}
?>