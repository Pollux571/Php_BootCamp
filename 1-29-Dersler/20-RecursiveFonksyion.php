<!--
                    20 - Recursive Fonksiyonlar
  1- Recursive (öz yinelemeli) fonksiyonlar yani kendi kendini çağıran fonksiyonlardır.

  2- Bir fonksiyon tanimliyoruz ve tanimladigimiz fonksyion icinde fonksiyonu yine cagiriyoruz.
-->

<?php

// 1-ornek basit bi ornek

function sayi($i){
    echo $i;
    if($i<5){
          $i++;
          sayi($i); // kendini kendi icinde cagirdik bu iste recursive fonksiyondur $i yi
    }
}
sayi(1);
echo "<br>";





// 2-gercek bi ornek

$categories = [

[        'id' => 1,
         'parent' => 0,
         'name' => 'Front-End'
],

[
         'id' => 2,
         'parent' => 0,
         'name' => 'Back-end'
],

[        'id' => 3,
         'parent' => 2,
         'name' => 'Php'
],

[        'id' => 4,
         'parent' => 1,
         'name' => 'Vue js'
],

[        'id' => 5,
         'parent' => 2,
         'name' => 'NodeJs'
],

[        'id' => 6,
         'parent' => 5,
         'name' => 'ExpresJs'
],

[
         'id' => 7,
         'parent' => 3,
         'name' => 'Larevel'
]

];

function getCategories($arr, $par=0){
  $html = "";

  $html.="<ul>";

      foreach ($arr as $value){

        if($value['parent']=== $par){
            $html .= "<li>";
            $html .= $value['name'];
            $html .= getCategories($arr, $value['id']); //RECURSIVE fonksyion fonksiyon icinde fonksiyon cagirdik
            $html .= "</li>";
          }
       }

  $html.="</ul>";
  return $html;
}

echo getCategories($categories);



//3 kendimizin yaptigimiz bi ornek

$Fruits = [
     [
      'id' => 1,
      'parent' => 0,
      'name' => "Elma"
     ],

     [
       'id' => 2,
       'parent' => 0,
       'name' => "Seftali"
     ],

     [
       'id' => 4,
       'parent' => 1,
       'name' => "Eksi"
     ],

     [
        'id' => 5,
        'parent' => 2,
        'name' => "Erikli Seftali"
     ],

     [
        'id' => 6,
        'parent' => 4,
        'name'=> "yanlis tatli elma"

     ]


];

function getFrut($arr, $par=0){
  $html = "";

  $html.="<ul>";

      foreach ($arr as $value){

        if($value['parent']=== $par){
            $html .= "<li>";
            $html .= $value['name'];
            $html .= getCategories($arr, $value['id']); //RECURSIVE fonksyion fonksiyon icinde fonksiyon cagirdik
            $html .= "</li>";
          }
       }

  $html.="</ul>";
  return $html;
}

echo getFrut($Fruits);




?>

