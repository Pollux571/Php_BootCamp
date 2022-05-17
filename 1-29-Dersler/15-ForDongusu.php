<!--

                  15-For Dongusu For LOOP

-->

<?php

/// 1-ornek
      for($i=0; $i<=10; $i++){

        echo $i, "<br>";

      }


/// 2-ornek

$array = [
    'Ferguson',
    'PEP',
    'Gustavson',
    'Abramovich',
    'Fatih Terim',
];

echo "<pre>";
print_r($array);

   for($i=0; $i<=4; $i++){
       echo $array[$i].'<br>';
          //$array[icindekileri i kadar yazdirir];
   }

?>