<!--
                                Interface Kullanımı
1-  Arayüzler, soyut sınıflara benzer.

2-  Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.


Özellikleri
1-  Soyut methodlar ve sabitler içerebilir.
2-  Sadece public method tanımı yapılabilir.
3-  Aynı sınıf sadece birden fazla interface kullanabilir.
-->

<?php

interface A{
    public function a();
    public function b();
}

interface B{
     public function c();
     public function d();
}

// interface oldugu icin extends yerine implaments kullaniyoruz
// abstractda sadece bir tane classi kullana biliyorduk fakat interfacelerde bir cogunu baska bir classla iplament yani extends yapa biliyoruz. Ornek asagida oldugu gibi A,B
class C implements A,B{
    // interface Class oldugu icin ayni abstractda oldugu gibi artik metodlari icinde bulundurmak zorunda
    public function a()
    {

    }
    public function b()
    {

    }
    public function c()
    {

    }
    public function d()
    {

    }

  // Not-> mesala biz yukardada B ile A  yani:->
  // class B implements A{}
  //implament etmis olsaydikda yine ayni sekilde eger C yi B ile implements etseydik yine A daki metodlari ->
  // class C implaments B{......}
  // icinde  cagirmak zorunda kalicaktik
}

?>