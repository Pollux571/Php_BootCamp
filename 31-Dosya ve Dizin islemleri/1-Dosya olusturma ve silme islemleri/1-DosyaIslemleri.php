<?php
// touch('dosyaismi.tipi', zaman, ezamani); biz boyle dosya olustura biliyoruz
// orenk => touch('text.txt', time());

touch('test.php'); // bunu calistirdigimizda bizde test.php adinda klasorumuzde dosya olursur
touch('test2.php',time()); // zamanli versioyonu
touch('test3.php',time() - 86400); // zamanli versioyonu saniye cikarttik // gun degisir 1 gun geriye gider dosya olusturulmus tarihi




touch('sil.php'); // silinmek icin olusturumus dosya
// dosyalri silmek icin
//unlink("dosyaisimi.php");  // kullaniriz
unlink('sil.php');  // yukardaki sil.php silindi!


//////////////////////////////////////////////////////////////////




?>