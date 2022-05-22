<?php
// class icinde ilk calisan metod kurucudur son calisan metod yikicidir
// kurucu ve yikici metodlar kendiliginden calisir cagirma gereksinimi duymazlar
// kurucu her zaman ilk calisir nerde olursa olsun siraya bakmaz
// yikici metod her zaman sonda calisir nerde olursa olsun siraya bakmaz

// class User{

//    //public function __construct(){} <<<kurucu metod __construct ile olusur
//    public function __construct()
//    {
//         echo "hello world basladi <br>";
//    }

//    // public function __destruct(){}  <<< yikici metod __destruct ile olusur
//    public function __destruct()
//    {
//         echo "hello world sonlandirildi <br>";
//    }

//    public function selam(){
//        echo "default hello <br>";
//    }

// }

// $User = new User;
// $User->selam();





/*********************** */
// // NOT -> eger biz new Userr(par1,par2)  fonksiyon seklinde cagirip icinde parametre atarsak bu parametreler direk __constructor(par,par2) icine ataniyor.
// new Userr() fonksiyon sekli = __constructor();

// class Userr{
//     public function __construct($isim,$soyisim)
//     {
//              echo $isim." ".$soyisim."<br>";
//     }

//     public function __destruct()
//     {
//             echo "sonlandi";
//     }
// }

// $Userr = new Userr("Suleyman","Basir");






/*************************** */
// yukardakinin aynisi fakat privat ile olan ornek

// class Userr{

//     private $isim;
//     private $soyisim;

//     public function __construct($isim,$soyisim)
//     {
//              $this->isim = $isim;
//              $this->soyisim = $soyisim;
//     }

//     public function __destruct()
//     {
//             echo "sonlandi";
//     }

//     public function isimYaz(){  // bu fonksyionuda yukarda private atanan degerleri yazdirmak icin actik
//         return $this->isim." ".$this->soyisim."<br>";
//         // return ile dondurduysek disarda echo ile fonksiyonu cagiririz cunku yazdirmak icin boyle yapmak lazim     echo $Userr->isimYaz()
//         // return yerine echo ile icerde yazdirdiysak disarda sadece fonksiyonu cagirmamiz yeterli                        $Userr->isimYaz(); gibi
//     }
// }

// $Userr = new Userr("Suleyman","Basir");
// echo $Userr->isimYaz();



/************************************ */

// nullu sekli


class Userr{

    private $isim;
    private $soyisim;

    public function __construct($isim,$soyisim)
    {
             $this->isim = $isim;
             $this->soyisim = $soyisim;
    }

    public function __destruct()
    {
            $this->isim    = null;
            $this->soyisim = null;
            // sonunda calisarak isim ve soyisimin degerini null yaparak bosaltmis oldu
    }

    public function isimYaz(){
        return $this->isim." ".$this->soyisim."<br>";

    }
}

$Userr = new Userr("Suleyman","Basir");
echo $Userr->isimYaz();
?>