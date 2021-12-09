<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Panier</title>

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
            <?php
              include("../Controller/function/setPanier.php");
              setPage();
             ?>
          </div> <!-- row.// -->
        </div>
    </section>
  </body>
</html>
