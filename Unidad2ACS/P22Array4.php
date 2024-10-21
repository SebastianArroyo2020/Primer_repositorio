<?php
/*CBTIS 89
Programa que almacena jugadores y sus posisiones y luego los imprime 
Sebastian Arroyo Castro
3°A programacion Matutino
*/

$equipo= array("Portero"=>"julio","defensa"=>"diego","medio"=>"Jair","Delantero"=>"Rafa");

echo "** SELECCION NACIONAL **", "<br>", "<br>";

foreach ($equipo as $posicion=>$jugador)
	{echo "el jugador ".$jugador." es el ". $posicion;
echo "<br>","<br>";
}
?>