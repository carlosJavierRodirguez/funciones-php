<?php
function resta($pnumeroUno,$pnumeroDos) {
  
     $numeroUno = $pnumeroUno;
     $numeroDos = $pnumeroDos;
 
     $restar = $numeroUno - $numeroDos;
     return $restar;
 };
 
 function multiplicacion($pnumeroUno,$pnumeroDos){
  
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $multiplicar = $numeroUno * $numeroDos;
    return $multiplicar;
 };
 
 function division($pnumeroUno,$pnumeroDos){
    
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $dividor = $numeroUno / $numeroDos;
    return $dividor;
 };
 
 function operacion($poperador,$pnumeroUno,$pnumeroDos){
    $operador = $poperador;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
     if ($operador == "resta") {
        $operacionResultado = resta($pnumeroUno,$pnumeroDos);
     }else if ($operador == "multiplicacion") {
        $operacionResultado = multiplicacion($pnumeroUno,$pnumeroDos);
     }else if ($operador == "division") {
        $operacionResultado = division($pnumeroUno,$pnumeroDos);
     }else{
        $operacionResultado = "Error!!! no se puede operar";
     }
     return $operacionResultado;
 };
 
?>