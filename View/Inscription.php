 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title> ~Projet Meccano Inscription~ </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   </head>
   <body>
      <form class="inscription" action="../Controller/Inscription.php" method="post">
          <h4>Nom : </h4>
          <input type="text" name="Nom" placeholder="Ex : Sapone" required>
          <h4>Prenom : </h4>
          <input type="text" name="Prenom" placeholder="Ex : Guillaume" required>
          <h4>Mot de passe : </h4>
          <input type="password" name="MDP" required>
          <h4>Mail : </h4>
          <input type="email" name="Mail" placeholder="G.Sapone@mail.fr" required>
          <input type="submit" name="submit" value="M'inscrire">
      </form>
   </body>
 </html>
