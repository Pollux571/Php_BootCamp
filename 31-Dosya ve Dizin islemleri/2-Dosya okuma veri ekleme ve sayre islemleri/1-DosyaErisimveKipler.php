<!--
         ******         Dosya Erişim Modları - Dosya Kipleri    ******


         // DOSYA KIPLERI
1- r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.

2- r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.

3- w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir. Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır. Dosya belirtilen adreste yok ise yeniden oluşturulur.

4- w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir. Dosya belirtilen adreste yok ise yeniden oluşturulur.

5- a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.

6- a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste yok ise yeniden oluşturulur.

7- x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir. Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.

8- x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir. Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.
-->

<?php

// // 1 ornek

// //Dosya Açma
// //fopen bir dosyayı açmamıza olanak tanır, ilk parametre açılacak dosya ikinci paramerte ise ne amaçla açtığımızı bildiren kipi içerir.
// //f_open('dosyaismi', mode); dosya acariz ve hangi amacla oldgunu belirtiz fopen($dosya, $kip);

// $file = fopen('test.txt', 'r');

// // Dosya Okuma
// // fgets() fonksiyonu ile dosyayı satır satır okuyabiliriz.

// echo fgets($file)."<br>"; // bu ilk satiri yazdirir devamini yazdirmak icin yine ayni fonksyionu cagirmamiz lazim o yuzden biz bunu while ile hepisini yazdirdik

// while($satir = fgets($file)){

//      echo $satir."<br>";
// }

// // Dosya Kapatma
// // Dosyanın kapanması için fclose() fonksiyonu kullanılır.
// fclose($file);


/************************************************************** */


// 2 ornek

// $file = fopen('test.txt', 'r');

// // fread($degisken, number) fonksiyonu ile dosya okuma işlemi ikinci parametresine girilen ‘byte’ cinsinden sayısal değere göre ele alınır.

// echo fread($file, 90)."<br>"; // belirtigimiz byte gore okur 90 byte kadar okkutuk yazi olarak gosterir disa metin olarak aktarilir

// // filesize('dosyaismi'); // butun tumuyle dosyadaki her seyi okur filesize
// echo filesize('test.txt')."<br>"; // 112 yani bu dosyanin tamami 112 byte den olusuyor. disaraiya sayi olrak gosterim yapar :112

// $size = filesize('test.txt'); // sayi olrak 112
// echo fread($file, $size); // yukarda 90 byte okuldugu icin buda devamin okur eger yukardaki 90 okutmasak bu fonksiyonumuz tamamini okur! fread kullandigimiz icin disa metin olarak aktarilir


/************************************************************ */
// // 3 - ornek
// // Dosya Yazma
// // fwrite($degisken,"yazmakistegimizmetin") ve
// // fputs($degisken,"yazmakistegimizmetin")
// // fonksiyonları ile dosyaya yazma işlemi gerçekleştirilir.

// //İlk parametre fopen fonksiyonu ile açılan dosyayı belirten değişken değeri,  ikinci parametre dosyaya eklenecek veridir.
// //Fonksiyon başarılı bir şekilde çalışır ise dosyaya eklenen verinin bayt uzunluğunu döndürür, aksi halde ‘false’ değeri döner.

// $file = fopen('test.txt', 'a');

// fwrite($file, 'Yeni veri'); // test.txt dosyaya dondugumuzde biz orda Yeni veri yazsinin eklendigini goruruz satir 6;
// fputs($file, "\nhello world puts ile eklenmistir"); // devamina buda eklenmistir 7 satira \n ile bir alt satira attik


/*************************************************** */

//feof() Dosyadaki verileri okuma sırasında konumları elde edilerek dosya sonuna gelindi mi kontrolünü yapar.

// 1 - aciklamali ornek

// $file = fopen('test.txt', 'r');

// while($satir=fgets($file)){
//     print_r(feof($file)); echo "----"; // metin sonunda true donecegi icin bu  1--- sonunda boyle yazar 1 ile birlikte ----
//     echo $satir."<br>";
// }


// 2 - yukardakinin basitlestirilmis  hali

// $file = fopen('test.txt', 'r');

// while (!feof($file)){
//     echo fgets($file)."<br>--";
// }

// fclose($file);


/***************************** */

// // Varlık Kontrolü
// // file_exists() Dosya ve dizin fonksiyonlarından birisi olan file_exists    fonksiyonu ile PHP’de dosya veya dizin varlığını kontrol eder.

// // is_file() fonksiyonu, içerisine girilen adresin dosya olup olmadığını kontrol etmek için kullanılır.

// $kontrol = file_exists('test.txt');
// $kontrol1 = file_exists('test2.txt');
// var_dump($kontrol);  // bool(true)  doner
// var_dump($kontrol1);  // bool(false)  doner cunku boyle bir sey yok



// $kontrol2 = is_file('test.txt');
// $kontrol3 = is_file('test2.txt');

// var_dump($kontrol2);  // bool(true)  doner
// var_dump($kontrol3);  // bool(false)  doner cunku boyle bir sey yok
// // ikiside ayni sey is_file ve file_exists


/***************************************************** */

// //Dosya Yazma 2. Yöntem

// //file_put_contents();
// //file_get_contents();

// //İlk parametre verinin ekleneceği dosya, ikinci parametre eklenecek veri, üçüncü parametre ise veri ekleme işleminin türünü belirten değer. Üçüncü parametrenin kullanılması zorunlu değildir. Üçüncü parametreye FILE_APPEND değeri tanımlanır ise dosyaya veri eklenirken dosyadaki verinin tamamen yeni veri ile değişmesini istemeyip, varolan verinin sonrasına eklenmesini istemiş oluyoruz.


// file_put_contents('test.txt', 'icerik file put contetns ile eklenmistir',FILE_APPEND);
// file_put_contents('test.txt', "\nicerik file put contetns ile eklenmistir",FILE_APPEND);// "" cift tirnak icinde \n kulaniriz


// $get = file_get_contents('test.txt'); // tek seferdee butun dosyanin icini alir!! yazdirir
// print_r($get);



/********************* PHP dosya olusturma ORNEK**********/

$dosya = "<?php ";
$dosya .= '$isim = "Suleyman"; ';
$dosya .= 'echo $isim;';

file_put_contents('a.php', $dosya);




?>