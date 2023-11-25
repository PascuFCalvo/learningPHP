<?php
// $letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];

// $random = array_rand($letras);

// print_r($letras[$random]);




// $planetas = ["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno"];


// function pintaPlanetas($planetas)
// {
//    foreach ($planetas as $indice => $planeta) {
//       print_r($planeta . "-");
//    }
// }
// pintaPlanetas($planetas);

//////////////////////////////////////////////////////////////////////////

// $array1 = [1, 2, 3, 4, 5];
// $array2 = ["a", "b", "c", "d", "e"];
// $total = [];

// function barajar($array1, $array2)
// {
//    $contador = 0;

//    do {
//       $total[] = $array1[$contador];
//       unset($array1[$contador]);
//       $total[] = $array2[$contador];
//       unset($array2[$contador]);
//       $contador++;
//    } while ($contador < count($array1));

//    print_r(implode($total));
// }

// barajar($array1, $array2);

//////////////////////////////////////////////////////////////////////////

// $array = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];

// $pares = [];
// $impares = [];

// foreach ($array as $numero) {
//    if($numero%2 === 0){
//       $pares[]=$numero;
//    }else{
//       $impares[]=$numero;
//    }
// }
// print_r($pares);
// print_r($impares);

// $over5 = [];

// foreach ($array as $numero) {
//    if($numero > 5){
//       $over5[]=$numero;
//    }
// } 
// print_r($over5);

//////////////////////////////////////////////////////////////////////////////

$php = ["php", "laravel", "Funciones", "Arrays"];
$php2 = ["objeto", "Arrays", "strings"];
$contador = 0;
$repetidos = [];

$long1 = count($php);
$long2 = count($php2);

$menor = 0;

if ($long1 >= $long2) {
   $menor = $long2;
} else {
   $menor = $long1;
}

do {
   if ($php[$contador] === $php2[$contador]) {
      $repetidos[] = $php[$contador];
   }
   $contador++;
} while ($contador <= $menor);

print_r($repetidos);

////////////////////////////////////////////////////////////////////////////////

// $persona = [
//    "nombre" => "Juan",
//    "apellido" => "Garcia",
//    "edad" => 35,
//    "direccion" => "Calle falsa 123",
//    "ciudad" => "Valencia",
//    "pais" => "España",
// ];

// print_r($persona["nombre"] . " " . $persona["apellido"] . " " . $persona["edad"]);

///////////////////////////////////////////////////////////////////////////////

// $personas = [
//    [
//        "nombre" => "Juan",
//        "apellido" => "García",
//        "edad" => 35,
//        "direccion" => "Calle falsa 123",
//        "ciudad" => "Valencia",
//        "pais" => "España",
//    ],
//    [
//        "nombre" => "María",
//        "apellido" => "López",
//        "edad" => 28,
//        "direccion" => "Avenida principal 456",
//        "ciudad" => "Madrid",
//        "pais" => "España",
//    ],
//    [
//        "nombre" => "Carlos",
//        "apellido" => "Martínez",
//        "edad" => 42,
//        "direccion" => "Plaza central 789",
//        "ciudad" => "Barcelona",
//        "pais" => "España",
//    ],
// ];

// foreach ($personas as $persona) {
//    print_r($persona);
//    # code...
// }

////////////////////////////////////////////////////////////////////////

