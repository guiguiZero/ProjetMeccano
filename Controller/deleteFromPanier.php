<?php
  include('bddConnect.php');
  $idPanier = $_POST['idPanier'];
  $idUser = $_POST['idUSER'];
  $idProduit = $_POST['idProduit'];
  echo $idUser;

  $cnx = Connect();
  $sql = $cnx->prepare("DELETE FROM `contenu` WHERE idPanier =".$idPanier." AND idProduit =".$idProduit);
  $sql->execute();
  setPriceTotal($idPanier);

  function setPriceTotal($id){
    $cnx = Connect();
    try{
      $command = $cnx->prepare('UPDATE `panier` SET `PrixTotal`= (SELECT sum(Prix) as pTot FROM contenu WHERE idPanier = :id) WHERE idPanier = :id ');
      $command->execute($arrayName=array(
        'id'=>$id
      ));
    }catch(Exception $e){
      echo "Erreur d'ajout !";
      die('Erreur : ' .$e->getMessage());
    }
  }
  header('location: ../View/Panier.php');
 ?>
