<?php
/* CBTIS 89
Programa que almacena los nombres de personas y sus carreras en un areglo y los imprime
Sebastian Arroyo Castro
3°A Programacion Matutino
*/

$Datos= array("Ander"=>"Analisis clinicos","Adilene"=>"Electronica","Dylan"=>"Contabilidad","Sebastian"=>"Programacion","Axel"=>"ARH");

echo "** DATOS DE ALUMNOS **", "<br>", "<br>";

foreach ($Datos as $Nombre=>$Carrera)
	{echo "el alumno ".$Nombre." estudia en el CBTIS 89 la carrera de ".$Carrera;
echo "<br>","<br>";
}
?>