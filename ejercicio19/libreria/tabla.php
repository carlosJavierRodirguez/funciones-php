<?php
function tabla($pmultiplicar,$pnumero){
     $multiplicar = $pmultiplicar;
     $numero = $pnumero;

    for($multiplicar; $multiplicar <=$numero; $multiplicar++){
        $result = $multiplicar * $numero;
       
        if($result%2==0){
            echo $numero ."x". $multiplicar ."=". $result;
            echo "Es Par <br>";
        }
        else{
            echo $numero ."x". $multiplicar ."=". $result;
            echo "Es impar <br>";
        }
    }
    return "Fin";
}
?>
