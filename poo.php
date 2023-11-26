<?php

// $recetas = [
//    [
//       'nombre' => 'Tarta de manzana',
//       'ingredientes' => [
//          'manzana',
//          'azúcar',
//          'harina',
//          'mantequilla',
//          'huevo'
//       ],
//       'dificultad' => 'media',
//       'tiempo' => 60
//    ],
//    [
//       'nombre' => 'Tarta de chocolate',
//       'ingredientes' => [
//          'chocolate',
//          'azúcar',
//          'harina',
//          'mantequilla',
//          'huevo'
//       ],
//       'dificultad' => 'media',
//       'tiempo' => 60
//    ],
//    [
//       'nombre' => 'Tarta de queso',
//       'ingredientes' => [
//          'queso',
//          'azúcar',
//          'harina',
//          'mantequilla',
//          'huevo'
//       ],
//       'dificultad' => 'media',
//       'tiempo' => 60
//    ],

// ];

// foreach ($recetas as $receta) {
//    print_r($receta);
// }


// foreach ($recetas as $receta) {
//    print_r(PHP_EOL . $receta["nombre"]);
//    print_r(PHP_EOL . $receta["tiempo"] . " minutos " . PHP_EOL);
//    foreach ($receta["ingredientes"] as $ingrediente) {
//       print_r("->" . $ingrediente  . PHP_EOL);
//    }
// }


///////////////////////////////////////////////////////////////////////////////

// clases

class Receta
{
   public $nombre;
   public $tiempo;
   public $ingredientes = [];


   function __construct($nombre, $tiempo, $ingredientes)
   {
      $this->nombre = $nombre;
      $this->tiempo = $tiempo;
      $this->ingredientes = $ingredientes;
   }

   function imprimeRecetas()
   {
      print_r($this->nombre . PHP_EOL);
      print_r($this->tiempo . PHP_EOL);
      foreach ($this->ingredientes as $ingrediente) {
         print_r(" -> " . $ingrediente . PHP_EOL);
      }
   }
}

$recetas[] = new Receta("Tarta de manzana", 60, ["manzana", "azúcar", "harina", "mantequilla", "huevo"]);
$recetas[] = new Receta("Tarta de chocolate", 60, ["chocolate", "azúcar", "harina", "mantequilla", "huevo"]);
$recetas[] = new Receta("Tarta de queso", 60, ["queso", "azúcar", "harina", "mantequilla", "huevo"]);

foreach ($recetas as $receta) {
   $receta->imprimeRecetas();
}
