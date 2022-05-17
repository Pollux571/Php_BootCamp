<?php
// dizin demek = klasor papka


var_dump(file_exists('dizinKontrol')); // true doner cunku ayni yerde dizinKontrol diye klasorumuz var


//Oluşturma
//PHP dizin oluşturma, klasör oluşturma işlemini gerçekleştirmek için mkdir fonksiyonu kullanılır.
//mkdir('dosyalarismi');
//mkdir('dosyalarismi/altindakidosya/bialdtindakidsoyaismi');
//mkdir('dosyalarismi/./., 0777, false'); false ve 0777 default degerdir biz eger burda true yaparsak olustururken olusturur


// 1 ornek


// // mkdir('dizinKontrol2'); // dizinKontrol2 adidan klasorolusturduk.


// if(file_exists('dizinKontrol2')){
//     echo "bu dizin var";
// }else if( mkdir('dizinKontrol2')){
//      echo 'dizin olusturuldu';
// }; // bu dizin var doner cunku ayni yerde bu klasor var!!!!


/************************************************************* */

// 2 ornek

// mkdir('a/b/c', 0777, true);
// // $dizinSil = mkdir('a/b', 0777, true); // bunun gibi
// // $dizinSil = mkdir('a', 0777, true);   // bunun gibi

// rmdir('a/b/c'); // sadece sondaki klasoru siler biz gidip degiskenden hangi klasoru son birakirsak onu siler.


// 3 ornek

// $dizin_adi = 'c/b/a';
// mkdir($dizin_adi,0777,true); // c/b/a
// rmdir($dizin_adi); //   c/b




/**************************************** */

$dizin_adi = 'c/b/a';

if(file_exists($dizin_adi)){
    echo 'boyle dosya var';   // boyle dosya var doner cunku var
}else if(mkdir($dizin_adi,0007,true)){
    echo "dosya olusturuludu";
}else{
    echo "her sey denendi";
}










?>