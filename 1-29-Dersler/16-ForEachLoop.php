<!--
                            16-Konu ForEach Loop
-->

<?php

// 1 - ornek normal ornek

$nameS = ['Sahin', 'Fatma', 'Ahmet', 'Mehmet'];

// boyle biz yazdira biliyorduk dongu icinde objeleri

for($i=0; $i<=3; $i++){
    echo $nameS[$i]."<br>";
}
echo "<br><br><br?";




// 2 - ornek

// bu yukardaki biraz zahmetli oldugu icin bizi php ForEach dongusunu sagliyor daha kolay yapalim diye yapipta gorelim asagida

// syntax
// foreach($nameS as $value){....codes}
$nameS = ['Sahin', 'Fatma', 'Ahmet', 'Mehmet'];

foreach($nameS as $value){
    echo $value."<br>";
}
echo "<br><br><br>";



// 3- ornek

// burda ise hem indis numarasi ile yazdiricaz
// foreach($nameS as $key => $value)

$nameS = ['Sahin', 'Fatma', 'Ahmet', 'Mehmet'];
foreach($nameS as $key => $value){
    echo ++$key.' - '.$value."<br>";
    // boyle indis ile yaziliyor cikti 1-sahin diye cikiyor;
    // $key onune ++ koyarak yani ++$key yazarsam 1 ile baslar yoksa 0.1.2.3.4 diye baslar default deger
}

?>