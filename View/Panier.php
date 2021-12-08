<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>test </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/panier.css" type="text/css">

    </head>
<body>
  <?php include("includes/header.php");?>
  <section style="padding-top:7%;">
<div class="card">
<div class="row no-gutters">
	<aside class="col-md-9">
			<article class="card-body border-bottom">
					<div class="row">
						<div class="col-md-7">
							<figure class="itemside">
								<div class="aside"><img src="images/1.jpeg" class="border img-sm"></div>
								<figcaption class="info">
									<a href="#" class="title">Some name of item goes here nice </a>
									<strong class="">$128.00</strong>
									<div>
										<a href="#" class="btn-link text-danger"> Delete</a>
									</div>
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
			<article class="card-body border-bottom">
					<div class="row">
						<div class="col-md-7">
							<figure class="itemside">
								<div class="aside"><img src="images/1.jpeg" class="border img-sm"></div>
								<figcaption class="info">
									<a href="#" class="title">Product name goes here nice </a>
									<strong class="">$128.00</strong>
									<div>
										<a href="#" class="btn-link text-danger"> Delete</a>
									</div>
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
			<article class="card-body border-bottom">
					<div class="row">
						<div class="col-md-7">
							<figure class="itemside">
								<div class="aside"><img src="images/1.jpeg" class="border img-sm"></div>
								<figcaption class="info">
									<a href="#" class="title">Another name of some product goes just </a>
									<strong class="">$98.50</strong>
									<div>
										<a href="#" class="btn-link text-danger"> Delete</a>
									</div>
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
	<aside class="col-md-3 border-left">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Total price:</dt>
			  <dd class="text-right">$69.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Total:</dt>
			  <dd class="text-right text-dark b"><strong>$80.45</strong></dd>
			</dl>
			<hr>
			<a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
			<a href="#" class="btn btn-light btn-block">Continue Shopping</a>
		</div> <!-- card-body.// -->
	</aside> <!-- col.// -->
</div> <!-- row.// -->
</div>
</section>
</body>
</html>
