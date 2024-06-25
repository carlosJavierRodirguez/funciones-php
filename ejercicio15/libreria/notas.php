<?php
function nota1($nota) {

    $calificacion = $nota;

    $porceNota= $calificacion * 0.2;
    
    return $porceNota;
}

function nota2($nota) {
    $calificacion = $nota;

 $porceNota= $calificacion * 0.35;

 return $porceNota;
}
function nota3($nota) {
    $calificacion = $nota;

    $porceNota= $calificacion * 0.45;

    return $porceNota;
}
function suma($sumaNotas) {
    $calificacion= $sumaNotas;

    if ($calificacion>=4.5) {
        $nota = "Es una nota superior: ";
    }
    else{
        if ($calificacion<=4.5 & $calificacion>=3.5) {
            $nota = "La nota es buena: ";
        }
        else{
            if($calificacion<=3.5 & $calificacion>=3){
                $nota = "La nota es media: ";
            }
            else{
                $nota = "Es una nota mala: ";
            }
        }
    }
    return $nota;
}

?>