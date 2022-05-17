<!--
                      22-Global FOnksyion
-->


<?php

    error_reporting(E_ALL); // hatalari gormek icin yazdigimiz fonksyion!!!

     $isim = "Suleyman";
     $datBase = "";

     function isimyaz(){

         global $isim;
         echo $isim."<br>";
         // 1-burda eger echo $isim sadece bunu yazsaydik fonksiyon calismazdi cunku bizim degisken disarda fakat bu echo yazdirmadan once ilk once degiskeni global ile cagirip sonra echo ile degiskeni yazdirirsak o zaman calisir

         // 2- global bize disarda olan degisken yada farkli sey database gibi seylere ulasmamiz saglar fonksyion icinde yani disarda olan seye ulasmak icin global kullaniriz ilerde bunlari detayli gorucez!!!!

         global $datBase;
         $datBase = "deger degisti";
         echo $datBase;
     }

     isimyaz();

?>

