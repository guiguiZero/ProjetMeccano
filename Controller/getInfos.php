<?php
  include('bddConnect.php');
  function getDesc($Name){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT Description FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['Description'];
  }

  function getName($Name){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT ProdName FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['ProdName'];
  }

  function getImage($Name){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT imgProduit FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['imgProduit'];
  }

  function getPrice($Name){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT Price FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['Price'];
  }

  function getID($Name){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT idProduit FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['idProduit'];
  }

  function getAllProduct(){
    $cnx = Connect();
    $sql = "SELECT ProdName, imgProduit, Description FROM `produit`";
    foreach ($cnx->query($sql) as $row) {
      echo "<br><img src= ".$row['imgProduit']." alt= ".$row['ProdName']." >";
    }
  }

 ?>
