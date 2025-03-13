<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la palabra ingresada 
    $palabra = $_POST['palabra'];

    // variable que contará las vocales
    $contadorVocales = 0;

    // Convertir la palabra a minúsculas
    $palabra = strtolower($palabra);

    // Recorrer cada letra de la palabra
    for ($i = 0; $i < strlen($palabra); $i++) {
        // Comprobar si la letra es una vocal
        if (in_array($palabra[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $contadorVocales++;
      }
  }

    // Mostrar el número de vocales
    echo "La palabra '$palabra' tiene $contadorVocales vocales.";
} else {
    // Mostrar el formulario si no ha sido enviado
    echo '<form method="POST">
            Ingresa una palabra: <input type="text" name="palabra" required><br><br>
            <input type="submit" value="Contar Vocales">
          </form>';
}
