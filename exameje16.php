<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las calificaciones desde el formulario
    $calificacion1 = $_POST['calificacion1'];
    $calificacion2 = $_POST['calificacion2'];
    $calificacion3 = $_POST['calificacion3'];
    $calificacion4 = $_POST['calificacion4'];
    $calificacion5 = $_POST['calificacion5'];

    // Calcular el promedio
    $promedio = ($calificacion1 + $calificacion2 + $calificacion3 + $calificacion4 + $calificacion5) / 5;

    // Mostrar el promedio
    echo "El promedio de las  5 calificaciones es: $promedio";
} else {
    // Mostrar el formulario
    echo '<form method="POST">
            Ingresa la calificación 1: <input type="number" name="calificacion1" required><br><br>
            Ingresa la calificación 2: <input type="number" name="calificacion2" required><br><br>
            Ingresa la calificación 3: <input type="number" name="calificacion3" required><br><br>
            Ingresa la calificación 4: <input type="number" name="calificacion4" required><br><br>
            Ingresa la calificación 5: <input type="number" name="calificacion5" required><br><br>
            <input type="submit" value="Calcular el promedio de 5 calificaciones">
          </form>';
}