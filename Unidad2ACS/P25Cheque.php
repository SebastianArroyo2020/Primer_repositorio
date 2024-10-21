<?php
/* CBTIS 89
Programa que calcula la cantidad de billetes o monedas una cantidad de dinero
Sebastian Arroyo Castro
3°A Programacion Matutino
*/

$bm=0;
$bq=0;
$bd=0;
$bc=0;
$bcin=0;
$bv=0;
$md=0;
$mc=0;
$mdo=0;
$mu=0;

$c=789;

$bm=floor($c/1000);
$c=$c%1000;
$bq=floor($c/500);
$c=$c%500;
$bd=floor($c/200);
$c=$c%200;
$bc=floor($c/100);
$c=$c%100;
$bcin=floor($c/50);
$c=$c%50;
$bv=floor($c/20);
$c=$c%20;
$md=floor($c/10);
$c=$c%10;
$mc=floor($c/5);
$c=$c%5;
$mdo=floor($c/2);
$c=$c%2;
$mu=floor($c/1);

echo "son ".$bm." billetes de mil pesos";
echo "<br>";
echo "son ".$bq." billetes de quinientos pesos";
echo "<br>";
echo "son ".$bd." billetes de docientos pesos";
echo "<br>";
echo "son ".$bc." billetes de cien pesos";
echo "<br>";
echo "son ".$bcin." billetes de cincuenta pesos";
echo "<br>";
echo "son ".$bv." billetes de veinte pesos";
echo "<br>";
echo "son ".$md." monedas de diez pesos";
echo "<br>";
echo "son ".$mc." monedas de cinco pesos";
echo "<br>";
echo "son ".$mdo." monedas de dos pesos";
echo "<br>";
echo "son ".$mu." monedas de un peso";