<?php
function rectangulo($pbase,$paltura) {
    $base = $pbase;
    $altura = $paltura;

    $area = $base*$altura;
    return $area;
}

function triangulo($pbase,$paltura) {
    $base = $pbase;
    $altura = $paltura;

    $area = ($base*$altura)/2;
    return $area;
}

function cuadrado($plado) {
    $lado = $plado;

    $area = $lado * $lado;
    return $area;
}

function areas($operador,$pbase, $paltura,$plado ){

    if ($operador=="rectangulo") {
        $area = rectangulo($pbase,$paltura);
    }else if($operador=="triangulo"){
        $area = triangulo($pbase,$paltura);
    }
    else if($operador=="cuadrado"){
        $area = cuadrado($plado,$plado);
    }else{
        $area ="Error!!! no se puede operar";
    }
    
    return $area;
}
?>