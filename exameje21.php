<?php
// Genera un número aleatorio entre 1 y 10
$numero_aleatorio = rand(1, 10);

// Formulario HTML para entrada del usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $intento = intval($_POST['intento']);
    if ($intento === $numero_aleatorio) {
        echo "¡Felicidades! Adivinaste el número.";
    } else {
        echo "Lo siento, el número era $numero_aleatorio.";
    }
} else {
    echo '<form method="POST">
            Adivina el número (entre 1 y 10): <input type="number" name="intento">
            <button type="submit">Enviar</button>
          </form>';
}
?>
