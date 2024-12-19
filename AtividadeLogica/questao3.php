<?php

$salario = 5000;
$reajuste = ($salario <= 300) ? 0.5 : 0.3;
$salarioReajustado = $salario + ($salario * $reajuste);

echo $salario . "<br>";
echo $salarioReajustado . "<br>";
