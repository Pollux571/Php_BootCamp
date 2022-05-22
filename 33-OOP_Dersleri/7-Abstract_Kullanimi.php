<!--
                                   Abstract

Abstract(Soyutlama) Kullanımı
1- Soyutlanmış sınıflar içerisinde soyut methodlar barındırır.
2- Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.


Özellikleri
1-  Soyut methodlar ve sabitler içerebilir.
2-  Normal methodlar, özellikler ve sabitler içerebilir.
3-  public, protected ve private olarak tanım yapılabilir.
4-  Aynı sınıf sadece bir abstract sınıftan türetilebilir.

 -->

<?php

// abstract class Urun{

//     public $urunAdi;
//     public $urunFiyat;
//     public $urunVergi;

//     abstract public function urunAdi($urunAdi);
//     abstract public function urunFiyat($urunFiyat);
//     abstract public function urunVergi($urunVergi);
// }

// class Icecek extends Urun{
//   //Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.

//   // eger biz burda urunAdi, urunFiyat, urunVergi fonksyionlari tanimlamasaydik hata alirdik. cunku biz urun classini extends ediyoruz, urun classi bir abstract class oldugu icin icindeki abstract fonksyionlarida tanimlamamiz lazim.
//     public function urunAdi($urunAdi)
//     {

//     }

//     public function urunFiyat($urunFiyat)
//     {

//     }

//     public function urunVergi($urunVergi)
//     {

//     }
// }






/* ********** yukardakinin devam hali yukarda kurallari var  ***************/

abstract class Urun{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){
        // Farzi misal db ye kayt ediyoruz
        echo "Urun adi: ".$this->urunAdi."<br>";
        echo "Urun Fiyat: ".$this->urunFiyat."<br>";
        echo "Urun Vergi: ".$this->urunVergi."<br>";
    }
}

class Icecek extends Urun{

    public function urunAdi($urunAdi)
    {
          $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
         $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
         $this->urunVergi = $urunVergi;
    }
}

class Tekstil extends Urun{

    public function urunAdi($urunAdi)
    {
          $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
         $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
         $this->urunVergi = $urunVergi;
    }
}

$Icecek = new Icecek();
$Icecek->urunAdi("Cola");
$Icecek->urunFiyat(10);
$Icecek->urunVergi("8");
$Icecek->urunEkle();


$Tekstil = new Tekstil();
$Tekstil->urunAdi("Zara");
$Tekstil->urunFiyat("99.9 : TL");
$Tekstil->urunVergi("10%");
$Tekstil->urunEkle();


?>