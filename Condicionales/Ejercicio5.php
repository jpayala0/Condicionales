<?php
$num1 = readline("Ingrese un número");
$num2 = readline("Ingrese un número");
$num3 = readline("Ingrese un número");
$num4 = readline("Ingrese un número");
$num5 = readline("Ingrese un número");
$prom = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
echo "El promedio de los números es: $prom";
if($prom>=3){
    echo "Aprobó";
}else{
    echo "No aprobó";
}
?>