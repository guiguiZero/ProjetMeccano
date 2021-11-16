<?php
  function Connect(){
    try{
      $connexion = new PDO('mysql:host=localhost:8889;dbname=projetmeccano;charset=utf8', 'root', 'root');
      echo "Connexion BDD fonctionnel ";
      return $connexion;
    }catch(Exception $e){
      echo "Erreur Connexion BDD";
      die('Erreur : ' .$e->getMessage());
    }
  }
 ?>
