<?php

// //1 ornek
// session_start();  // session() fonksonunu cagirdik
// echo $_SESSION['isim']."<br>";  // sesion phpdeki isim keyli degeri burda kullandik cagirdik. // Suleyman doner



// // isset bir degiskenin var olup olmadigini kontrol eder.
// if (isset($_SESSION['isim'])){
//     echo 'merhaba '.$_SESSION['isim'].' hos geldiniz';
// }else{
//     echo "lutfen otrumu aciniz";
// }



/**********************  */
// 2 ornek
session_start();

if (isset($_SESSION['kullanci']['isim'])){
    echo 'merhaba '.$_SESSION['kullanci']['isim'].' hos geldiniz';
    echo "<pre>";
    print_r($_SESSION);
}else{
    echo "lutfen otrumu aciniz";
}


?>