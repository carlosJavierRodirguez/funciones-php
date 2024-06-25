<?php
function salario($pDiasTrabajados,$pValorDia){

    $salarioPersona = $pDiasTrabajados * $pValorDia;

    return  $salarioPersona;
}

function salud($pDiasTrabajados,$pValorDia) {

    $pagoSalud = salario($pDiasTrabajados,$pValorDia) * 0.12;

    return $pagoSalud;
}

function pension($pDiasTrabajados,$pValorDia) {

    $pagoPension =salario($pDiasTrabajados,$pValorDia) * 0.16;

    return $pagoPension;
}

function arl($pDiasTrabajados,$pValorDia) {

    $pagoArl = salario($pDiasTrabajados,$pValorDia) * 0.052;

    return $pagoArl;
}

function deduciones($pDiasTrabajados,$pValorDia) {

    $descuentos = salud($pDiasTrabajados,$pValorDia) + pension($pDiasTrabajados,$pValorDia) + arl($pDiasTrabajados,$pValorDia);

    return $descuentos;
}

function pagoFinal($pDiasTrabajados,$pValorDia) {

    $pagoTotal= salario($pDiasTrabajados,$pValorDia) - deduciones($pDiasTrabajados,$pValorDia); 

    return $pagoTotal;
}
?>