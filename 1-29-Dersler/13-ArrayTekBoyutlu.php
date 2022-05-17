<!--
                    13-konu   "Array" !

    array()      >> phpde boyle tanimlaniyor malesef
    array[]      >> boylede tanimlaniyor

    $degisken = array(....);

-->


<?php

$isimler = array();
$isimler2 = [];

echo gettype($isimler); //gettype() = typeof() javaScript
echo "<br>";
echo gettype($isimler2);  // buda array doner



/** ornekler  */

// 1 ornek



$isimler = array("sahin", "fatma" , "Ahmet", "mehmet" );
echo "<pre>";  // pre bize arrayin duzgun sekilde gozukmesini saglar ve her zaman ekrana yazilacak arrayden once yazilmali!
print_r($isimler); // bize bildgin saf arrayi yazdirir

/*ortaya soyle bir sey cikar

Array
(
    [0] => Sahin
    [1] => Fatma
    [2] => Ahmet
    [3] => Mehmet

)

*/

echo $isimler[1]; // burda fatmaya ulastik
echo "<br>";
echo $isimler[0]; // burda sahine ulastik










echo "<br><br><br><br><br><br><br>";
echo 'ikinci ornek burdan basliyor';

/** 2 ci ornek yukardaki isimler arrayinin anahtarlarini degistirmek ve yeniden bi degiskene atamak
 *
 * 1-Yeni degisken ata
 * 2-anahtar gir  'isim'
 * 3- veriyi gir fatma sahin ahmet hangisine ait olmasini istiyorsan
 */

$isimler = [
    'isim1' => 'Sahin',
    'isim2' => 'Fatma'
];
echo "<pre>";
print_r($isimler); //saf bi sekilde array yazdirir asagida oldugu gibi iceregiyle beraber ayni program gibi arkada donen olay gibi.
echo "<br>";
var_dump($isimler); // degiskenin tipine kadar bilgi verir!!

/**
 *
 * Array
 * (
 *           [isim1] => Sahin
 *           [isim2] => Fatma
 * )
 * artik bunlara ulasmak icinde
 */
echo "<br>";
echo $isimler['isim2'];  // '' yukarda kullanmadik burda kullandik anlamadim gitti  'isim2' ???/ neden tirnak?




echo "<br><br><br><br><br><br><br>";
echo 'ucuncu ornek burdan basliyor';

/**
 * burda biz farkli veri tiplerini tuttuk arrayin icinde!!
 */

$kisi=[
    'isim' => 'Sahin Ersever',
    'yas' => 28
];

echo "<br>";
var_dump($kisi);

?>