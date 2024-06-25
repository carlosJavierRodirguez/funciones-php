<?php
function contar($pnumero) {
     $numero = $pnumero;
     $contador = 1;
     $resultadoContar = "";

    while($contador<=$numero){
        
        $resultadoContar+=$contador;
        $contador=$contador+1;
    }
    return $resultadoContar;
}

?>