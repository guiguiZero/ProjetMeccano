<?php
  include('includes/header.php');
  include('../Controller/getInfos.php');
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
    echo "<div>";
    echo "<h2>".$name."</h2>";
    echo "<img src='".$img."' alt=".$name.">";
    echo "<div>";
    echo "<p>".$desc."</p>";
    echo "</div>";
  }
 ?>
