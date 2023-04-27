<?php
echo "1. Rectángulo";
echo "2. Cuadrado";
echo "3. Paralelogramo";
echo "4. Rombo";
echo "5. Trapecio";
echo "6. Triángulo";
echo "7. Triángulo rectángulo";
$menu;
switch($menu){
    case 1:
        $base = readline("Igrese la base del rectángulo");
        $alt = readline("Ingrese la altura del rectángulo");
        $area = $base * $alt;
        echo "El área del rectángulo es: $area";
        break;
    case 2:
        $lado = readline("Ingrese el lado del cuadrado");
        $area = pow($lado, 2);
        echo "El áreal del cuadrado es: $area";
        break;
    case 3:
        $base = readline("Igrese la base del paralelogramo");
        $alt = readline("Ingrese la altura del paralelogramo");
        $area = $base * $alt;
        echo "El área del paralelogramo es: $area";
        break;
    case 4:
        $diagMayor = readline("Ingrese la diagonal mayor del rombo");
        $diagMenor = readline("Ingrese la diagonal menor del rombo");
        $area = ($diagMayor * $diagMenor)/2;
        echo "El área del rombo es: $area";
        break;
    case 5:
        $alt = readline("Ingrese la  altura del trapecio");
        $ladoAbajo = readline("Ingrese el lado de abajo del trapecio");
        $ladoArriba = readline("Ingrese el lado de arriba del trapecio");
        $area = $alt * ($ladoAbajo + $ladoArriba) / 2;
        echo "El área del trapecio es: $area";
        break;
    case 6:
        $base = readline("Ingrese la base del triángulo");
        $alt = readline("Ingrese la altura del triángulo");
        $area = (1/2) * $base * $alt;
        echo "El área del triángulo es: $area";
        break;
    case 7:
        $base = readline("Ingrese la base del triángulo rectángulo");
        $alt = readline("Ingrese  la  altura del triángulo rectángulo");
        $area = ($base * $alt) / 2;
        echo "El área del triángulo rectángulo es: $area";
        break;
    default:
        echo "El número ingresado no existe";
}
?>