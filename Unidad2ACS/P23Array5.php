<?php
/*CBTIS 89
Programa que almacena nombre y precios de frutas y los imprime
3°A programacion Matutino
*/

$Frutas= array("Manzana"=>"25","Mango"=>"40","Limon"=>"35","Naranga"=>"20");

echo "** FRUTERIA DEL SUR **", "<br>", "<br>";

foreach ($Frutas as $Fruta=>$Precio)
	{echo "el kilo de ".$Fruta." cuesta ". $Precio;
echo "<br>","<br>";
}
?>