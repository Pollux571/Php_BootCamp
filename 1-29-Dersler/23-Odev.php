<!--
                       ODEV
-->

<?php




function arti($sayi){

    for($i=1;$i<=$sayi;$i++)
    {
     for($a=1;$a<=$i;$a++)
     {
     echo"*";
     }
     echo"<br>";
    }

}

arti(15);

?>