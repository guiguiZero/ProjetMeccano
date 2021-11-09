<?php
  include('bddConnect.php');
  $ProdName=$_POST['productName'];
  $ProdPrice=$_POST['productPrice'];
  $ProdDesc=$_POST['productDesc'];

  try{
    echo $ProdPrice;
    $cnx = connect();
    $command = $cnx->prepare('INSERT INTO produit (idProduit, ProdName, Price, Description) VALUES (DEFAULT, :nameProd, :priceProd, :descProd)');
    $command->execute($arrayName=array(
      'nameProd'=>htmlspecialchars($ProdName),
      'priceProd'=>htmlspecialchars($ProdPrice),
      'descProd'=>htmlspecialchars($ProdDesc)
    ));
    //On redirige vers la page d'Accueil

  }catch(Exception $e){
    echo "Erreur d'ajout !";
    die('Erreur : ' .$e->getMessage());
  }
 ?>
