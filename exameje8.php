<?php 
// Verificar si el formulario ha sido enviado
if ($_POST) {
    // Obtener la base y altura del formulario
$base = $_POST['base'];
    $altura = $_POST['altura'];
     // Calcular el área del triángulo
    $area = ($base * $altura) / 2;
     // Mostrar el resultado
    echo "El área del triángulo con base $base y altura $altura : tiene un area de  $area";
    } else {
    // Mostrar el formulario para ingresar base y altura
    echo '<form method="POST">
            Ingresa la base del triángulo: <input type="number" name="base" required><br>
            Ingresa la altura del triángulo: <input type="number" name="altura" required><br>
            <input type="submit" value="Calcular Área de un triangulo">
          </form>';
}