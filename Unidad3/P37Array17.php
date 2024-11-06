<?php


$Arraynum=array(10,-50,5,87,-9,-47,65,2,7,-5,4,-6,8,41,-7);
$ArrayPosi=array();
$ArrayNega=array();
$rsp=0;
$rsn=0;
$longitud=count(Arraynum);

for ($i=0;$i<$longitud;$i++)
	{if ($Arraynum[$i]>=0)
		{$Arraynum[$i]=$ArrayPosi[$i];}
		else
			{$Arraynum[$i]=$ArrayNega[$i];}
	}
	foreach($ArrayPosi as $Positivo)
		{echo $Positivo;
			echo "<br>";
			echo "La suma de los positivos";
			echo "<br>";
		foreach($ArrayPosi as $Positivo)
			{$spos=$spos+$Positivo;}
		echo $spos;}

		

