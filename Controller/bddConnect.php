<?php
  function Connect(){
    try{
      $connexion = new PDO('mysql:host=localhost;dbname=projetmeccano;charset=utf8', 'root', '1808');
      echo "Connexion BDD fonctionnel ";
      return $connexion;
    }catch(Exception $e){
      echo "Erreur Connexion BDD";
      die('Erreur : ' .$e->getMessage());
    }
  }
 ?>
