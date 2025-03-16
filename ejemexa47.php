<?php
// Función principal para mostrar el reloj digital
while (true) 
    // Limpiar la consola (compatible con diferentes sistemas operativos)
    if (strncasecmp(PHP_OS, 'WIN', 3) === 0) {
        system('cls'); // Limpiar consola en Windows
    } else {
        system('clear'); // Limpiar consola en Linux/Mac
    }

    // Obtener la hora actual en formato "HH:MM:SS"
    $horaActual = date("H:i:s");

    // Mostrar la hora en la consola
    echo "     Reloj Digital       \n";
    echo "=========================\n";
    echo "         {$horaActual}      ;
 
    // Pausar la ejecución durante 1 segundo antes de actualizar
    sleep(1);
}