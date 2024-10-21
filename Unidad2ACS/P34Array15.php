<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

$arrraydatos = ["Karina" , "Rosales" , "Orozco"];
o
$string = implode(" ", $arrraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>" , "<br";

$cadena = "tercero de progarmación matutino";

$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

for($i=0; $i<$longitud; $i++)
{
 echo $array[$i];
 echo "<br>";
}
?>