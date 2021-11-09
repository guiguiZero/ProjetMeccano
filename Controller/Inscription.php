<?php
  include('bddConnect.php');
  $Nom = $_POST['Nom'];
  $Prenom = $_POST['Prenom'];
  $MDP = $_POST['MDP'];
  $HMDP = hash("sha256", $MDP);
  $Mail = $_POST['Mail'];


  try{
    $cnx = Connect();
    $command = $cnx->prepare('INSERT INTO utilisateur (idUser, UserName, MotDePasse, Mail) VALUES (DEFAULT, :userName, :userPass, :email)');
    $command->execute($arrayName=array(
      'userName'=>htmlspecialchars($Nom ." ". $Prenom),
      'userPass'=>htmlspecialchars($HMDP),
      'email'=>htmlspecialchars($Mail)
    ));
  }catch(Exception $e){
    echo "Erreur Connexion BDD";
    die('Erreur : ' .$e->getMessage());
  }
 ?>
