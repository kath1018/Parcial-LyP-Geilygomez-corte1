<?php 
// Verificar si el formulario ha sido enviado
if ($_POST) {
    // Obtener la base y altura del formulario
$base = $_POST['base'];
    $altura = $_POST['altura'];
     // Calcular el �rea del tri�ngulo
    $area = ($base * $altura) / 2;
     // Mostrar el resultado
    echo "El �rea del tri�ngulo con base $base y altura $altura : tiene un area de  $area";
    } else {
    // Mostrar el formulario para ingresar base y altura
    echo '<form method="POST">
            Ingresa la base del tri�ngulo: <input type="number" name="base" required><br>
            Ingresa la altura del tri�ngulo: <input type="number" name="altura" required><br>
            <input type="submit" value="Calcular �rea de un triangulo">
          </form>';
}