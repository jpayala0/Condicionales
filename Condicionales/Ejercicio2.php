<?php
$nom = readline("Ingrese su nombre");
$edad = readline("Ingrese su edad");
if($edad<18; $edad>0){
    echo "Usted es menor de edad";
}elseif($edad>=18){
    echo "Usted es mayor de edad";
}
echo "Su nombre es $nom";
?>