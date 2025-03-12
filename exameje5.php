<?php
//verificar si la encuesta ha sido enviada
if ($_POST) {
	//obtener edad y nombre del formulario
	$nombre = $_POST["nombre"];
	$edad = $_POST["edad"];

	//mostrar mensaje 
	echo"Bienvenid@ $nombre tienes $edad años de edad.";

	 } else {
    // Mostrar el formulario para ingresar nombre y edad
    echo '<form method="POST">
            Ingresa tu nombre: <input type="text" name="nombre" required><br>
            Ingresa tu edad: <input type="number" name="edad" required><br>
            <input type="submit" valor="enviar">
          </form>';
          }