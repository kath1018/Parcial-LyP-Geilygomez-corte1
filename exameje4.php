<?php
//verificar si la encuesta ha sido enviada
if ($_POST) {
	//obtener edad del formulario
	$edad = $_POST["edad"];
    //comprobar si es mayor de edad
if ($edad >=18){
    echo"Eres mayor de edad";
     } else {
         echo"Eres menor de edad";
         }
        } else {
    // Mostrar el formulario para ingresar los números
    echo '<form method="POST">
            Ingresa tu edad: <input type="number" name="edad" required><br>
            <input type="submit" valor="Verificar mayoria de edad">
          </form>';
          }