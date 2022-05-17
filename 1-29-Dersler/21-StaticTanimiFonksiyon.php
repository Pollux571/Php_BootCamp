<!--
                            21- Statik fonksiyon Tanimi

Static Kullanımı!

Bir fonksiyonun çalışması bittiğinde içerisinde tanımlı olan değişkenler yok edilir yani ölürler. Fonksiyonun bir sonraki kullanımında tanımlı olan değişkenlerin eski değerleri kaybolmuş olur. Eğer fonksiyonun ikinci kez yada daha sonraki kullanımlarında içerisindeki değişkenlerin eski değerlerinin kaybolmasını istemiyorsanız o değişkenleri statik (static) olarak tanımlamanız gerekmektedir. Bu sayede değişkenlerin eski değerlerine ulaşabilirsiniz.
-->

<?php

// 1 ornek

function say(){
    static $sayi = 0;
    // 1- normalde bu +1 artmasi lazim ama her cagiridignda 00000 geliyor yani fonksiyon bi isi yapiyor ve oluyor iste bunun tekrar tekrar cagirildiignda +1 1234567 olup gelmesi iicin biz degiskenin onune static yazsini yaziyoruz.

    // 2- ve biz artik bu fonksyionu  baska bir yerde baska bi yerde cagirdigimizda son alan degeri ile bize donecektir !! son degeri 5 ise bize 5 ile gelectir !

    //3-bunun boyle olma sebebi biz burda sadece degiskeni cagiriyoruz yani for loop icinde i ile birlikte bir sey dondurmuyoruz cagirmiyoruz!!! o yuzden static kullaniyoruz baska bir yerde cagrildiginda son aldigi deger ile donsun diye.


    echo $sayi;
    echo "<br>";
    $sayi++;
}

say();    //0 degiskenin onune static koyduktan sonra
say();    //0                                     1 oldu
say();    //0                                     1 oldu
say();    //0                                     2 oldu
say();    //0                                     3 oldu
say();    //0                                     5 oldu
?>