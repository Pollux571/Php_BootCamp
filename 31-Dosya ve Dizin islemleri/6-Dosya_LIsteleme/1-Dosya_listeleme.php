<!--
scandir()
glob()

__DIR__ // bize hangi dosyada oldugumuzun yolunu gostrir.
-->

<?php
// echo __DIR__; // E:\xmapp\htdocs\patikaPHP\31-Dosya ve Dizin islemleri\6-Dosya_LIsteleme
// echo "<br>";


// $test = require './tessst.php';
// echo $test;    // E:\xmapp\htdocs\patikaPHP\31-Dosya ve Dizin islemleri\6-Dosya_LIsteleme





/******************************************************** */

// $array = scandir(".");  // array seklinde dosyalari gosterir nerde oludugumuzu yolu butun dosyalar ile birlikte
// echo "<pre>";
// print_r($array);




/****************************************** */

$basedir  = require './tessst.php';
$array = glob($basedir.'/*'); //    '/*'   yildiz hepsini getir demek
$array = glob($basedir.'/*.php'); //    '/*'   yildiz hepsini getir demek   .php uzandidaki dosyalari getir demek
echo "<pre>";
print_r($array);


// izle mumkunse bastan sona
// 20 dkdan itibaren guzel ornek var




?>