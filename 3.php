<?php

$alu=rand(0,500);


if( $alu>=100){
    $pago=$alu*65;
}elseif($alu>=50 && $alu<=99){
    $pago=$alu*70;
}elseif($alu>=30 && $alu<=49){
    $pago=$alu*95;
}else {
    $pago=$alu*4000;
}

echo"Estos son los alumnos que van $alu que pagaran $pago € en total a la compañia de viajes";

?>