<!--
                            1-  siniflara giris

Nesne Yönelimli Programlama (OOP)
Kısaca sınıflara(Class) bir çok fonksiyonu bir düzene göre bir arada barındıran yapılardır diyebilir.
-->

<?php
//syntax=> class _IlkClass{};
// classlara isim verirken alt cizgi ile yada sadece isim ile veririz.



/*     1 ornek     */

// class _User{
//     //Degisken = Ozellikler
//     public $isim = 'Suleyman';

//     //Sabitler = Ozellikler
//     const YAS = 28;
//     // YUkardaki sinifi baslatmak icin biz disarda $User = new _User(); cagiriyoruz

//     //Fonksyionlar=Metodlar
//     public function isimyaz(){
//     // $this = _User
//     // $this -> isim  ===   _User icindeki $isim degikenini al
//        return $this->isim; // $this yazdikdan sonra baska bir degiskeni cagirirken ben $ isaret koymadan sadece ismini yazarim
//    }
// }

// $User = new _User();  // _User classimizi biz $User degiskenine atadik ve cagirdik icerde $this kullaniyorduk disarda ise simdi $User kullanicaz.
// echo $User->isim."<br>"; // _User in ismini yazdirdik
// echo $User->isimyaz()."<br>"; // burdada _User in fonksiyonunu cagirdik.

// echo _User::YAS; // burda biz const degiskenini cagirdik constun diger sabitlerden farki suki biz bunu cagiriken baslatmadan yani $User = new User() demeden direk clasin ismini yazarak ve iki nokta sonra degisken adini koayrak cagirabiliyoruz _User::YAS;

/****************************************************************************************************** */

/**    2 ornek  parametrelerle birlikte */


// class _Userr{

//    public function topla($num1, $num2){
//               return $num1 + $num2;
//    }
// }

// $User = new _Userr();
// echo $User->topla(2,3)."<br>";

/********************************************************************* */




/** 3 ornek 2 orengin aynisi fakat bir degisken ile  */

// class _Userrr{
//     public $toplam;
//     public function topla($num1, $num2){
//                $this->toplam = $num1 + $num2; // biz burda toplama numlarin toplamini atadik
//     }
//  }

// $User = new _Userrr();
// //  echo $User->topla(10,50); // degikensiz ornek $toplam


// $User->topla(10,50); // artik bu ekrana yazdirmaz cunku toplamlar $topla degiskenin icinde
// echo $User->toplam;   // yazdirmak icin toplamlari $toplami cagiririz.




/** 4 ornek gercekci ornek  *********************************** */


class User{
    public $isim;
    public $soyisim;
    public $eposta;
    public $yas;

    public function addUser($isim, $soyisim, $eposta, $yas){
                $this->isim = $isim;
                $this->soyisim = $soyisim;
                $this->eposta = $eposta;
                $this->yas = $yas;
    }
}

$User = new User();
$User-> addUser('Suleyman', 'Basir', 'sb@9514.com', 27);

echo "Merhaba benim adim ". $User->isim;
echo "<br>";

echo $User ->isim."<br>";
echo $User ->soyisim."<br>";
echo $User ->eposta."<br>";
echo $User ->yas."<br>";

?>