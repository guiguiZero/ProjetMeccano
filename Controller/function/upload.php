<?php
  function upload_image($file, $nom, $path = "Images/Produits/"){
    $ext = strtolower(substr(strrchr($file['name'], '.')  ,1));
    $ext_safe  = array('png', 'jpeg', 'jpg');
    $mime = array('png' => 'image/png',  'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg');
    if(!in_array($ext, $ext_safe)) throw new Exception("Extension");
    $mineFile = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file['tmp_name']);
    if(!($mineFile === $mime[$ext] || $mineFile === $mimeExplorer[$ext])) throw new Exception("Mime");
    $dest = "../../". $path. $nom .".". $ext;
    if(file_exists($dest)) unlink($dest);
    if(!move_uploaded_file($file['tmp_name'], $dest));
    return $path . $nom . ".". $ext;
  }
 ?>
