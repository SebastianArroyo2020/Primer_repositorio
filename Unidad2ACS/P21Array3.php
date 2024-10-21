<?php
/* CBTIS 89
Programa que almacena los nombres de 6 personas en un areglo y los imprime
Sebastian Arroyo Castro
3°A Programacion Matutino
*/    

$nombre1 = "Maria";
$nombre2 = "Sofia";
$nombre3 = "Mariana";
$nombre4 = "Dianna";
$nombre5 = "Valentina";
$nombre6 = "Andres";
$array = array($nombre1. " ".$nombre2. " ".$nombre3." ".$nombre4." ".$nombre5." ".$nombre6);

$longitud=count($array);


for($i=0; $i<$longitud; $i++)
	{echo $array [$i];
		echo "<br>";
	}
?>