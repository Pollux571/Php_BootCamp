<?php
// 1- dosya olustuduk
// mkdir('ilkdosya');  // dosya olusturduk
// mkdir('ikincidosya'); // dosya olusturduk



// 2- olusturdugumuz dosyayinin isimlerini degistirdik

// rename('dosyaismi', 'yeni isimi');

// rename('ilkdosya', '1-dosya');  //dosya isimleri degisti
// rename('ikincidosya', '2-dosya'); // dosya isimleri degisti


// 3- simdi bu dosyarli birini birinin altina tasiyicaz.

rename('2-dosya', '1-dosya/2-dosya'); // burdada 2 ci dosyayi 1 dosyanin altina tasidik

?>