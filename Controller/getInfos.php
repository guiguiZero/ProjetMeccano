<?php
  include('bddConnect.php');
  function getData($Name){
    $Name="Moto";
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT * FROM `produit` WHERE ProdName =? " );
    $sql->execute([$Name]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    echo $row['Description'];
    //image, nom, prix
  }

  function getAllProduct(){
    $cnx = Connect();
    $sql = "SELECT ProdName, imgProduit, Description FROM `produit`";
    foreach ($cnx->query($sql) as $row) {
      echo "<br><img src= ".$row['imgProduit']." alt= ".$row['ProdName']." >";
    }
  }

 ?>
