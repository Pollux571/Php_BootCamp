<!--
1-Kalıtım
Bir sınıfın özellik ve methodlarını başka bir sınıfa aktarmamıza olanak sağlar.

2-parent:: kullanımı
Sınıfımızda ve türetilen sınıfta aynı isimlerde özellik ve methodlara olursa biz icerdeki degilde yukardaki medotu kullanmak istersek parent:: kullaniriz. -->


<?php

// class Hash{
//       public function md5Hash($string){
//            return md5($string)."burasi hash";
//       }

//       public function sha1Hash($string){
//            return sha1($string);
//       }
// }

// class User extends Hash{

//      public $username;
//      public $password;

//      public function saveUser($username, $password){
//          $this->username = $username;
//          $this->password = $this->md5Hash($password); // orengin en onemli yeri burasi syntax bilmen gerek sart
//      }

//      public function showUser(){
//          echo $this->username."<br>";
//          echo $this->password."<br>";
//      }

// }

// $User = new User(); // new User; yazakda calisir
// $User->saveUser('Suleyman',123);
// $User->showUser();







/** her sey ayni fakat parent ile ornek */

class Hash{
          public function md5Hash($string){
               return md5($string)."harici medot";
          }

          public function sha1Hash($string){
               return sha1($string);
          }
    }

    class User extends Hash{

         public $username;
         public $password;

         public function md5Hash($string){
            return md5($string)."icerdeki metod"; // extra ayni metod normalde bu calisir yukardaki calismaz
        }

         public function saveUser($username, $password){
             $this->username = $username;
             $this->password = parent::md5Hash($password);
             // ::parent kullanmi disardaki HASH icindeki metod calisir
             // parent=$this
             // $this = Class ismi ornek: User,HASH
             // parent = Class ismi ornek: User,HASH
             // USER=$this=parent
         }

         public function showUser(){
             echo $this->username."<br>";
             echo $this->password."<br>";
         }

    }

    $User = new User(); // new User; yazakda calisir
    $User->saveUser('Suleyman',123);
    $User->showUser();

?>