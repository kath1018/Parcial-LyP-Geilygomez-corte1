<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email']; 
    // Captura el email ingresado por el usuario

    if (($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Verificar si el email es válido
            echo "La dirección de correo electrónico $email es válida.";
        } else {
            echo "La dirección de correo electrónico $email no es válida.";
        }
    } else {
        echo "Por favor, ingresa una dirección de correo electrónico.";
    }
} else {
    echo '<form method="POST">
            Ingresa tu correo electrónico: <input type="text" name="email">
            <button type="submit">Validar</button>
          </form>';
}
?>
