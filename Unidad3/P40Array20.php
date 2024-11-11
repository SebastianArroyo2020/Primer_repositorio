<?php
/* CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los alumnos del 150 al 200 de la siguente manera:
En el $Arreglo1 van los numeros pares, en el $Arreglo2 van losnumeros impares, en el $Arreglo3 va la suma de los numeros correspondiente al mismo indice.
Arroyo Castro Sebastian
3°A programacion M.T.
*/

$Arreglo1=array();
$Arreglo2=array();
$Arreglo3=array();

//$ArrayNum=array(150);

for($i=150;$i<202;$i++)
{$ParoImpar=$i%2;
if ($ParoImpar==0)
{array_push($Arreglo1,$i);}
else
{array_push($Arreglo2,$i);}
//$Arreglo3=$Arreglo1+$Arreglo2;
}
for ($i = 0; $i < count($Arreglo1) && $i < count($Arreglo2); $i++) {
    $Arreglo3[$i] = $Arreglo1[$i] + $Arreglo2[$i];
}
 echo "Arreglo 1________Arreglo 2________Arreglo 3";
     echo "<br>";
      for($i=0;$i<26;$i++)
     {echo $Arreglo1[$i],"_______________",$Arreglo2[$i],"_____________",$Arreglo3[$i];
      echo "<br>";}

?>