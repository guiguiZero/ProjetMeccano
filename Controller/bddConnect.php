<?php
  function Connect(){
    try{
      echo "string";
      $connexion = new PDO('mysql:host=localhost;dbname=projetmeccano;charset=utf8', 'root', '1808');
      return $connexion;
    }catch(Exception $e){
      die('Erreur : ' .$e->getMessage());
    }
  }
 ?>
