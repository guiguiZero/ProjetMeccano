<?php
  include('../Controller/getInfos.php');
  include('includes/header.php');
  if(isConnected()){
    echo "<br><br><br><br>".'Session is ON';
  }else{
    echo "<br><br><br><br>".'Session is OFF';
  }

  $reSearch = $_POST['research'];
  echo $reSearch;

  function setPage(){
    $reSearch = $_POST['research'];
    $name = getName($reSearch);
    $img = getImage($reSearch);
    $desc = getDesc($reSearch);
    $price = getPrice($reSearch);
    echo "<div>";
    echo "<h2>".$name."</h2>";
    echo "<img src='".$img."' alt=".$name.">";
    echo "<p>".$desc."</p>";
    echo "<p>".$price."</p>";
    echo "</div>";
    echo "<form class='setProduct' action='../Controller/addPanier.php' method='post'>";
    echo "<input id=idUser name=Userid type=hidden value=".$_SESSION['idUser'].">";
    echo "<input id=idProd name=Prodid type=hidden value=".getID($reSearch).">";
    echo "<input id=Quantity name=ProdQuantity type=number min=0>";
    echo "<input type=submit name=addPanier value=ajouter>";
    echo "</form>";
  }
 ?>
