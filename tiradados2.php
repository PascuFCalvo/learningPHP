<?php
function diceThrow($dados = 1, $caras = 6)
{
   $result = [];
   if ($dados < 1 && $caras < 100) {
      return "Indica un numero de dados minimo 1 y maximo 99 caras";
   }

   for ($i = 1; $i <= $dados; $i++) {
      $tirada = rand(1, $caras);
      $result['total_tirada'] += $tirada;
      $result["tirada_" . $i] = $tirada;
   }

   return $result;
}

print_r(diceThrow(3,8));
