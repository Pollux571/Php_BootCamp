<!--
                 Karsilastirma Operatorleri.

$a ==  $b    Esittir           TRUE FALSE
$a === $b    Aynidir           TRUE FALSE
$a !=  $b    Esit degildir     TRUE FALSE
$a !== $b    Farklidir         TRUE FALSE
$a  <  $b    Kucuktur          TRUE FALSE
$a  >  $b    Buyuktur          TRUE FALSE
$a <=  $b    Kucuk veya Esit   TRUE FALSE
$a >=  $b    Buyuk veya Esit   TRUE FALSE
$a <=> $b    Spaceship, Mekik   0    1-1

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1   bu konuyu izle ogren kesinlikle!!! '<=>"
echo 2 <=> 1; // 1
-->


<?php

// var_dump() == console.log

$a = true;
var_dump($a);
echo "<br><br>";
/////////////////////////////////////
$b = 2;
$c = 2;
var_dump($b == $c);  // $c=3; olsaydi bool(false) donerdi oranina bakar

echo "<br><br>";
$b = 2;
$c = "2";
var_dump($b === $c);  // burda veri tipine turune kadar bakar $c="2"; oldugu icin false dondu cunku string "2";

echo "<br><br>";
$b = 2;
$c = 3;
var_dump($b != $c); // true doner

echo "<br><br>";
$b = 2;
$c = 2;
var_dump($b != $c); // false doner

echo "<br><br>";
$b = 2;
$c = "2";
var_dump($b != $c); // false doner

echo "<br><br>";
$b = 2;
$c = '3';
var_dump($b !== $c); // true doner string olduguna bakmaz cunku == esit var







?>