<?php
$num = readline("Ingrese un número");
$numero = $num;
if($numero = 0){
    echo "El número es 0";
}elseif($numero < 0){
    echo "El número es negativo";
}elseif($numero > 0){
    echo "El número es positivo";
}
?>