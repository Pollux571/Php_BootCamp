<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>

<!--
                        Post Kullanımı($_POST)
                        GET  Kullanımı($_GET)

$_POST ve $_GET bir Süper global değişkendir.

0-get ve postla aradaki fark get urlde gostere gostere verileri gonderir post ise arka planda yaparak gonderir ggostermeden bunlari nerde kullanacagimizi uygulaya uygulaya ogrenicez

1-Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.

2-PHP $_POST, method="post" ile bir HTTP POST isteği gönderdikten sonra verileri toplamak için kullanılır.

3--Request Kullanımı ($_REQUEST)
Öntanımlı olarak $_GET, $_POST ve $_COOKIE değişkenlerini içeren ilişkisel bir dizidir.

Kullanımı $_GET, $_POST kullanımı gibidir.
ikisini bi arada cagira biliyor!!!
-->



<form action="post.php" method="post">
<!-- action = formu gondericegimiz yeri yazariz -->
<!-- method = hangi methodla gondericegimizi yazariz -->

      <input type="text" name="isim" placeholder="Isim"><br>
      <input type="text" name="soyisim" placeholder="Soyisim"><br>
      <!-- name burda bize key isini goruyor bu inputdan gelen degere ulasmak istersek
        biz $_Post['isim'] diye ulasiyoruz -->

      <hr>
      <label>Diller</label><br>
      <label >PHP  </label>
      <input type="checkbox" value="php" name="dil[]"><br>
      <label >NodeJs</label>
      <input type="checkbox" value="node" name="dil[]"><br>
      <label >Js</label>
      <input type="checkbox" value="js" name="dil[]"><br>
      <!-- name="dil" olarak gonderdigimizde sadece sondaki js aliyor digerlerini isaretleyip gondereskde hepsi birlikte gitmesini istersek dil[] olarak gondermemiz lazim yani dilin asilda bir dizi oldugunu belirtiyoruz [] bunun icinde istersek sirasiyla 1,2,3, sirasini yada a,b,c, diyerekde verebiliyoruz-->

      <button type="submit">Gonder</button>

      <!-- burda formu doldurduktan sonra gondere bastigimizdan sonra her sey $_POST ta gider yani post.php burdaki verilere biz $_POST araciligiyla ulasiriz-->




</form>


</body>
</html>