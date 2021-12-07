<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> ~Projet Meccano~ </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.0/compiled.min.css">
    <link rel="stylesheet"
        href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_3.3.0/plugins/css/all.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css"
        href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5"
        type="text/css" media="all">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/test.css" type="text/css">

</head>

<body>
    <?php include("includes/header.php");?>
    <section class="bienvenue">
        <div class="d-flex p-1 mb-2">
            <div class="flex-fill m-1 p-1 bg-light">
              <form action="Produit.php" method="post">
                <input name="research" placeholder="Rechecher un article"></input>
              </form>
                <ul>
                    <li>
                        <h3>Meilleures Ventes</h3>
                    </li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                </ul>
                <ul>
                    <li>
                        <h3>Promotions</h3>
                    </li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                </ul>
                <ul>
                    <li>
                        <h3>Recommandé</h3>
                    </li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                    <li class="marge">test1</li>
                </ul>
            </div>
            <div class="flex-fill m-1 p-1 bg-light">

                <section class="section-content padding-y bg">
                    <div class="container">
                        <br>
                        <h2>Mise en avant</h2>
                        <!-- ============================ COMPONENTS 1  ================================= -->
                        <div class="row">
                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/2.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/3.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>


                        </div>
                    </div>
                </section>

                <!-- Deuxième Section avec ma mise en avant -->

                <section class="section-content padding-y bg">
                    <div class="container">
                        <br>
                        <h2>Promotions</h2>
                        <!-- ============================ COMPONENTS 2  ================================= -->
                        <div class="row">
                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/1.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/2.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-5">
                                <figure class="card card-product-grid">
                                    <a href="#" class="img-wrap">
                                        <img src="images/3.jpeg">
                                    </a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Fjällräven Kånken Backpack Blue Ridge</a>
                                        <div class="mt-2">
                                            <var class="price">$84.00</var>
                                            <a href="#" class="btn btn-sm btn-outline-primary float-right">Add to cart
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>


                        </div>
                        <!-- ============================ COMPONENTS 2  END .// ================================= -->
                    </div>
                </section>
    </section>
    </div>
    </div>
</body>

</html>
