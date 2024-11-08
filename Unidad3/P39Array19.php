<?php




$nombre=array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$edad=array(17,60,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();

$longitud=count($edad);

for($i=0;$i<$longitud;$i++)
	{if ($edad[$i]<18)
		{array_push($Grupo1,1);
		array_push($Grupo2,0);
	    array_push($Grupo3,0);}
	    if($edad[$i]>=18&&$edad[$i]<50)
	    	{array_push($Grupo1,0);
		array_push($Grupo2,1);
	    array_push($Grupo3,0);}
	    if($edad[$i]>=50)
	    	{array_push($Grupo1,0);
		array_push($Grupo2,0);
	    array_push($Grupo3,1);}
     }
     echo "NOMBRE________GRUPO 1________GRUPO 2________GRUPO 3";
     echo "<br>";
     for($i=0;$i<$longitud;$i++)
     {echo $nombre[$i],"_______________",$Grupo1[$i],"________________",$Grupo2[$i],"_______________",$Grupo3[$i];
      echo "<br>";}