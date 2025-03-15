<?php
// Generar un número aleatorio entre 1 y 10
$numeroAleatorio = rand(1, 10);

// Indicar al usuario que adivine el número
echo "He generado un número entre 1 y 10. ¡Adivínalo!\n";

// Leer la entrada del usuario
$intentos = 0;
do {
    $respuestaUsuario = (int) readline("Tu adivinanza: ");
    $intentos++;

    if ($respuestaUsuario < $numeroAleatorio) {
        echo "Es más alto. Intenta de nuevo.\n";
    } elseif ($respuestaUsuario > $numeroAleatorio) {
        echo "Es más bajo. Intenta de nuevo.\n";
    } else {
        echo "¡Felicidades! Adivinaste el número en $intentos intentos.\n";
    }
} while ($respuestaUsuario !== $numeroAleatorio);
?>
