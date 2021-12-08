<?php
 include('bddConnect.php');
 $idUSER = $_POST['Userid'];
 $cnx = Connect();
 $sql = $cnx->prepare("SELECT * FROM panier WHERE idUser =? AND Valider = 0 " );
 $sql->execute([$idUSER]);
 $row = $sql->fetch(PDO::FETCH_ASSOC);
 if($row == 0){
   createPanier();
 }

 function createPanier(){
    $cnx = Connect();
    $idUSER = $_POST['Userid'];
    try{
     $command = $cnx->prepare('INSERT INTO panier (idPanier, PrixTotal, Valider, idUser) VALUES (DEFAULT, DEFAULT, DEFAULT, :idUtils)');
     $command->execute($arrayName=array(
      'idUtils'=>$idUSER
     ));
     $lastID = $cnx->lastInsertId();
     echo $lastID;
     addProduct($lastID);
  }catch(Exception $e){
   echo "Erreur d'ajout !";
   die('Erreur : ' .$e->getMessage());
  }
 }

 function addProduct($id){
   $idPROD = $_POST['Prodid'];
   $Quantity = $_POST['ProdQuantity'];
   $cnx = Connect();
   try{
     $sql = $cnx->prepare('INSERT INTO contenu (idPanier, idProduit, Quantite, Prix) VALUES (:idPanier, :idProduit, :Quantite, :Prix)');
    $sql->execute($arrayName=array(
      'idPanier'=>$id,
      'idProduit'=>$idPROD,
      'Quantite'=>$Quantity,
      'Prix'=>prixT($Quantity, $idPROD)
    ));
  }catch(Exception $e){
    echo "Erreur d'ajout !";
    die('Erreur : ' .$e->getMessage());
  }
 }

 function prixT($Quantity, $idProd){
    $price = getPrice($idProd);
    $T=($Quantity*$price);
    return $T;
 }

 function getPrice($idProd){
     $cnx = Connect();
     $sql = $cnx->prepare("SELECT Price FROM `produit` WHERE idProduit =? " );
     $sql->execute([$idProd]);
     $row = $sql->fetch(PDO::FETCH_ASSOC);
     return $row['Price'];
 }
?>
