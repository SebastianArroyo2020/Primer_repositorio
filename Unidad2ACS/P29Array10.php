<?php
/*CBTIS 89
Programa guarda nombres y te dice si esta en el array
Sebastian Arroyo Castro
3°A Programacion Matutino*/

$nombres = array("Juan", "María", "Pedro", "Ana", "Luis", "Laura", "Carlos", "Elena");
$nombre = "Pedro"; 


for ($i = 0; $i < count($nombres); $i++) {
    if ($nombre === $nombres[$i]) {
        echo "Este nombre está en el Array";
        break;
    }
}
?>