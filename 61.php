<?php
$palabra = "reconocer";
if (strtolower($palabra) === strrev(strtolower($palabra))) {
    echo "La palabra $palabra es un palíndromo.";
} else {
    echo "La palabra $palabra no es un palíndromo.";
}
