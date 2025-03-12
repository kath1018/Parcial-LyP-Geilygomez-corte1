
<?php
// Verificar si el formulario ha sido enviado
if ($_POST) {
    // Obtener los dos números del formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Calcular la suma
    $suma = $numero1 + $numero2;

    // Mostrar el resultado
    echo "La suma de $numero1 y $numero2 es: $suma";
} else {
    // Mostrar el formulario para ingresar los números
    echo '<form method="POST">
            Ingresa el primer número: <input type="number" name="numero1" required><br>
            Ingresa el segundo número: <input type="number" name="numero2" required><br>
            <input type="submit" valor="Calcular Suma">
          </form>';
}
?>
