<?php
// 1-
// current(); bir dizideki gecerli ogeyi dondurur.
// end();     Bir dizinin dahili işaretçisini son elemanına ayarlar
// next();    Bir dizinin dahili işaretçisini ilerletir
// prev();    Dahili dizi işaretçisini geri alır.
// reset();   Bir dizinin dahili göstericisini ilk elemana konumlar.
// bunlar hepsi normalde current() altinda kullanilir.


$dizi = ['araba', 'bisiklet', 'motor', 'ucak', 'tren'];

echo current($dizi)."<br>";  // araba burda isaretcidir dahili gosterici
echo next($dizi);           // bisiklet
echo next($dizi)."<br>";   // motor
echo prev($dizi)."<br>";  // bisiklet
echo reset($dizi)."<br>"; // en basa elemana ana isaretciye doner dahili gosteriyiciye
echo end($dizi)."<br><br><br>";          // son elemani verir!

////////////////////////////




// 2- extract()
// bize keyleri degisken olarak kullanmamizi sagliyor

$dizi2 = ['bir'=>'araba', 'iki'=>'bisiklet', 'uc'=>'motor', 'dort'=>'ucak', 'bes'=>'tren'];
extract($dizi2);
echo $bir."<br>";  // normalde boyle bir degiskenimiz yok ama extract() bize keyleri degisken olarak disarda yazdirmamizi sagliyor
echo $iki."<br>";
echo $dort."<br>";


// 3---
// asort(); Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.

// arsort(); Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.

// ksort(); Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.

// krsort(); Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.

$dizi3 = [
    2 => 1,
    5 => 2,
    8 => 0,
    1 => 20
];
// asort()
asort($dizi3);        // degerleri kucuk ten buyuge dogru sekilde siralar keyleri ile bozulmadan
echo "<pre>";
print_r($dizi3);


// arsort();
arsort($dizi3);       // degerleri buyukten kucuge siralar
echo "<pre>";
print_r($dizi3);

//ksort();
ksort($dizi3);    // keyleri kucukten buyuge siralar
echo "<pre>";
print_r($dizi3);

// krsort();     // keyleri buyukten kucuge
krsort($dizi3);
echo "<pre>";
print_r($dizi3);







?>