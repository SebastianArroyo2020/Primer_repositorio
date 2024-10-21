<?php
/* CBTIS 89
   Programa que guarda en un arreglo, elimina y agrega nuevos nombres
   Sebastian Arroyo Castro
   3°A Programacion Matutino 
*/

echo "Array original";
echo "<br>";

$array= array ("Ana","Miriam","Wendy","Adilene", "Juan","Dylan");
echo "<br>";

$longitud=count($array);
for($i=0; $i<$longitud; $i++)
echo $array [$i];
echo "<br>";

echo "Array después de agregar nombres";
echo "<br>";

array_push($array,"Karla", "Sebastian","Emma","Emiliano");


unset($array[5],$array[2]);
$longitud=count($array);

rsort($array);

for($i=0; $i<$longitud; $i++)
{echo $array[$i];
 echo "<br>";}

echo "<br>";
echo "El número de elementos actual en el arreglo es de: 8";
?>