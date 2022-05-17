<!--
                        Post Kullanımı($_POST)
                        GET  Kullanımı($_GET)

$_POST ve $_GET bir Süper global değişkendir.

0-get ve postla aradaki fark get urlde gostere gostere verileri gonderir post ise arka planda yaparak gonderir ggostermeden bunlari nerde kullanacagimizi uygulaya uygulaya ogrenicez

1-Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.

2-PHP $_POST, method="post" ile bir HTTP POST isteği gönderdikten sonra verileri toplamak için kullanılır.

-->

<?php

// //  1 - ornek
// echo  $_POST['isim'];
// echo  $_POST['soyisim']."<br>";

// // $_POST dizi oldugu icin ben burda dizilere uygulanan her seyi $_POST da uygulaya bilirim.

// $isim = trim($_POST['isim']);
// $soyisim = trim($_POST['soyisim']);

// echo $isim;
// echo $soyisim;



// // 2 ornek

// $dizi = array_map(function($e){

//      return trim($e) ;

// },$_POST);

// echo "<pre>";
// print_r($dizi)."<br>";
// echo htmlspecialchars($dizi['isim']); // <h1>Suleyman</h1>
// echo htmlspecialchars_decode($dizi['isim']); // h1 den kurtulmus ama buyuk h1 ile yazilan sadece tagi gostermiyor ama etkiyi aliyor
// echo strip_tags($dizi['isim']); // buda tamamen etkisi ile birlikte tagiyla birlikte her seyden temizliyor kendi oz haline donduruyor.

// // htmlspecialchars() , htmlspecialchars_decode(), strip_tags tabi bunlari biz eger bize kullanicdan h1 li html li tagli bir sey gelirse kullaniyoruz kodu izaya sokmak icin;



// 3 ornek

function filtre($p){
    return is_array($p) ? array_map('filtre',$p) : htmlspecialchars(trim($p));
}

$dizi = array_map('filtre',$_POST);
echo "<pre>";
print_r($dizi);


?>
