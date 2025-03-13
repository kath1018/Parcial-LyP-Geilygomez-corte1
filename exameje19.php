<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
    $resultado = 0;

    // Realizar la operaci�n 
    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            // Comprobar si el segundo n�mero no es 0 antes de hacer la divisi�n
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Error: No se puede dividir.";
            }
            break;
        default:
            $resultado = "Operaci�n no v�lida.";
            break;
    }

    // Mostrar el resultado
    echo "El resultado de la operaci�n es: $resultado";
} else {
    // Mostrar el formulario si no ha sido enviado
    echo '<form method="POST">
            Ingresa el primer n�mero: <input type="number" name="numero1" required><br><br>
            Ingresa el segundo n�mero: <input type="number" name="numero2" required><br><br>
            Selecciona la operaci�n:
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicaci�n</option>
                <option value="division">Divisi�n</option>
            </select><br><br>
            <input type="submit" value="Calcular">
          </form>';
}
?>
