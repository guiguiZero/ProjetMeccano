<?php
  function upload_image($file, $nom){
    $path = $_FILES['img']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    //$path_parts = pathinfo($file);
    //echo $path_parts['extension'];
    if(isset($_FILES['img'])){
      $tmpName = $_FILES['img']['tmp_name'];
      $name = $_FILES['img']['name'];
      $size = $_FILES['img']['size'];
      $error = $_FILES['img']['error'];
      move_uploaded_file($tmpName, '../Images/Produits/'.$nom.'.'.$ext);
    }
    return '../Images/Produits/'.$nom.'.'.$ext;
  }
 ?>
