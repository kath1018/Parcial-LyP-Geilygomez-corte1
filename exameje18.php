<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la temperatura en Celsius
    $celsius = $_POST['celsius'];

    // Convertir de Celsius a Fahrenheit
    $fahrenheit = ($celsius * 9/5) + 32;

    // Mostrar el resultado
    echo "$celsius °C es igual a $fahrenheit °F";
} else {
    // Mostrar el formulario si no ha sido enviado
    echo '<form method="POST">
            Ingresa la temperatura en grados Celsius: <input type="number" name="celsius" required><br><br>
            <input type="submit" value="Convertir de Celsius a Fahrenheit">
          </form>';
          }