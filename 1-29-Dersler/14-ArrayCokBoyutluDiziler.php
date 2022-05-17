<!--

               14- konu Array cok boyutlu diziler


-->

<?php

$hayvanlar = [
    'Ucan Hayvanlar',
    'Surungen Hayvanlar'
];
echo "<pre>";
print_r($hayvanlar);

$ucan_hayvanlar =[
    'kartal',
    'Guvercin',
    'Sahin'
];



// simdi yukarda iki tane ayri array var biz burda ornek olarak ucan hayvanlar dizisini hayvanlar dizisi icindeki ucan hayvanlara atamak istiyoruz bunuda soyle yapiyoruz

$hayvanlar = [
    'ucan hayvanlar' => ['kartal', 'guvercin', 'Sahin']
];

echo "<pre>";
print_r($hayvanlar);
//   $hayvanlar['key'][i.number];
echo $hayvanlar['ucan hayvanlar'][2];
echo "<br>";
echo $hayvanlar['ucan hayvanlar'][0];
echo "<br>";
echo $hayvanlar['ucan hayvanlar'][1];
echo "<br>";




// dahada coklu dizi ornegi

$insanlar = [
    "a"=>[
        "b"=>[
            'c'=>[
                1,2,3,4,5
            ]
        ]
    ]
];

echo "<pre>";
print_r($insanlar);





?>