<?php
  include('bddConnect.php');
  function getDesc(){
    $Name="Moto";
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT Description FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['Description'];
  }

  function getName(){
    $Name="Moto";
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT ProdName FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['ProdName'];
  }

  function getImage(){
    $Name="Moto";
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT imgProduit FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['imgProduit'];
  }

  function getPrice(){
    $Name="Moto";
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT Price FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    return $row['Price'];
  }

  function getAllProduct(){
    $cnx = Connect();
    $sql = "SELECT ProdName, imgProduit, Description FROM `produit`";
    foreach ($cnx->query($sql) as $row) {
      echo "<br><img src= ".$row['imgProduit']." alt= ".$row['ProdName']." >";
    }
  }

 ?>
