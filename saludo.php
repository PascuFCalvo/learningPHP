<?php

//declaracion de variables

$Saludo = "Hola mundo";

$Saludo2 = "Hola mundo" . " Concatenado";

//machacar el tipo de dato

$Saludo = 9;

echo "<h1>Hola mundo de PHP, esto es un h1</h1>";
echo "<h2>Hola mundo de PHP 2, esto es un h2</h2>";

echo "<p>$Saludo</p>";

echo "<p>$Saludo2</p>";

echo "<p>$Saludo . $Saludo2</p>";

?>

<h1>Esta linea es un html fuera de php</h1>

<?php

echo "<h1>Adios</h1>";

$foo = "bob";
$bar = &$foo; //le da el mismo valor a bar que foo tiene en memoria, con lo cual se modificarian los dos a la vez
$bar = "<p>Mi nombre es $bar</p>";
echo "<p>$bar</p>";
echo "<p>$foo</p>";


$jugo = "manzana";

echo "<p>El tomo algo de jugo $jugo</p>";
echo "<p>El tomo algo de jugo hecho de $jugo.</p>";
echo "<p>El tomo algo de jugo de ${jugo}s.</p>";


?>

<h1>tipos de variables</h1>


<?php

$boolean = True;

echo "<p>enteros</p>";


$a = 1234; //numero decimal
$b = -1234; // numero negativo
$c = 01234; // base octal
$d = 0x14; // hexadecimal
$e = 0b11111111; // numero binario 

echo "<p>floats</p>";

echo " <p> Iguales que los enteros </p>";

echo "<p>Echo solo acepta textos</p>";


echo "<h1>Constantes</h1>";

define("NOMBRE", "Juan");
define("CURSOS", ["PHP", "JS", "JAVA"]);


echo NOMBRE;
echo "<br>";
echo CURSOS[1];


echo "<h1>Constantes predefinidas</h1>";

echo "Version de php:" . PHP_VERSION;
echo "<p></p>";
echo "Version de so:" . PHP_OS;






?>