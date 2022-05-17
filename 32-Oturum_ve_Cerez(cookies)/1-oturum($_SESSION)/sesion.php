<!--
               Session İşlemleri

1- session_start(); ile oturum başlatılır.

2- $_SESSION['session_anahtar'] = 'deger' ile session ataması yapılır.

3- echo $_SESSION['session_anahtar'] ile session değerine ulaşılır.

4- unset($_SESSION['session_anahtar']); ile bir anahtara air session değeri silinir.

5- ession_destroy(); ile oturum sonlandırılır.

-->


<?php


// 1 ornek

// session_start();

// // $_SESSION['key'] = 'value';
// $_SESSION['isim'] = 'Suleyman';
// //$_SESSION bu bir globaldir her yerde cagirila bilir ben burda $_sessionuma deger atadim(suleyman) . ve ben artik  session_start() dedigim butun sayfalarda $_SESSION degerini yani (suleyman) cagira kulana biliyorum.

// // sesionlari biz boyle tek tek yerine dizi halinde yapipda gondere biliyoruz

/********************* */
// 2 ornek
session_start();

$_SESSION['kullanci']= [
    'isim' => 'Suleyman',
    'soyisim'=> 'Basir',
    'yas' => 27,
    'eposta' => 'Suleyman9514@mail.tr'
];

?>