<?php
function calcularDistancia($x1, $y1, $x2, $y2) {
    // Fórmula para calcular la distancia
    $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    return $distancia;
}

// Ejemplo de uso
$x1 = 6;
$y1 = 7;
$x2 = -7;
$y2 = -1;

$resultado = calcularDistancia($x1, $y1, $x2, $y2);
echo "La distancia entre los puntos ({$x1}, {$y1}) y ({$x2}, {$y2}) es: {$resultado}";
?>
