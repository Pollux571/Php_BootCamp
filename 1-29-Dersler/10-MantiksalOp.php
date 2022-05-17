<!--

                        Mantiksal Operatorleri

1-   &&           ve
2-   ||           Veya
3-   !            Degilse


Ornek:

Restoran gittik siparis verdik pilav bulgur

Garson geldi pilav(var) veya Bulgur(yok);                             True doner

Garson geldi pilav(var) ve Kofte (yok);                               False doner

Garson geldi Pilav(var) ve Kofte(var) ve (Ayron(var) veya Kola(yok));  True doner

Garson geldi Pilav(var) ve Kofte(var) ve (Ayron(var) ve Kola(yok));    False doner

Garson geldi Pilav(var) ve Kofte(yok) ve (Ayron(var) veya Kola(yok));   False doner

 -->


 <?php

$a= 1;
$b = 2;

$sonuc = ($a == 1) && ($b == 2);  // true doner
var_dump($sonuc);
echo "<br><br>";

/****************************** */

$sonuc = ($a == 1) && ($b == 2) && ($a == $b); // false doner
var_dump($sonuc);
echo "<br><br>";


$sonuc = ($a == 1) && ($b == 2) || ($a == $b); // True doner
var_dump($sonuc);
echo "<br><br>";

$sonuc = ($a != $b);
var_dump($sonuc);  // true
echo "<br><br>";


$sonuc = ($a != $b) || ($a>0);  // true doner
var_dump($sonuc);
echo "<br><br>";


$sonuc = ($a != $b) || ($a>0) && ($b < 1); //False doner  && yanlisa false cift duz cizgi bir tanesi dogu olsa bile true doner



 ?>