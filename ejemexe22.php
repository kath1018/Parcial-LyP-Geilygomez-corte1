<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kilometeros = $_POST['numero'];
    if ($numero =($kilometeros)) {
        $millas = $kilometeros * 0.621371; // Conversion a millas 
        echo "{$kilometeros} kilometeros equivale a {$millas} millas.";
    }
} else {
    echo '<form method="POST">
            Numero en kilometros: <input type="number" step="any" name="numero">
            <button type="submit">Pasar a millas</button>
          </form>';
        }