<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                                        <!--
                                                                         2.KOnu==>> Html icinde PHP




                                         Php html taglarini cozumlemiyor php yazmak icin php tagi acmak lazim  -->
<h1>Baslik bir</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, cupiditate!</p>

  <?php echo "selam"?>
  <?php echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, cupiditate!</p>"?>
  <?= 'hello'?>

  <script>
      alert("hello world"); /** javaScript bu php degil bunu okuyan htmldir */
      alert('<?php echo "selam"?>'); // boylede bir sey yazabiliriz! tek yada cift tirnak icinde php
      alert('<?=  "ders 2"?>'); // boylede bir sey yazabiliriz! tek yada cift tirnak icinde tekse cift, cifse tek tirnakla  php
  </script>


</body>
</html>