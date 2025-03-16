<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edad = $_POST['edad'];
    //año actual 2025
    
    if (($edad) && $edad >= 0) {
        $añoActual = date("Y"); // Obtiene el año actual
        $añoNacimiento = $añoActual - $edad;
        echo "Tienes {$edad} años, por lo que naciste en el año {$añoNacimiento}.";

    }
} else {
    echo '<form method="POST">
            Ingresa tu edad: <input type="number" name="edad">
            <button type="submit">Calcular año de nacimiento</button>
          </form>';
}
?>

