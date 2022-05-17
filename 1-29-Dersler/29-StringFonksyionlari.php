<?php

// 1-strlen()
//Verilen metnin karakter sayısını yani uzunluğunu verir.
$metin = 'Şahin';
echo strlen($metin)."<br>"; // uzunlugu alir ş=2 byte    6 doner
echo mb_strlen($metin)."<br>"; // multibyte_strlen bu 2 byte lık olanları 1 bayt olarak uzunluk verır ornek Şahın ismi 5 doner



// 2- explode($ayirici,$metin);
//Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.

$metin2 = 'Sahin Turgut Ersever';

$array = (explode(",", $metin2)); // array yaptik ayrac calismadi burdada array fonksyionlarda calisiyor!!
print_r($array);
echo "<br>";

$metin3 =implode("#", $array);  // stringe ceverdik ayrac calismiyor array fonksyionlarda calisiyor!!
print_r($metin3);




//3- str_split($array,number);
// number = kac kac bolucegi anlamina gelir 2,3,4,5,6.....
//Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
// bunu ayni mb_strlen gibi mb_str_split olarakda kullana biliriz.


$metin4 = "Suleyman Basirov Bahadir Oglu";

$_Split = str_split($metin4, 2); // metin arasindaki bosuluguda sayar ve ona gore boler! burda 2 harf 2 harf olarak boler
$_Split2 = mb_str_split($metin4, 2);
echo "<br><pre>";
print_r($_Split);
print_r($_Split2);


// 4 - ltrim($metin), rtrim($metin), trim($metin);
// Verilen metnin sırasıyla solundaki(left-ltrim), sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.


$metin5 = "     Suleyman Basirov Bahadir Oglu";
$metin6 = "         Suleyman Basirov Bahadir Oglu      ";
$metin7 = "      Suleyman Basirov Bahadir Oglu      ";
echo $metin5."<br>"; // bosluklu hali

$metit = ltrim($metin5)."<br>"; // soldan bosluk kalmadi
$metit1 = rtrim($metin6)."<br>"; // sagdan bosluk kalmadi
$metit2 = trim($metin7);         // her yerden boslugu yok etti
echo $metit;
echo $metit1;
echo $metit2."<br>";


// 5 - substr($metin,$baslangic,$uzunluk);
//Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.

$_metin1= "Suleyman Basirov Bahadir Oglu";
$metin_al = substr($_metin1,5,10);
echo $metin_al."<br>"; // cikti =>   man Basiro



// 6 - strtolower($metin), strtoupper($metin);
// Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür.
// mb_strlen,mb_str_split,mb_strtolower ..... mb demek icinde karakter icere bilir demek ve tukrce harfleride kabul ediyor demek her seyi 1 byte olarak alir demek

$metin_2 = " biz bugun elma yedik";
$buyukHarf = strtoupper($metin_2);
$buyukHarf2 = mb_strtoupper($metin_2); // boylede kullana biliyoruz
echo $buyukHarf."<br>";

$kucukHarf = strtolower($buyukHarf);
$kucukHarf2 = mb_strtolower($buyukHarf); // boylede kullana biliyoruz
echo $kucukHarf."<br>";


// 7 - ucfirst($metin), ucwords($metin);
// Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.

$metin_3 = "cumlenin ilk harfi buyucek";
$_metin3 = ucfirst($metin_3); // metnin ilk sozcugunun ilk harfi buyuk doner ==> Cumle
echo $_metin3."<br>";
$_metin4 = ucwords($metin_3);  // metindeki butun sozcuklerin ilk harfi buyuk doner.
echo $_metin4."<br>";


// 8 str_replace($kaynak,$hedef,$metin);
// Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar. Bu fonksiyon küçük/büyük harf duyarlıdır.

$metin_4 = "Cumlenin Ilk Harfi Buyucek";
$_metin5 = str_replace('Cumlenin', 'Mubarek', $metin_4); // Mubarek ilk harfi buyucek
echo $_metin5."<br>";

// 9 nl2br($metin);
// String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.
// \n     alt satira iner bunlar <pre> ile calisir htmlde bu calismaz
//  \t    bosluk birakir  bunlar <pre> ile calisir htmlde bu calismaz

// onun yerine iste biz nl2br($metin) kullaniyoruz.

$metin7 = "Sahin turgut ersever\t merhaba <br>";
$metin8 = "Sahin turgut ersever\n merhaba";
echo nl2br($metin7);
echo nl2br($metin8)."<br>";

// 10 md5($metin), sha1($metin);
// Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.En iyisi bunlari siteden oku!!!

$sifre = '123456qwerty';
$yaz = md5($sifre);
echo $yaz."<br>";
$geriCevir = sha1($yaz);
echo $geriCevir."<br>";

// 11 strstr();
// Bir dizgede belirtilen karekterden sonrasını döndürür.

$sTrSTR = 'Selam burasi tehlike';
$sTrSTR1 = 'Selam burasi tehlike @mail.ru';
echo strstr($sTrSTR, "burasi")."<br>";
echo strstr($sTrSTR1, "@mail.ru");













?>