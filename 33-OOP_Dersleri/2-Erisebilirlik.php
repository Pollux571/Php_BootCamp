<!--

                                        Erişilebilirlik
--  public
    Her yerden erişilebilir.


--  private
    Sadece sınıf içerisinden erişilebilir.

--  protected
    Dışarıdan erişilmez.
    Sınıf içinde erişilebilir.
    Miras alma yoluyla kullanılabilir.

-->


<?php

// public ornegi
class User{

    public $isim = "suleyman";
}

// 1-ornek
$User = new User();
echo $User->isim."<br>";  // boylede icerden deger verip cagira biliriz

// 2-ornek
$User->isim="ikinci Suleyman";  // disarda deger verip sonrada cagira bilirz
echo $User->isim."<br>";





/******************************************** */

// // protected orenegi

// class Userr1{
//     protected $soyisim;
// }

// $Userr1 = new Userr1;
// $Userr1->soyisim="Ebubekir";
// echo $Userr1->$soyisim;  // hata verir cunku disarda erisilemez. bunlara disardan erisebilmemiz icin get ve set kullaniriz.
// // asagidaki ornekte bunlari gorelim.





/************************************************** */

// protected ornegi devami set ve get ile

class Userrr1{

    public $eposta;
    private $isim;
    protected $soyisim;

    // getter
    public function getEposta(): string  // nasil bir verip tipi dondurecegini belirtir
    {
        return $this->eposta;
    }

    //setter
    public function setEposta($eposta): void // bos demek bir sey dondurmuyor
    {
        $this->eposta = $eposta;
    }

    // isim get ve set
     public function getIsim()
    {
         return $this->isim;
    }


    public function setIsim($isim)
    {
         $this->isim = $isim;
    }

    // soyisim get ve set
    public function getSoyisim()
    {
        return $this->soyisim;
    }


    public function setSoyisim($soyisim)
    {
        $this->soyisim = $soyisim;
    }


}

$Userrr1 = new Userrr1;

$Userrr1 -> setIsim("Suleyman");
$Userrr1 -> setSoyisim("Basir");
$Userrr1 -> setEposta("sb9514@mail.com");

// ve ben bunlari kullanmak istedigimde get ile hepisini cagiriyorm.

echo $Userrr1 -> getIsim()."<br>"; // Suleyman doner
echo $Userrr1 -> getSoyisim()."<br>"; // Basir doner
echo $Userrr1 -> getEposta()."<br>"; // sb9514@mail.com doner





/************************************************ */

// kendi yaptigim ornek private ile
class Ornek {
    private $adress;

    public function setAdress($adress){
        $this->adress = $adress;
    }

    public function getAdress(){
        return $this->adress;
    }
}

$Ornek = new Ornek;

$Ornek -> setAdress("nine hatun mah/ no15 d3");
echo $Ornek -> getAdress();




?>
