<?php

$numero = "Malamadre9@";


if (strlen($numero) < 8) {
   echo "<p>a tu casa mufasa</p>";
} else {
   echo "<p>bienvenido</p>";
}

if (ctype_lower($numero) === true) {
   echo "<p>a tu casa mufasa</p>";
} else {
   echo "<p>bienvenido</p>";
}

if (ctype_upper($numero) === true) {
   echo "<p>a tu casa mufasa</p>";
} else {
   echo "<p>bienvenido</p>";
}

if (ctype_alpha($numero) === true) {
   echo "<p>a tu casa mufasa</p>";
} else {
   echo "<p>bienvenido</p>";
}

if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $numero)) {
   echo "<p>a tu casa mufasa</p>";
} else {
   echo "<p>bienvenido</p>";
}


$numeroAdivinar = 90;

$numeroMaquina = mt_rand(0, 100);

echo $numeroMaquina;

do {
   # code...
} while ($numeroAdivinar !== $numeroMaquina);
