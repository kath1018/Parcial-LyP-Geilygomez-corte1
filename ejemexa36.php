<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Variables para almacenar los datos ingresados 
    $frase = $_POST['frase']; // Frase ingresada 
    $letra = $_POST['letra']; // Letra ingresada 

    // entrada
    $longitudLetra = strlen($letra); // Longitud de la letra ingresada
    if (($frase) && ($letra) && $longitudLetra === 1) {
        // Convertir todo a minúsculas para hacer la búsqueda insensible a mayúsculas
        $fraseMinuscula = strtolower($frase); 
        $letraMinuscula = strtolower($letra);

        // Contar las apariciones de la letra en la frase
        $contador = substr_count($fraseMinuscula, $letraMinuscula);

        // Mostrar el resultado
        echo "La letra $letra aparece $contador veces en la frase: $frase.";
    } else {
        echo "Por favor, ingresa una frase válida y una sola letra.";
    }
} else {
    // Formulario 
    echo '<form method="POST">
            Ingresa una frase: <input type="text" name="frase"><br><br>
            Ingresa una letra: <input type="text" name="letra" maxlength="1"><br><br>
            <button type="submit">Contar letra</button>
          </form>';
}
?>
