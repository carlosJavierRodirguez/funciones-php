<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Total</title>

</head>

<body>
    <div>
        <?php
        include('libreria/pagoTotal.php');

        $diasTrabajados = 20;
        $valorDia = 4500;

        $sueldo = salario($diasTrabajados, $valorDia);
        $subsidioTransporte = subTrans($diasTrabajados, $valorDia);
        $descuentoSalud = salud($diasTrabajados, $valorDia);
        $descuentoPension = pension($diasTrabajados, $valorDia);
        $descuentoArl = arl($diasTrabajados, $valorDia);
        $retencionCuenta = retencion($diasTrabajados, $valorDia);
        $totalDescuento = deduciones($diasTrabajados, $valorDia);
        $pagoTotal = pagoFinal($diasTrabajados, $valorDia);

        echo 'Su salario es de:' . $sueldo;
        echo '<br>';
        echo  'El subsidio de transporte es de:' . $subsidioTransporte;
        echo '<br>';
        echo ' Su descuento en salud es:' . $descuentoSalud;
        echo '<br>';
        echo 'Su descuento de pensión es:' . $descuentoPension;
        echo '<br>';
        echo 'Su descuento en arl es:' . $descuentoArl;
        echo '<br>';
        echo 'Su retención en la cuenta es:' . $retencionCuenta;
        echo '<br>';
        echo ' El total de deducibles son:' . $totalDescuento;
        echo '<br>';
        echo ' Su pago tota seria:' . $pagoTotal;


        ?>
    </div>
</body>

</html>