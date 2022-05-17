<!--

                                     5-konu>>>    VERI TIPLERI


 1-STRING  " sahin erseven", 'test', '3'; echo "hello";

 2-INTEGER   100; 255; 355;   echo 344;

 3-FLOAT(Double) 2.5  echo 2.5;

 4-Boolean(true,false)

 5-Array(Dizi)  []

 6-Object(Nesne)  {} normalde su ilerde gorucez

 7-Null  null yada undifeind

 //gettype();
-->



<?php

  $a="Suleyman";
  $b= 255;
  $c = 3.5;
  $d = false;
  $e = [];
  $f = new stdClass();   // object buymus :))) komik yaw
  $j = null;
  $k;   // buda null ama hata vermesine ragmen sonunda null yaziyor kisacasi bunu KULLANMA!!!!

  echo gettype($a);  // tipini soyler javaScripteki typeof();
  echo "<br><br>";

  echo gettype($b);
  echo "<br><br>";

  echo gettype($c);
  echo "<br><br>";

  echo gettype($d);
  echo "<br><br>";

  echo gettype($e);
  echo "<br><br>";

  echo gettype($f);
  echo "<br><br>";

  echo gettype($j);
  echo "<br><br>";
  
  echo gettype($k);



?>