<?php
// Definir las longitudes de los catetos
$cateto_a = 5; // Cambia este valor para probar con otro cateto
$cateto_b = 9; // Cambia este valor para probar con otro cateto

// Calcular la hipotenusa usando el teorema de Pitágoras
$hipotenusa = sqrt(pow($cateto_a, 2) + pow($cateto_b, 2));

// Mostrar el resultado
echo "La hipotenusa del triangulo es: " . $hipotenusa;
?>