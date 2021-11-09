<?php
  include('bddConnect.php');
  if(isset($_POST['identifiant']) && isset($_POST['pswd'])){
    $ident = htmlspecialchars($_POST['identifiant']);
    $pswd = htmlspecialchars($_POST['pswd']);
    $hpswd = hash("sha256", $pswd);
    $cnx=Connect();
    $stmt = $cnx->prepare("SELECT * FROM utilisateur WHERE Mail= :email AND MotDePasse= :MDP LIMIT 1");
    $stmt->execute(array(
        'email'=>$ident,
        'MDP'=>$hpswd
    ));

    $count = $stmt->rowCount();

    if($count == 1){
      $data = $stmt->fetch(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION['idUser'] = $data['idUser'];
      $_SESSION['identitée'] = $data['UserName'];
      $_SESSION['mdp'] = $data['MotDePasse'];
      $_SESSION['Mail'] = $data['Mail'];
      //On redirige vers la page d'accueil
      header('location: ../View/Accueil.php');
    }else{
      echo "Non inscrit ! OU Identifiant incorrect !";
    }
  }
 ?>
