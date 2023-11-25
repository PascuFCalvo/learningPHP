
<?php

$text = "la comida que mas me gusta es el sushi";


//voy a resolverlos sin utilizar metodos propios, solo recorriendo los arrays y haciendo la logica


//2

// function dondeEstaSushi($text)
// {
//    $contador = 0;
//    $array = explode(" ", $text);
//    for ($i = 0; $i < count($array); $i++) {
//       if ($array[$i] !== "gusta") {
//          $contador++;
//       } else if ($array[$i] === "gusta") {
//          $contador++;
//          break;
//       }
//    }
//    print_r($contador);
// }

// dondeEstaSushi($text);

//3

// function dondeEstaSushi($text)
// {
//    $array = explode(" ", $text);
//    for ($i = 0; $i < count($array); $i++) {
//       if ($array[$i] === "mas") {
//          $array[$i] = "menos";
//       }
//    }
//    print_r($array);
// }

// dondeEstaSushi($text);

//4

// function dondeEstaSushi($text)
// {
//    $contador = 0;
//    $array = explode(" ", $text);
//    for ($i = 0; $i < count($array); $i++) {
//       if ($array[$i] === "pasta") {
//          $contador++;
//       }
//    }
//    if ($contador === 0) {
//       print_r("la palabra pasta NO existe en esta frase");
//    } else {
//       print_r("la palabra pasta SI existe en esta frase");
//    }
// }

// dondeEstaSushi($text);

//5

// function dondeEstaSushi($text)
// {
//    $array = explode(" ", $text);
//    $reversed = array_reverse($array);
//    print_r($reversed);
// }

// dondeEstaSushi($text);

//5

// function dondeEstaSushi($text)
// {
//    $contador = 0;
//    for ($i = 0; $i < strlen($text); $i++) {
//       if ($text[$i] === "e") {
//          $contador++;
//       }
//    }
//    print_r($contador);
// }

// dondeEstaSushi($text);
