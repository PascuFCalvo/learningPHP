<?php

$mensaje =
   "&###@&*&###@@##@##&######@@#####@#@#@#@##@@@@@@@@@@@@@@@*&&@@@@@@@@@####@@@@@@@@@#########&#&##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@&";

$mensaje2 = str_split($mensaje);

echo $mensaje;

$contador = 0;
$arraycontadores = [];
foreach ($mensaje2 as $element) {
   if ($element === "#") {
      $contador++;
   } elseif ($element === "@") {
      $contador--;
   } elseif ($element === "*") {
      $contador = $contador * $contador;
   } else {
      $arraycontadores[] = $contador;
   }
}

print_r($arraycontadores);
