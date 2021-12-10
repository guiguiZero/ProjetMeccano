<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>~Projet Meccano Produit~</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.0/compiled.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_3.3.0/plugins/css/all.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

    <link rel="stylesheet" href="CSS/Contact.css" type="text/css">
  </head>
  <body>
    <?php
      include('includes/header.php');
     ?>
     <section class="bienvenue">
  <div class="container">
    <div id="contact">
      <h2>Contactez Nous</h2>
    </div>
    <div class="row">
      <div class="column">
        <img src="images/contact.jpeg" style="width:100%">
      </div>
      <div class="column">
        <form action="/action_page.php">
          <label for="fname">Pseudo</label>
          <input type="text" id="name" name="name" placeholder="Votre pseudo" required autofocus>
          <label for="lname">Email</label>
          <input type="text" id="email" name="email" placeholder="exemple@gmail.com" required>
          <label for="subject">Text</label>
          <textarea id="msg" name="msg" tabindex="5" classe="message" placeholder="Ecrivez votre message..."
            required></textarea>
          <button type="button" name="button" id="sending">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    (function () {
      emailjs.init("user_ofoRC6RuTJyuK2nxeVpHK");
    })();
    document.getElementById("sending").onclick = function () {
      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;
      let msg = document.getElementById("msg").value;
      sending(name, email, msg);
      success();
    }

    function sending(name, mail, msg) {
      emailjs.send("service_fg5xpnv", "template_ooa6c5o", {
        from_name: name,
        to_name: mail,
        message: msg,
      });
    }
    function success(){
      Swal.fire({
        icon: "success",
        title: "Bravo !",
        text: "Message envoyé",
      });
    }
  </script>
</body>

</html>
   </section>
  </body>
</html>
