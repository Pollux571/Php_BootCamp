<!--
                              Static

Sınıf özelliklerinin ya da methodların static olarak tanımlanması, o özelliklerin ve yöntemlerin sınıfı başlatmadan kullanılabilmesini sağlar.

1-Static methodlar Ram'de tutulur ve daha performaslıdır. static olan metodlar fonksyionlar son hali ile bize gelir guncenllenmis hali ile


2- Static methodlar Ram'de tutulduğu için sınıfı tekrar başlattığımızda statik olarak güncellenen verilere ulaşabiliriz.

3- Sinifi baslatmadan da static olan sinif yada fonksyionlara ulasabiliriz.
-->



<?php

// class User{

//     public static $isim;

//     public static function setIsim($isim)
//     {
//          echo $isim;
//     }

// }
// // class cagirmadan metod ve fonksyionlara erise biliyoruz cunku static olduklari icin !!
// //syntax ->     User::$isim;  yada degiskene deger atanmis hali User::$isim=Suleyman;

// User::$isim="Suleyman <br>";
// echo User::$isim;

// User::setIsim("Ebubekir");

// // Not-> olarak asagidan sinifi cagirip sonra baska degerli cagirirsak static olanlari yukarda cagirdigimiz icin hata almayiz bir problem olmaz staticli olanlar hem sinifi cagirdikdan sonra hem cagirmasakda bir problem teskil etmez her turlu calisir.






/****************************************************** */

// self ornek $this yerine static olan yerde self:: kulaniyoruz

class User{

    public static $isim;

    public static function setIsim($isim)
    {
              self::$isim = $isim;
    }

    public static function getIsim(){
        return self::$isim;
    }

}

User::setIsim("Suleyman Ebubekir");
echo User::getIsim();




?>