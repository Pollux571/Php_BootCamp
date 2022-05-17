<!--

--  setcookie($params...) fonksiyonu ile çerezler tanımlanır.

--  setcookie($name, $value, $time, $path, $domain, $secure, $http_only)

1- $name : Cookie’nin ismidir. Cookie bu isim üzerine çağırılır.
2- $value : Cookie değeridir.
3- $time : Tarayıcı üzerinde aktif olacağı saniye cinsinden tutulan cookie süresidir. Bir değer verilmez ise tarayıcı kapandığında cookie silinir, tarayıcı açık kaldığı süre içerisinde aktif olur. Zaman değeri, şu anki zaman + aktif olacağı süre şeklinde verilebilir. (örnek: time() + 60 //60 saniye)
4- $path : Sitede hangi dizin içerisinde çalışması gerektiğini belirtir. Bütün sitede aktif olunması istenir ise ” / ” değeri girilir.
5- $domain : Cookie’nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını belirtir. Yazılmaz ise çalıştığı sitedeki ana domain baz alınır, tüm site üzerinde etkili olur.
6- $secure : True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleşir. Cookie güvenliği arttırma işlemi için kullanılır. Çerez bilgisi sadece https bağlantısı ile alınacağı belirtilir.
7- $http_only : True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır. Javascript ile tarayıcı üzerinde cookie düzenlenemeyecektir. -->

<?php

// // cookie olusturma
// // setcookie("key","value,time())
// setcookie("isim","Suleyman");
// // time burda 3 deger yazmak sart degil fakat time()+20 olmasi 20 snaiye coocide gecerli olucak anlamina geliyor
// setcookie("soyisim","Basir", time()+10);
// // sayfa 10 saniye sonra yenilendiginde bu soyisimli cookie yok olucak
// setcookie("babaisim","BasirOV", time()+86400*2);
// // 2 gun sonra yok olucak

// // bu cookierle biz super global $_COOKIE lerle erise biliyoruz.
// echo "<pre>";
// print_r($_COOKIE);



/***************************** */

// yukardaki ornek basit coocki olusturmaydi simdi biz aslinda butun parametleri ile birlikte cooki nasil olusturulur onu yazalim

// setcookie fonksiyonun ustune mouse goturursek zaten goruyoruz.

// setcookie(
//     $name,
//     $value,
//     $time,
//     $path,
//     $domain,
//     $secure,
//     $http_only
// );


// ornek

setcookie(
    'renk',
    '#dark',
    time()+ 86400,
    '/',
    'localhost',
    false,
    false
)
?>