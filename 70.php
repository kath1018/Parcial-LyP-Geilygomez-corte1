<?php
//haciendo veriable para definir las vocales 
$palabra = "Como estas en este mundo";
$vocales = preg_match_all("/[aeiouAEIOU]/", $palabra);
echo "La palabra '{$palabra}' tiene {$vocales} vocales.";
