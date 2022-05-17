<!--

            Birlestirme ve Atama Operatoru


1-   =    Atama operatoru
2-   .    Birlestirme operatoru

+=        toplayarak atama
-=        cikartarak atama
*=        Carparak atama
/=        bolerek Atama
%=        Mod alarak atama


-->


<?php

$a= "Selam Aleykum  ";
$b= "  Nasilsin";
echo $a.$b;
echo "<br>";


$a = 4;
echo $a += 3;  //cevap 7>> burda a ile 3 topla sonra cevabi ver demek toplayarak atama
echo "<br>";

$b = 5;
echo $b -= 2;  // cevap 3
echo "<br>";

// ayni seyler digleri icinde gecerli


$AD = "Keputo";
echo $AD .= "   JAPininho";
echo "<br>";

$AD1 = "Keputo1";
$SOYAD = "  Jirjinho";
echo $AD1 .= $SOYAD;
?>



                                <!-- Ornek php icinde html  -->

<div>
    <p>Lorem ipsum dolor sit amet.</p>
</div>    <!-- simdi bunu asagida php etiketi icinde yazicam aynisini birlestirme operatoru ile-->

<?php

$modul = "<div>";
$modul = "<p>Lorem ipsum dolor sit amet.</p>";
$modul = "</div>";

echo $modul;  // ve bana cikti olarak  "Lorem ipsum dolor sit amet." verir cok iyi ya;

?>


