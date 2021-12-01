<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>~Projet Meccano Ajout d'un produit~</title>
  </head>
  <body>
      <form class="addProduct" action="../Controller/addProduct.php" method="post" enctype="multipart/form-data">
        <h4>Nom du produit : </h4>
        <input type="text" name="productName" placeholder="equerre" required>
        <h4>Prix du produit : </h4>
        <input type="number" name="productPrice" placeholder="15" required>
        <h4>Description du produit : </h4>
        <textarea name="productDesc" placeholder="Equerre de Meccano" required></textarea>
        <h4>Image du produit : </h4>
        <input type='file' name="img"/>
        <br>
        <input type="submit" name="add" value="Ajouter">
      </form>
  </body>
</html>
