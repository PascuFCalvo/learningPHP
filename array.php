<?php

$array = [
   "nombre" => "Noelia",
   0 => "propiedad cero",
   42 => 24,
   4224,
   "multi" => [
      "dimensional" => [
         "array" => [
            "foo"
         ]
      ]
   ]
];

$array2 = ["gaston", "toni"];

// var_dump($array["nombre"]);
// var_dump([$array2[1]]);
// var_dump($array["multi"]["dimensional"]);
// var_dump($array["multi"]["dimensional"]["array"]);
// var_dump($array[42]);
// var_dump($array[1]);
// var_dump($array);


//añadir una nueva propiedad
array_push($array, "mail@mail.com");


//añadir una nueva propiedad con una clave
$array["email2"] = "email2@email2.com"; 

// var_dump($array);


//machacar un valor que ya exisye
$array["nombre"] = "Borja";

var_dump($array);


