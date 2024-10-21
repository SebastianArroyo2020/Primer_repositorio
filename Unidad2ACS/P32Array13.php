<?php
/*CBTIS 89
Programa que guarda datos en un array_push
Sebastian Arroyo Castro
3°A Programacion Matutino*/
echo "Array original";
echo "<br>";

$array=array("camisa "," Pantalon "," cinturon ");

foreach ($array as $prenda)
	{echo $prenda. "<br>";}

$arraynumerico= array("camisa "," Pantalon "," cinturon ");

sort($arraynumerico);
var_export($arraynumerico);
echo "<p>";

echo "Array despues de agregar productos";
echo "<br>";

array_push($array, "Gorra ", " Calcetines");

foreach($array as $prenda)
	{echo $prenda. "<br>";}

$arraynumerico1=array("gorra "," Calcetines");

rsort($arraynumerico1);
var_export($arraynumerico1);
?>