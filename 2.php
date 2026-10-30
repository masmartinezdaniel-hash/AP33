<?php

$uva=rand(1,2);
$tam=rand(1,2);
$kg=rand(1,30);
$precKg=2;

if($uva==1 && $tam==1){
    $precio=($precKg+0.20)*$kg;
}elseif($uva==1 && $tam==2){
    $precio=($precKg+0.30)*$kg; 
}elseif($uva==2 && $tam==1){
    $precio=($precKg-0.30)*$kg;
}elseif($uva==2 && $tam==2){
    $precio=($precKg-0.50)*$kg;
}
    echo"Las uvas de tipo $uva de tamaño $tam te han costado la cantidad $kg kg un precio en total de $precio E";

?>
