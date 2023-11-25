<?php

$contadorRondas = 0;
$numeroCifras1 = 1;
$numeroCifras2 = 1;
$esBonoImpar = true;
$perdedor = false;

do {
   $cifra1 = random_int(0, pow(10, $numeroCifras1) - 1);
   $cifra2 = random_int(0, pow(10, $numeroCifras2) - 1);
   $operadores = ['+', '-', "*", "/"];
   $operacion = $operadores[array_rand($operadores)];

   switch ($operacion) {
      case '+':
         $resultado = $cifra1 + $cifra2;
         break;
      case '-':
         $resultado = $cifra1 - $cifra2;
         break;
      case '*':
         $resultado = $cifra1 * $cifra2;
         break;
      case '/':
         $resultado = $cifra1 / $cifra2;
         break;
   }

   echo "Pregunta: {$cifra1} {$operacion} {$cifra2}" . PHP_EOL;
   echo "Resuelve: ";

   fscanf(STDIN, "%d", $jugador);

   if ($jugador === $resultado) {
      echo "¡Correcto!" . PHP_EOL;

      $contadorRondas++;
      if ($contadorRondas % 5 === 0) {
         if ($esBonoImpar) {
            $numeroCifras1++;
            $esBonoImpar = false;
         } else {
            $numeroCifras2++;
            $esBonoImpar = true;
         }
      }
   } else {
      echo "Respuesta incorrecta. Has perdido." . PHP_EOL;
      $perdedor = true;
   }

   $tiempoActual = time();
   $tiempoTranscurrido = $tiempoActual - $tiempoInicio;
} while ($perdedor === false);
