<!-- Dosya Dahil Etme
Bir php sayfasına bir başka betik ya da herhangi bir dosya dahil etmek için kullanılan fonksiyonlar vardır. Bu fonksiyonlar yardımı ile bir php sayfasına başka bir php sayfası dahil edilebilir ve dahil edilen php sayfasındaki değişken ve fonksiyonlar kullanılabilir.

Bu fonksiyonlar;

include
include_once
require
require_once
fonksiyonlarıdır.

include 'dosya.php';  // tekrar tekrar cagirila bilir ve yazar ayni dosyayi

include_once 'dosya.php'; //  tekrar cagirildiginda calismaz ayni dosya cagirilirsa

require 'dosya.php';  // tekrar tekrar cagirila bilir ve yazar ayni dosyayi

require_once 'dosya.php';   // tekrar cagirildiginda calismaz ayni dosya cagirilirsa

şeklinde kullanılır.

require ve require_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "FATAL ERROR" verir ve çalışmayı durdurur. include ve include_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "WARNING" verir ve çalışmaya devam eder.

require_once include_once ile dahil edilen dosya sadece bir kere dahil edilebilir.

dahil edinmeh istenen dosyaninda uzantisi php olmak zorunda degil txt,html,css, olabilir biz onun icindeki yaziyi zaten kendimize alir ve php sekline sokariz.

-->