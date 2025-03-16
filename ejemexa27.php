<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $palabra = $_POST['palabra'];
    if (!empty($palabra)) {
        $sinEspacios = str_replace(' ', '', strtolower($palabra)); // Eliminar espacios y convertir a minúsculas
        $esPalindromo = $sinEspacios === strrev($sinEspacios); // Comparar con su reverso

        if ($esPalindromo) {
            echo "'{$palabra}' es un palíndromo.";
        } else {
            echo "'{$palabra}' no es un palíndromo.";
        }
    } else {
        echo "Por favor, ingresa una palabra o frase válida.";
    }
} else {
    echo '<form method="POST">
            Ingresa una palabra o frase: <input type="text" name="palabra">
            <button type="submit">Verificar</button>
          </form>';
}
?>
