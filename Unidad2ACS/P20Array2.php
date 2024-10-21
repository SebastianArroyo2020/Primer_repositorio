<?php
/*CBTIS 89
Programa que almacena datos y los imprime
Sebastian Arroyo Castro
3°A programacion matutino
*/

$Nombre = "Anna";
$array = array(1, 2, 3, "casa", $Nombre);
//se obtiene el numero de elementos
$longitud=count($array);

//recorte todos los elementos
for($i=0; $i<5; $i++)
	{//se obtiene el valor de cada elemento
		echo $array [$i];
		echo "<br>";
	}
?>