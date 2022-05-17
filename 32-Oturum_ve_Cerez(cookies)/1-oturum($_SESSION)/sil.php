<?php
session_start(); // once baslat
session_destroy(); // sonra sonlandir yoksa destroy tek basina calismaz

header('Location :yazdir.php');

// sil calisiyor fakat browserda bunu gostermiyor ve bizi yazdir php atmasi gerekirken atmiyor acaip bi durum



?>