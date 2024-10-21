<?php
/*CBTIS 89
Programa que almacena números en orden ascendente y descendente
Sebastian Arroyo Castro
3°A Programacion Matutino*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>