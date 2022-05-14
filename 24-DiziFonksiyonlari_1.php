<!--
            24-Dizi fonksiyonlari 1;

1-print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.

2-var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

3-explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir = JS parse

4-implode();
Dizi elemanlarını birleştirip bir dizge elde eder. = JS stringfy

5-count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

6-is_array();
Değişkenin bir dizi içerip içermediğine bakar
-->


<?php

// 1 - ornek ilk once diziyi biz stringe cevirdik implode ile sonra ayni stringi yine eski haline getirmek icin explode ile diziye cevirdik

// Jsde bunun karsiligi json.stringfy() ve json.parse();


$arr = [1,2,3,4,5,6,7,8,9];
//implode();
// $dizge = implode(seperator:"=", $arr); CAlismiyor

$dizge = implode("=", $arr); // separator calismiyor artik sadece ikki tirnak arasi deger aliyor bitti ve gitti
echo "<pre>";
print_r ($dizge)."<br>";


// array haline geri getirdik explode(); ile
$newArr = explode("-", $dizge);
echo "<pre>";
var_dump($newArr)."<br>";


// count();
echo count($arr)."<br>";  // eleman sayinisi ogrenmek icin count


// kucuk bi ornek

for($i=0; $i<=count($arr)-1; $i++){
    echo $arr[$i];
}
echo "<br>";

// is_array()

echo is_array($arr);   //1 doner bu demek true



?>