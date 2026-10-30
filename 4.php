<?php

$minutos = rand(1, 20);
$es_domingo = (rand(0, 1) == 1) ? 'si' : 'no';
$turno = (rand(0, 1) == 1) ? 'mañana' : 'tarde';


if ($minutos <= 5) {
    $coste = $minutos * 1.00;
} else if ($minutos <= 8) {
    $coste = 5.00 + ($minutos - 5) * 0.80;
} else if ($minutos <= 10) {
    $coste = 7.40 + ($minutos - 8) * 0.70;
} else {
    $coste = 8.80 + ($minutos - 10) * 0.50;
}


if ($es_domingo == 'si') {
    $impuesto = $coste * 0.03;
} else {
    if ($turno == 'mañana') {
        $impuesto = $coste * 0.15;
    } else {
        $impuesto = $coste * 0.10;
    }
}


$total = $coste + $impuesto;


echo "Minutos: " . $minutos . "";
echo "Coste llamada: " . $coste . " euros";
echo "Impuesto: " . $impuesto . " euros";
echo "Total a pagar: " . $total . " euros";
?>