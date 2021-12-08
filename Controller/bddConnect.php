<?php
  function Connect(){
    try{
      $connexion = new PDO('mysql:host=localhost:8889;dbname=Projetmeccano;charset=utf8', 'root', 'root');
      return $connexion;
    }catch(Exception $e){
      die('Erreur : ' .$e->getMessage());
    }
  }
 ?>
