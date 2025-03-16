<?php
function obtenerPrecioMaximo($precios) {
    if (($precios)) {
        return max($precios); 
        // Utiliza la función max para obtener el valor más alto
    } else {
        return "La lista de precios está vacía.";
    }
}

// Ejemplo de uso
$listaPrecios = [10, 300, 50, 550, 260];
$precioMaximo = obtenerPrecioMaximo($listaPrecios);

echo "El precio más alto es: {$precioMaximo}";
?>
