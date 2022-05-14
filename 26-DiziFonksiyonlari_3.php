<?php

// 1- in_array();
//Bir dizide bir değerin varlığını araştırır.
//syntax =>  in_array(mixed $iğne, array $samanlık, bool $sıkı = false): bool

$array= ['Sahin', 'Fatma', 'Mustafa', 'Ahmet', 'Mehmet'];

var_dump(in_array('Mustafa', $array)); // bool true doner
echo in_array('Sahin', $array)."<br>"; // 1 doner
print_r(in_array('Fatma', $array)); // 1 doner



//2-array_shift();
//Dizini başlangıcından bir eleman çıkarır.
//syntax  => array_shift(array &$deste): mixed
$array2 = ['Sahin', 'Fatma', 'Mustafa', 'Ahmet', 'Mehmet'];
array_shift($array2);
array_shift($array2);
array_shift($array2);
echo "<pre>";
print_r($array2); // sahin, fatma,mustafa cikti


//3-array_pop();
//Dizini sonundan bir eleman çıkarır.
//syntax  => array_shift(array &$deste): mixed
$array3 = ['Sahin', 'Fatma', 'Mustafa', 'Ahmet', 'Mehmet'];
array_pop($array3);
array_pop($array3);
array_pop($array3);
echo "<pre>";
print_r($array3); // mehmet, ahmet, mustafa sondan tek tek elemanlar cikti


//4 array_slice();
//Bir dizinin belli bir bölümünü döndürür
//  syntax
//     array_slice(
//     array $girdi,
//     int $başlangıç,
//     ?int $uzunluk = null,
//     bool $indisleri_koru = false
// ): array

$array4 = [1, 2, 3, 4, 5];
$slice = array_slice($array4, 1,3);
print_r($slice);



//5-array_sum();
//Bir dizideki değerlerin toplamını hesaplar.
$sayilar = range(1,20);
print_r(array_sum($sayilar)); // 210 doner
echo "<br>";


//6 array_product();
//Bir dizideki değerlerin çarpımını bulur.
$sayilar1 =range(1,10);
print_r(array_product($sayilar1));


//7 array_unique()
//Diziden yinelenen değerleri siler.
$girdi = array("a" => "yeşil", "kirmizi", "b" => "yeşil", "mavi", "kirmizi");
$sonuç = array_unique($girdi);
print_r($sonuç);

//8-array_values();
//Bir dizinin tüm değerlerini döndürür.
$dizi = array("beden" => "XL", "renk" => "sari");
print_r(array_values($dizi));



//9-array_push()
// Belli sayıda elemanı dizinin sonuna ekler.

$array4 = ['Sahin', 'Fatma', 'Mustafa', 'Ahmet', 'Mehmet'];
array_push($array4, "Suleyman");
array_push($array4, "Salima","Ebubekir","Umar"); // boylede olur cok eleman ekleyerek
// soyle bir yoluda var sonuna eleman eklemenin
$array4[] = "son eleman";// indis numarasini [10] yapsaydik 10 cu eleman olarak eklenirdi yada dizide var olan bir indis numarasini girersek onu siler ve kendini yazardi!
print_r($array4);


// 10-array_unshift()
// Belli sayıda elemanı dizinin basina ekler.

$array5 = ['Sahin', 'Fatma', 'Mustafa', 'Ahmet', 'Mehmet'];
array_unshift($array5, "Suleyman");
array_unshift($array5, "Salima","Ebubekir","Umar"); // boylede olur cok eleman ekleyerek
print_r($array5);


//11- array_keys()
// Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.

$array6 = ['isim1'=>'Sahin', 'isim2'=>'Fatma', 'isim3'=>'Mustafa', 'isim4'=>'Ahmet', 'isim5'=>'Mehmet'];

print_r(array_keys($array6));



?>