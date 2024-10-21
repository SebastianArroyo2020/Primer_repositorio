<?php
/*CBTIS 89
Programa un arreglo bidimencional
Sebastian Arroyo Castro
3°A Programacion Matutino*/

$array=array(1);

for ($i=1;$i<=100;$i++)
	{$resi=$i%2;
		if ($resi==0)
			{array_push($array,$i);
				echo $i,"<br>";
			}        
	}

?>