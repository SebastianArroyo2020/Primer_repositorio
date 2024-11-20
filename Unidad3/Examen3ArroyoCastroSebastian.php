<?php
/*/* CBTIS 89
Programa que almacena el nombre de cuatro articulos en un arreglo llamado $productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses , esto se hace por medio de filas y columnas. debes calcular por medio de ciclos el subtotal y promedio de cada producto y guardarlo en los arreglos $subtotal y $promedio segun corresponda
Sebastian Arroyo Castro
3°A Programacion Matutino 
*/
$productos=array("Vestido","Pantalon","cinturon","camiseta");
$precios=array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Subtotal=array();
$Promedio=array();
$Suma=0;
for($i=0;$i<4;$i++)
	{for($j=0;$j<3;$j++)
		{$Suma=$precios[$i][$j]+$Suma;
			$Subtotal[$i][$j]=$Suma;}
	}
	 for($i=0;$i<4;$i++)
	{for($j=0;$j<3;$j++)
		{echo $productos[$i]."_______________".$Subtotal[$i][$j]." ";
      echo "<br>";}}
echo "Precios";
for($i=0;$i<4;$i++)
	{for($j=0;$j<3;$j++)
		{echo $precios[$i][$j]." ";}
		echo "<br>";}

?>