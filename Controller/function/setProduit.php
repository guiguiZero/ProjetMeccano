<?php
  include('../Controller/getInfos.php');
  include('includes/header.php');

  $reSearch = $_POST['research'];

  function setPage(){
    $reSearch = $_POST['research'];
    $idUser = $_SESSION['idUser'];
    $name = getName($reSearch);
    $img = getImage($reSearch);
    $desc = getDesc($reSearch);
    $price = getPrice($reSearch);
    echo "<section class='Bienvenue'>";
    ?>
    <div class="card">
	     <div class="row no-gutters">
		       <aside class="col-md-6">
             <article class="gallery-wrap">
	              <div class="img-big-wrap">
	                 <a href="#"><img src="<?php echo $img ?>"></a>
	                </div> <!-- img-big-wrap.// -->
                </article> <!-- gallery-wrap .end// -->
		        </aside>
		          <main class="col-md-6 border-left">
                <article class="content-body">

                  <h2 class="title"><?php echo $name ?></h2>

                  <div class="mb-3">
	                   <var class="price h4"><?php echo $price ?></var>
	                    <span class="text-muted">/€</span>
                    </div>

                    <p><?php echo $desc ?></p>
                    <hr>
	                   <div class="row">
		                     <div class="form-group col-md flex-grow-0">
			                        <label>Quantity</label>
			                           <div class="input-group mb-3 input-spinner">
                                   <form class='setProduct' action='../Controller/addPanier.php' method='post'>
                                     <input id=idUser name=Userid type=hidden value="<?php echo $idUser ?>">
                                     <input id=idProd name=Prodid type=hidden value="<?php echo getID($reSearch) ?>">
			                                  <input id=Quantity name=ProdQuantity type=number min=0>
			                                   </div>
		                                     </div> <!-- col.// -->
	                                      </div> <!-- row.// -->
	                                       <input type=submit name=addPanier value=ajouter class="btn btn-outline-primary">
                                       </form>
                                     </article> <!-- product-info-aside .// -->
		                                 </main> <!-- col.// -->
	                                  </div> <!-- row.// -->
                                  </div>
<?php
    echo "</section>";
  }
 ?>
