<?php

$per=rand(0,1000);

if ( $per>200 && $per<=300){
    echo"El  precio por $per es de: 85.00€";
}elseif($per>300){
    echo"El  precio por $per es de: 75.00€";
}else{
    echo"El  precio por $per es de: 95.00€";
}

?>
