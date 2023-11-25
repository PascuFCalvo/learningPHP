<?php
function tiraDados($cantidad, $carasDados)
{

   $resultado = 0;
   $tiradas = [];
   $total = 0;

   for ($i = 0; $i < $cantidad; $i++) {
      $resultado += mt_rand(1, $carasDados);
      $tiradas[] = $resultado;
      $resultado = 0;
   }





   print_r($resultado);
}


tiraDados(2, 6);

?>





