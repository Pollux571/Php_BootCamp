<!--
        25-Dizi Fonksiyonlari 2

1-shuffle();
Bir diziyi karıştırır.

2-array_combine();
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.

3-array_count_values();
Bir dizideki tüm değerleri sayar. key value yapar

4-array_flip();
Bir dizideki anahtarlarla değerleri yer değiştirir.

5-array_key_exists();
Belirtilen anahtar veya indis dizide var mı diye bakar.

6-array_map();
Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.

7-array_filter();
Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.

8-array_merge();
Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.

9-array_rand();
Bir diziden belli sayıda rasgele anahtar döndürür.

10-array_reverse();
Diziyi tersine sıralayıp döndürür.

11-array_search();
Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
-->

<?php

//0-range
echo "<pre>";
$numbers = range(1,20);  // burasi aslinda $numbers= [1,2,3,4,5,6,...,20];
print_r($numbers);
//syntax
//range(string|int|float $başlangıç, string|int|float $bitiş, int|float $adım = 1)
//range(10,20);  10 dan 20 kadar sayi yazdiri  cikti  11,12....19,20
//range(1,20,5);  cikti 1,6,11,16               5 er 5 er artar


//1- shuffle
shuffle($numbers); // dizi karistirir sayfa her yenilendiginde bilmece oyunlarinda kulanila bilir.
print_r($numbers);


// 2- array_combine
// syntax => array_combine($anahtarlar,$değerler);

$fruits = ['elma', 'armut', 'muz']; // key=>
$letters = ['a', 'b', 'c'];  //value            Array([elma] => a)  doner

$conclusion=array_combine($fruits, $letters);
print_r($conclusion);


// 3-array_count_values()
// ayni key in kac tane oldugunu gosterir dizi icinde
//syntax => array_count_values(array $dizi);

$fruits1 = ['elma', 'armut', 'muz','ananas','cilek','uzum','muz','ananas','armut'];
$sonuc = array_count_values($fruits1);
print_r($sonuc);        //      Array([muz]=>2);   cunku icerde 2 tane muz ananas armut var



//4-array_flip()
// index numarali ile keylerin yerini degistiri
//syntax => array_flip($dizi)
$fruits2 = ['elma', 'armut', 'muz','ananas','cilek','domates','badem','mango','patates'];
$dizi2=array_flip($fruits2);
print_r($dizi2);  // Array([elma]=>0);  normalde tam tersi olmasi lazim once indis numarasi sonra deger gelmesi lazim array_flip bunun tam tersini yapiyor!!


//5-array_key_exists
//syntax => array_key_exists(string|int $anahtar, array $dizi);   bool doner

$dizi3 = array_key_exists(2,$fruits);
var_dump($dizi3);

//6- array_map();
// syntax => array_map(?callable $işlev, array $dizi, array ...$diziler): array

// 1-ornek
$sayilar1 = range(1,10);

$dizi = array_map(function($e){
    return $e + 2;
},$sayilar1);

print_r($dizi);



// 2- ornek
$sayilar2 = range(1,10);

function cube($sayi){
    return $sayi * $sayi * $sayi;
}


$dizi2 = array_map('cube',$sayilar2); // burdaki mantik 1,2,3,4,..10 sayilarini cube ye atiyor yani sayi   ya gidiyor !!!   cube($sayilar);
print_r($dizi2);



//7-array_filter();
// syntax => array_filter($dizi, ?callable $işlev = null, int $kip = 0);  array

//1-ornek cift sayilar ornegi
$sayilar3 = range(1,10);

$cift= array_filter( $sayilar3, function($e){
    return $e%2 == 0 ? $e : false;
});

print_r($cift);


//2 - tek sayilar ornegi

$sayilar4 = range(1,10);

$_3bol= array_filter( $sayilar4, function($e){
    return $e%3 == 0 ? $e : false;
});

print_r($_3bol);



// 8 - array_merge()
// syntax => array_merge(array ...$diziler); array  // istedigimiz kadar $array alir ve birlestirir
// JS = Concat;
$sayilar5 = range (1,10);
$sayilar6 = range(11,20);
$sayilar7 = range(21,30);
$sayilar8 = range(31,40);
$sayilar9 = range(41,50);

$tek = array_merge($sayilar5, $sayilar6, $sayilar7,$sayilar8,$sayilar9);
print_r($tek);


// 9 - array_rand();     not==rand randomdan gelir!!
//syntax => array_rand(array $array, int $num = 1): int|string|array

$_dizi = ['elma','Armut', 'muz', 'kivi'];

print_r(array_rand($dizi,2));  //dizi icindeki random keyleri dondurur biz 2 verdik bize 2 tane random key dondurur. ac oku biraz karisik bir sey



// 10 - array_revers()
// syntax => array_reverse(array $dizi, bool $anahtarları_koru = false): array

$_1dizi = ['elma','Armut', 'muz', 'kivi'];
$arr = array_reverse($_1dizi);
print_r($arr);  // key leri tersine yazdirir  cikti => kivi muz armut elma olur


// 11 - array_search();
// syntax => array_search(mixed $iğne, array $samanlık, bool $türüne_bak = false): int|string|false
// ilk indis numarali olani cevirir mesala bizde cikti "2"  olur cunku ilk indis numarali muz 2 numarada. diger muzlara bakmadan gecer
$_2dizi = ['elma','Armut', 'muz', 'kivi','elma','Armut', 'muz', 'kivi','elma','Armut', 'muz', 'kivi'];
$arr2 = array_search('muz',$_2dizi);
print_r($arr2)





?>