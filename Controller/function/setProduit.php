<?php
  include('../Controller/getInfos.php');
  include('includes/header.php');
  if(isConnected()){
    echo "<br><br><br><br>".'Session is ON';
    echo $_SESSION['identitee'];
  }else{
    echo "<br><br><br><br>".'Session is OFF';
  }

  function setPage(){
    $name = getName();
    $img = getImage();
    $desc = getDesc();
    $price = getPrice();
    echo "<div>";
    echo "<h2>".$name."</h2>";
    echo "<img src='".$img."' alt=".$name.">";
    echo "<p>".$desc."</p>";
    echo "<p>".$price."</p>";
    echo "</div>";
  }
 ?>
