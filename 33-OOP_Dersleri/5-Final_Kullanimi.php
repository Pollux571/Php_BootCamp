<!--
1-Final

final olarak tanımlanan sınıflar ve methodlar kalıtım yoluyla çoğaltılamaz. -->

<?php

class Bir{
          final public function methodBir(){
  // final metodun basinda yani bu demmeki bu methodBir fonksiyonu baska bir class icinde tekrar her hangi bi yerde methodBir isinmde tekrar cogaltilamaz
               echo "MethodBir <br>";
           }

}

/*final*/ class Iki extends Bir{
// burdada class basina final verdik bu demmeki Iki clasi baska Bir clasla extendes edilemez fatal error doner tek olmasi zorunda

           public function methodIki(){
            echo "MethodIki <br>";
           }

}

class Uc extends Iki{

           public function methodUc(){
            echo "MethodUc <br>";
           }

        //    public function methodBir(){

        //         echo "MethodBir <br>";
        //      // calismaz cunku yukarda final olarak belirledik fatal error doner
        //    }

}

$Uc = new Uc();

$Uc->methodBir();
$Uc->methodIki();
$Uc->methodUc();




?>