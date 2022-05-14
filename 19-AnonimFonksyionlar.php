<!--
                         19-Anonim Fonksiyonlar

1-Anonim fonksyionlar isimsiz tanimlanan ve kullanilan fonksyionlardir

2- degiskene atayarak cagrilir veya callback olarak cagrilir

3- anonim fonksyion sonunda  ; kapatilir

 -->

 <?php

function topla(){
    return 2+2;
}                        // normla bi fonksyion

echo topla();
echo "<br><br>";




// 2 anonim fonksiyon

$anonim = function(){   // ismi yok gordugunuz gibi
  return 2+6;
};
echo $anonim ();   // ve bir echo ile cagrildi
echo "<br><br>";




// 3 ornek PARAMETRELI

$anonim1 = function($s1, $s2){   // ismi yok gordugunuz gibi
return $s1 * $s2;
};
echo $anonim1 (6,10);   // ve bir echo ile cagrildi
echo "<br><br>";





// 4 ornek Call back olarak bunu ilerde daha detayli gorucez

// $array = [2,3,4,5,6];
// syntax =>  "array_map( function($e), $array); "   ikitane parametre alir 1 tane fonksyon sonra degisken

// burda biz array_map anlamak icin bunu yazmadik sadece callback nasil calisir onu gormek icin yazdik ilerde zaten bu metodlari gorucez !!



$dizi = [
    2,3,4,5,6
];

$dizi = array_map(function($e){  // array_map = ikitane parametre alir
  return 2*$e;
}, $dizi);

echo "<pre>";
print_r($dizi);
echo "<br><br>";




// 5 ornek>>  4 islem

$islem = [

     'topla' => function($a, $b){return $a+$b;},
     'cikar' => function($a, $b){return $a-$b;},
     'carp' => function($a, $b){return $a*$b;},
     'bol' => function($a, $b){return $a/$b;}
];

echo $islem['topla'](2,4)."<br>";
echo $islem['cikar'](2,4)."<br>";
echo $islem['carp'](2,4)."<br>";
echo $islem['bol'](2,4)."<br>";

?>
