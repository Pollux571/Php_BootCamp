<!--
                     11 Konu IF ve Else ve Else IF


  1- IF
  2- If else
  3- else if
  4- Ternary (uclu operator);

  syntax
  if($kosul){
      .....
  }
-->

<?php
/** 1 ornek */
$kosul = true;
if($kosul==true){
    echo "kosul dogru";
}else{
    echo 'yanlis';
    echo "<br>";
}
echo "<br>";


/** 2 ci ornek */

$a=5;
$b=10;

if($a<$b){
    echo " kosul saglandi";
}
echo "<br>";


/** 3 ci ornek */

$d=5;


     if($d==1){
    echo "1 kosul saglnadi";
}else if($d==2){
    echo "2 kosul saglandi";
}else if($d==3){
    echo "3 kosul saglnadi";
}else if($d==4){
    echo "4 kosul saglnadi";
}else if ($d==5){
    echo "5 kosul saglandi";
}

echo "<br>";


/**  ternary
 *   syntax
 *   ?=dogruysa
 *   :=yanlisa
 *   $kosul ? '....' : '....';
 */

   $j=6;

   echo $j==6 ? 'Esit' : 'Esit degil';
?>


