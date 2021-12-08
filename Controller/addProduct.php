<?php
  include('bddConnect.php');
  include('function/upload.php');
  $ProdName=$_POST['productName'];
  $ProdPrice=$_POST['productPrice'];
  $ProdDesc=$_POST['productDesc'];
  $ProdQuantite=$_POST['productQuantiter'];
  if(isset($_FILES['img']) && !empty($_FILES['img']) && $_FILES['img']['error'] == 0){
    try {
      $img = upload_image($_FILES['img'], $ProdName, "Images/Produits/");
    } catch (Exception $e) {
      echo "erreur!";
    }
  }else{
    $img="null";
  }

  try{
    $cnx = connect();
    $command = $cnx->prepare('INSERT INTO produit (idProduit, ProdName, Price, imgProduit, Description, Quantite) VALUES (DEFAULT, :nameProd, :priceProd, :imgProd, :descProd, :ProdQ)');
    $command->execute($arrayName=array(
      'nameProd'=>htmlspecialchars($ProdName),
      'priceProd'=>htmlspecialchars($ProdPrice),
      'imgProd' => $img,
      'descProd'=>htmlspecialchars($ProdDesc),
      'ProdQ'=>$ProdQuantite
    ));
    //On redirige vers la page d'Accueil

  }catch(Exception $e){
    echo "Erreur d'ajout !";
    die('Erreur : ' .$e->getMessage());
  }
 ?>
