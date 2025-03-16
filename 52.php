<?php
//Las estructuras condicionales, como if, else, y elseif, permiten ejecutar código basado en condiciones específicas.

$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} elseif ($edad > 12) {
    echo "Eres un adolescente.";
} else {
    echo "Eres menor de edad.";
}