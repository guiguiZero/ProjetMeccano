<?php
  include('../Controller/bddConnect.php');
  function setPage(){
    if(isConnected()){
      $idUser = $_SESSION['idUser'];
      getPanier($idUser);
      echo getNBProduit($idUser);
    }else{
      echo '<script language="javascript">';
      echo 'alert("Veuillez vous connecter, ou si vous ne possedez pas de compte veuillez en créez un.");';
      echo 'window.location.href="../View/Connexion.php";';
      echo '</script>';
    }
  }

  function getNBProduit($idUser){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT sum(Quantite) AS nbProduit FROM contenu JOIN panier USING(idPanier) WHERE idUser =".$idUser);
    $sql->execute();
    if($sql->rowCount() == 0){
      return 0;
    }else{
      while($res = $sql->fetch(PDO::FETCH_ASSOC)){
        return $res['nbProduit'];
      }
    }
  }

  function getPanier($idUser){
    $cnx = Connect();
    $sql = $cnx->prepare("SELECT * FROM `panier` JOIN `contenu` USING(`idPanier`) JOIN `produit` USING(`idproduit`) WHERE panier.idUser =".$idUser." AND valider = 0");
    $sql->execute();
    if($sql->rowCount() == 0){
      ?>
        <h3>Votre panier semble vide</h3>
      <?php
    }else {
      while($res = $sql->fetch(PDO::FETCH_ASSOC)){
        ?>
        <aside class="col-md-9">
          <article class="card-body border-bottom">
            <div class="row">
              <div class="col-md-7">
                <figure class="itemside">
                <div class="aside"><img src=<?php echo $res['imgProduit'] ?> class="border img-sm"></div>
                <figcaption class="info">
                  <strong class="">Prix Unitaire : <?php echo $res['Price'] ?> €</strong>
                  <form action="Produit.php" method="post">
                    <input type="hidden" name="research" value=<?php echo $res['ProdName']?>>
                    <input type="submit" class="btn btn-primary btn-block" name=<?php echo $res['ProdName']?> value=<?php echo $res['ProdName']?>>
                  </form>
                  <hr>
                  <form action="../Controller/deleteFromPanier.php" method="post">
                    <input type="hidden" name="idPanier" value=<?php echo $res['idPanier'] ?>>
                    <input type="hidden" name="idProduit" value=<?php echo $res['idProduit']?>>
                    <input type="hidden" name="idUSER" value=<?php echo $idUser ?>>
                    <div>
                      <input type="submit" class="btn btn-outline-danger btn-block" value="Supprimer">
                    </div>
                  </form>
                </figcaption>
              </figure>
            </div> <!-- col.// -->
            <div class="col-md-5 text-md-right text-right">
              <div class="input-group input-spinner">
                      <input id=Quantity class="form-control" name=ProdQuantity type=number min=0>
              </div> <!-- input-group.// -->
            </div>
          </div> <!-- row.// -->
        </article> <!-- card-group.// -->
      </aside> <!-- col.// -->
        <?php
      }
      setRecap($idUser);
    }
  }

  function setRecap($idUser){
    ?>
    <aside class="col-md-3 border-left">
    <div class="card-body">
    <?php
    $cnx = Connect();
    $sql = $cnx->prepare('SELECT contenu.Quantite, Prix, ProdName FROM panier JOIN contenu USING(idPanier) JOIN produit USING(idProduit) WHERE idUser ='.$idUser.' AND valider = 0');
    $sql->execute();
    while($res = $sql->fetch(PDO::FETCH_ASSOC)){
      ?>
      <dl class="dlist-align">
        <dt><?php echo $res['ProdName'] ?></dt>
        <dt>Quantité(s) : <?php echo $res['Quantite'] ?></dt>
        <dd class="text-right"> <?php echo $res['Prix'] ?> €</dd>
      </dl>
      <?php
    }
      $Total = getTotal($idUser);?>
      <dl class="dlist-align">
         <dt>Total:</dt>
         <dd class="text-right text-dark b"><strong><?php echo $Total ?> €</strong></dd>
       </dl>
        <hr>
        <a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
        <a href="#" class="btn btn-light btn-block">Continue Shopping</a>
      </div> <!-- card-body.// -->
    </aside>
    <?php
  }

  function getTotal($idUser){
    $cnx = Connect();
    $sql = $cnx->prepare('SELECT PrixTotal FROM panier WHERE idUser ='.$idUser.' AND valider = 0 ');
    $sql->execute();
    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res['PrixTotal'];
  }
 ?>
