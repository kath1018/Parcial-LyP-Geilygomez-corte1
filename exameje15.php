<?php
// Pedir tres n�meros al usuario
echo "Ingresa el primer n�mero: ";
$num1 = trim(fgets(STDIN));

echo "Ingresa el segundo n�mero: ";
$num2 = trim(fgets(STDIN));

echo "Ingresa el tercer n�mero: ";
$num3 = trim(fgets(STDIN));

// Determinar el n�mero mayor
$mayor = max($num1, $num2, $num3);

// Mostrar el mayor
echo "El n�mero mayor es: $mayor\n";
?>

