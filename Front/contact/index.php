<?php include 'sendemail.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="shortcut icon" href="../Assets/img/mostache.png">
    <link rel="stylesheet" href="../Assets/vendor/bootstrap/css/bootstrap.min.css">
 
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i> 2083 - Pôle Technologique-El Ghazala.</div>
        <div><i class="fas fa-envelope"></i>info@Art-ini.tn</div>
        <div><i class="fas fa-phone"></i>(+216)58 120 020</div>
       <!-- <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div> -->
      </div>
      <div class="contact-form">
        <h2>Formulaire-Carte fidélité</h2>
        <form class="contact" action="" method="post">
       
          <input type="text" name="name" class="text-box" placeholder="Votre identifiant">
          <input type="email" name="email" class="text-box" placeholder="Votre adresse e-mail" >
        <!--  <textarea name="message" rows="5" placeholder="Votre message" required></textarea> -->
        <div>
          </br>
           <input class="btn btn-info btn-xs" type="submit" value="Valider" name="submit"> </input>
            <button type="reset" value="Annuler" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Annuler </button>
                                        
          </div>
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>

