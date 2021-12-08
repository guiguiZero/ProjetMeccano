<?php
 include('bddConnect.php');
 $idUSER = $_POST['Userid'];
 $cnx = Connect();
 $sql = $cnx->prepare("SELECT * FROM panier WHERE idUser =? AND Valider = 0 " );
 $sql->execute([$idUSER]);
 $row = $sql->fetch(PDO::FETCH_ASSOC);
 if(checkStock() != 0){
   if($row == 0){
    createPanier();
  }else{
    addProducttoPanier();
  }
}

 //On vérifie les stocks pur savoir si l'on peut ajouter ou non au panier
 function checkStock(){
   $idProd = $_POST['Prodid'];
   $cnx = Connect();
   $sql = $cnx->prepare("SELECT Quantite FROM `produit` WHERE idProduit =? " );
   $sql->execute([$idProd]);
   $row = $sql->fetch(PDO::FETCH_ASSOC);
   if($row['Quantite'] < $_POST['ProdQuantity']){
    echo '<script language="javascript">';
    echo 'alert("Nous ne possèdons pas le stock suffisant pour cet article");';
    echo 'window.location.href="../View/Accueil.php?success=connexion";';
    echo '</script>';
   }else{
     return $row['Quantite'];
   }
 }

 //Partie de création de panier si aucun n'est détecter
 function createPanier(){
    $cnx = Connect();
    $idUSER = $_POST['Userid'];
    try{
     $command = $cnx->prepare('INSERT INTO panier (idPanier, PrixTotal, Valider, idUser) VALUES (DEFAULT, DEFAULT, DEFAULT, :idUtils)');
     $command->execute($arrayName=array(
      'idUtils'=>$idUSER
     ));
     $lastID = $cnx->lastInsertId();
     addProduct($lastID);
  }catch(Exception $e){
   echo "Erreur d'ajout !";
   die('Erreur : ' .$e->getMessage());
  }
 }

 //Partie d'ajout d'un produit dans un panier existant
 function addProducttoPanier(){
   $cnx = Connect();
   $idUSER = $_POST['Userid'];
   $idPROD = $_POST['Prodid'];
   $Quantity = $_POST['ProdQuantity'];
   $id = getIDPanier($idUSER);
   try{
     $sql = $cnx->prepare('INSERT INTO contenu (idPanier, idProduit, Quantite, Prix) VALUES (:idPanier, :idProduit, :Quantite, :Prix)');
     $sql->execute($arrayName=array(
      'idPanier'=>$id,
      'idProduit'=>$idPROD,
      'Quantite'=>$Quantity,
      'Prix'=>prixT($Quantity, $idPROD)
    ));
    header('location: ../View/Accueil.php?success=connexion');
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
    header('location: ../View/Accueil.php?success=connexion');
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

 function getIDPanier($idUSER){
   $cnx = Connect();
   $sql = $cnx->prepare("SELECT idPanier FROM `panier` WHERE idUser =? " );
   $sql->execute([$idUSER]);
   $row = $sql->fetch(PDO::FETCH_ASSOC);
   return $row['idPanier'];
 }
?>
