<!--
                      18 - Fonksiyon Tanimlama ve Kullanma

1-Fonksiyonlar kısaca bir veya daha fazla komutun içinde yer aldığı yapılardır.

2-PHP'de fonksiyonları, yerleşik ve kullanıcı tanımlı olmak üzere ikiye ayırabiliriz:

3-Yerleşik fonksiyonlar: PHP'de önceden tanımlanmış olarak kullanıma hazır fonksiyonlardır.

4-Kullanıcı tanımlı fonksiyonlar: Geliştirici tarafından oluşturularak kullanılan fonksiyonlardır.

syntax

function name(){
    code..
}

-->

<?php

 function ilkFonk(){
     echo "sahin";  // genellikle fonksyon echo ile kullanilmaz return ile kullaniriz
 }

 ilkFonk();         // cagirdik ve calisti
 echo "<br><br>";


 // 2 ci ornek returne ile

 function ilkFonk1(){
    return "sahin";  // return ile dondurdugumuzde biz bu fonksyonu cagirirken echo ile yada bir degiskene atayarak cagiririz
}

echo ilkFonk1();         // boyle veya
echo "<br><br>";



function ilkFonk2(){
    return "sahin";  // return ile dondurdugumuzde biz bu fonksyonu cagirirken echo ile yada bir degiskene atayarak cagiririz
}


$fonk = ilkFonk2();         // veya boyle yaparak
echo $fonk;
echo "<br><br>";




// 3 ci ornek parametre ile calismak


// 1 ci ornek
function topla(){
    return 2+3;             // parametre ile calismak
}
echo topla();
echo "<br><br>";


// 2 ci ornek

function topla1($sayi1, $sayi2){
    return $sayi1 + $sayi2;
}

echo topla1(5,6);
echo "<br><br>";

// 3 ci ornek default sayi

function topla2($sayi1=1, $sayi2=7){ // default sayi verdik
    return $sayi1 * $sayi2;
}

echo topla2(5); // burda sayi vermedik diyelim default sayi calisir
echo "<br><br>";

?>
