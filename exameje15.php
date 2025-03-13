<?php
// Pedir tres números al usuario
echo "Ingresa el primer número: ";
$num1 = trim(fgets(STDIN));

echo "Ingresa el segundo número: ";
$num2 = trim(fgets(STDIN));

echo "Ingresa el tercer número: ";
$num3 = trim(fgets(STDIN));

// Determinar el número mayor
$mayor = max($num1, $num2, $num3);

// Mostrar el mayor
echo "El número mayor es: $mayor\n";
?>

