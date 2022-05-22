<!--
                               Zincirleme

1-  Bir sınıf içerisinde methodlar geriye sınıfın kendisini döndürdüğünde -> ile devam ederek ardına zincirleme olarak başka bir method daha alabilirler.

2-  Aslında işin mantığı methodun geriye o sınıfın kendisini döndürüyor olmasıdır.

-->

<?php

// class islem{
//     public $sayi1;
//     public $sayi2;

//     public $toplam;
//     public $carpi;
//     public $bolum;
//     public $fark;

//     public function topla(){
//         return $this->sayi1 + $this->sayi2;
//     }
//     public function carp(){
//         return $this->sayi1 * $this->sayi2;
//     }
//     public function bol(){
//         return $this->sayi1 / $this->sayi2;
//     }
//     public function cikar(){
//         return $this->sayi1 - $this->sayi2;
//     }


// }

// $Islem = new Islem();

// $Islem->sayi1 = 10;
// $Islem->sayi2 = 5;

// // tek tek kullanim sekli
// echo $Islem ->topla()."<br>";
// echo $Islem ->carp()."<br>";
// echo $Islem ->bol()."<br>";
// echo $Islem ->cikar()."<br>";






/** yukardaki ornegin aynisi fakat zincirleme kullanmak icin yeni bi ornekde gostermek istedim hem syntax goruruz */

class islem{
    public $sayi1;
    public $sayi2;

    public $toplam;
    public $carpim;
    public $bolum;
    public $fark;

    public function topla(){
         //return $this yapiyoruz
         //islemei degiskene atiyoruz.
         $this->toplam = $this->sayi1 + $this->sayi2;
         return $this;

    }
    public function carp(){
         $this->carpim = $this->sayi1 * $this->sayi2;
         return $this;
    }
    public function bol(){
         $this->bolum = $this->sayi1 / $this->sayi2;
         return $this;
    }
    public function cikar(){
         $this->fark = $this->sayi1 - $this->sayi2;
         return $this;
    }

    public function goster(){
        echo $this->toplam."<br>";
        echo $this->carpim."<br>";
        echo $this->bolum."<br>";
        echo $this->fark."<br>";
    }


}

$Islem = new Islem();

$Islem->sayi1 = 10;
$Islem->sayi2 = 5;

// eger goster fonksiyonunua atamasydik islemleri zincirleme boyle cagira bilirdik.
// ve kesinlikle eger baska bir fonksiyona islemleri atadiysak onuda sonunda cagirmamiz lazim yoksa calismaz
echo $Islem->topla()->carp()->bol()->cikar()->goster();

//hepsini goster fonksyionuna atadigimiz icinde tekde soyle cagira biliriz.

echo $Islem->goster();




?>