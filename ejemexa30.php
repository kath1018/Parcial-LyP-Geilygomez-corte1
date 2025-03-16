<?php
session_start(); // Iniciar la sesión para almacenar el saldo del usuario

// Inicializar el saldo si no existe
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 40000;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    $monto = isset($_POST['monto']) ? $_POST['monto'] : 0;

    if ($accion === 'depositar' && ($monto) && $monto > 0) {
        $_SESSION['saldo'] += $monto;
        echo "Has depositado {$monto}. Tu nuevo saldo es {$_SESSION['saldo']}.";
    } elseif ($accion === 'retirar' && ($monto) && $monto > 0) {
        if ($_SESSION['saldo'] >= $monto) {
            $_SESSION['saldo'] -= $monto;
            echo "Has retirado {$monto}. Tu nuevo saldo es {$_SESSION['saldo']}.";
        } else {
            echo "Fondos insuficientes para retirar {$monto}. Tu saldo actual es {$_SESSION['saldo']}.";
        }
    } elseif ($accion === 'consultar') {
        echo "Tu saldo actual es {$_SESSION['saldo']}.";
    } else {
        echo "Acción no válida o monto incorrecto.";
    }
}

echo '<form method="POST">
        <label>Selecciona una acción:</label>
        <select name="accion">
            <option value="depositar">Depositar</option>
            <option value="retirar">Retirar</option>
            <option value="consultar">Consultar saldo</option>
        </select><br><br>
        <label>Ingresa el monto (solo para depositar o retirar):</label>
        <input type="number" name="monto" step="any"><br><br>
        <button type="submit">Ejecutar</button>
      </form>';
?>
