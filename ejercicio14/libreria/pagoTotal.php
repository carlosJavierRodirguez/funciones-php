<?php
function salario($pDiasTrabajados, $pValorDia)
{

    $salarioPersona = $pDiasTrabajados * $pValorDia;

    return  $salarioPersona;
}
function subTrans($pDiasTrabajados, $pValorDia)
{
    $salarioMinimo = 1600000;
    $salarioTrans = salario($pDiasTrabajados, $pValorDia);

    if ($salarioTrans <= 2 * $salarioMinimo) {
        $subTransporte = 162000;
    } else {
        $subTransporte = 0;
    }

    return $subTransporte;
}
function salud($pDiasTrabajados, $pValorDia)
{


    $pagoSalud = salario($pDiasTrabajados, $pValorDia) * 0.12;

    return $pagoSalud;
}

function pension($pDiasTrabajados, $pValorDia)
{

    $pagoPension = salario($pDiasTrabajados, $pValorDia) * 0.16;

    return $pagoPension;
}

function arl($pDiasTrabajados, $pValorDia)
{

    $pagoArl = salario($pDiasTrabajados, $pValorDia) * 0.052;

    return $pagoArl;
}
function retencion($pDiasTrabajados, $pValorDia)
{

    $salarioMinimo = 1600000;
    $reten = salario($pDiasTrabajados, $pValorDia);

    if ($reten > 4 * $salarioMinimo) {
        $descuento = $reten * 0.04;
    } else {
        $descuento = 0;
    }
    return $descuento;
}

function deduciones($pDiasTrabajados, $pValorDia)
{

    $descuentos = salud($pDiasTrabajados, $pValorDia) + pension($pDiasTrabajados, $pValorDia) +
        arl($pDiasTrabajados, $pValorDia) + retencion($pDiasTrabajados, $pValorDia);

    return $descuentos;
}

function pagoFinal($pDiasTrabajados, $pValorDia)
{

    $pagoTotal = salario($pDiasTrabajados, $pValorDia) - deduciones($pDiasTrabajados, $pValorDia);

    return $pagoTotal;
}
