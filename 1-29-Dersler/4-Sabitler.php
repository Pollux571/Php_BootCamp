<!--
                                             4 konu =>>   Sabitler
1-Bir sabit define() işlevi kullanılarak tanımlanabilir. Bir sabit tanımlandıktan sonra asla değiştirilemez ve tanımsız yapılamaz.

2-Harf ve alt çizgi ile başlar.
3-Obje hariç tüm veri tiplerini tutabilir.
4-Sayı ile başlayamaz.
5-Türkçe karekter içerebilir.
6-Geleneksel olarak, sabit isimleri daima büyük harfle yazılır.


-->

<?php
 // syntax ==>> define(name,value,case_insensitive)
 define("GREETING","Hello you! How are you today?");   // sabit her zaman buyuk harfle yazilmali  GREETING ve "echo constant("GREETING);" ile cagrilir.
 echo constant("GREETING");  // cikti hello you how are you "GREETING  "  tirnaklar arasi bosluk olmasin yoksa hata verdi
 echo "<br><br>";
 echo GREETING ; // boylede yazilabilir ama iyi constant() fonksiyonu icinde cagirmak


?>


