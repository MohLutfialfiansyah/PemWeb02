<?php
   $host = 'localhost';
   $dbname ='dbpos';
   $username = 'root';
   $password = '';

   try{
      $conne = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
      $conne->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e){
        echo "Koneksi Gagal:". $e->getMessage();
   }