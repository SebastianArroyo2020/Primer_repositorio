<?php
/* CBTIS 89
   Programa que Saca las tablas de multiplicar
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/


echo "SUMA ENTRE AREGLOS";echo "<br>";
$suma=array(0);
$Resta=array(0);
$Multi=array(0);
$Divi=array(0);
$arraynum1=array(10,20,30,40,50);
$arraynum2=array(3,7,6,15,18);
$longitud1=count($arraynum1);

for ($i=0; $i<$longitud1; $i++)
	{$suma[$i]=$arraynum1[$i]+$arraynum2[$i];
		echo $arraynum1[$i]," + ",$arraynum2[$i]," = ",$suma[$i];
		echo "<br>";}

echo "RESTA ENTRE AREGLOS";echo "<br>";
for ($i=0; $i<$longitud1; $i++)
	{$Resta[$i]=$arraynum1[$i]-$arraynum2[$i];
		echo $arraynum1[$i]," - ",$arraynum2[$i]," = ",$Resta[$i];
		echo "<br>";}

		echo "MULTIPLICACION ENTRE AREGLOS";echo "<br>";
for ($i=0; $i<$longitud1; $i++)
	{$Multi[$i]=$arraynum1[$i]*$arraynum2[$i];
		echo $arraynum1[$i]," X ",$arraynum2[$i]," = ",$Multi[$i];
		echo "<br>";}

		echo "DIVICION ENTRE AREGLOS";echo "<br>";
for ($i=0; $i<$longitud1; $i++)
	{$Divi[$i]=$arraynum1[$i]/$arraynum2[$i];
		echo $arraynum1[$i]," / ",$arraynum2[$i]," = ",$Divi[$i];
		echo "<br>";}
	?>