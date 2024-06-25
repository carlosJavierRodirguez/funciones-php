<?php
function calcularEdad($anioNac) {
     $perso = $anioNac;
     $anioAct = 2024;

    $edadPer= $anioAct-$perso;

    if ($edadPer>=18) {
        $resultado = ('La persona es mayor de edad');
    }
    else{
        $resultado = ('La persona es menor de edad');
    }
       
    return  $edadPer;
}

function promedio($resultado,$numeros){
     $resultadoOpera = $resultado;
     $divisor = $numeros;
    
    $promedio = $resultadoOpera / $divisor;

    if ($promedio>=18) {
        $resultado = 'El promedio de edades estan en la mayoria de edad ';
    }
    else{
        $resultado = 'El promedio de edades estan en la minoria de edad ';
    }

    return $resultado . $promedio;
}
?>