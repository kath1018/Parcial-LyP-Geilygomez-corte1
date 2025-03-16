<?php
// Nombre del archivo que almacena el valor del contador
$archivo = "contador.txt";

// Verificar si el archivo existe
if (!file_exists($archivo)) {
    // Crear el archivo e inicializar el contador en 0
    file_put_contents($archivo, 0);
}

// Leer el valor actual del contador desde el archivo
$contador = (int)file_get_contents($archivo);

// Incrementar el valor del contador
$contador++;

// Guardar el nuevo valor del contador en el archivo
file_put_contents($archivo, $contador);

// Mostrar el valor actual del contador
echo "Este programa ha sido ejecutado {$contador} veces.";
?>
