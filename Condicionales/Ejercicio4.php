<?php
$num1 = readline("Ingrese un número");
$num2 = readline("Ingrese un número");
if($num1>$num2){
    echo "El $num1 es mayor que el $num2";
}elseif($num1<$num2){
    echo "El $num2 es mayor que el $num1";
}else{
    echo "Los números son iguales";
}
?>