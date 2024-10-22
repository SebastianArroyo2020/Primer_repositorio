<?php
/* CBTIS 89
   Programa que alamacena el nombre de 3 articulos con su precio, los cuenta y los imprime
   Sebastian Arroyo Castro
   3°A Programacion Matutino 
*/

$array=array("Sandia"=>35,"Galletas"=>20,"Paleta de hielo"=>21);
foreach ($array as $producto=>$precio)
   {{echo "El producto: ".$producto." cuesta ".$precio." pesos", "<br>";
}}
sort($array);
var_export($array);
echo "<br>";
for($i=0;$i<($longitud=count($array));$i++)
   {echo $array[$i],"<br>";}

