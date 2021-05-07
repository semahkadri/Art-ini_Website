<?php 
session_start();
require_once '../../Controller/carteC.php';
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
 
 $carteC= new carteC();
 if ($result=$carteC->affichercarte1($_SESSION['id'],"Date_activation")===false)
 {
   header("location: carteerror.php");
 }
 
  $dateact=$carteC->affichercarte1($_SESSION['id'],"Date_activation");
  $dateexp=$carteC->affichercarte1($_SESSION['id'],"Date_expiration");
  $nbptn=$carteC->affichercarte1($_SESSION['id'],"nbptn");
  $numero=$carteC->affichercarte1($_SESSION['id'],"numero");
 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-Ini carte</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="Assets/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="Assets/vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="Assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="Assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Assets/img/mostache.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">
  
  <?php include_once 'include/header-1.php'; ?>

    <section class="py-5 p-print-0">
      <div class="container">
        <div class="row mb-4 d-print-none">
          <div class="col-lg-6">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb pl-0  justify-content-start">
              <li class="breadcrumb-item"><a href="index.php">Accueil </a></li>
              <li class="breadcrumb-item"><a href="user-account.php">Compte</a></li>
              <li class="breadcrumb-item active">Paiements & Carte de fidélité   </li>
            </ol>
          </div>
          <div class="col-lg-6 text-lg-right">
            <!-- <button class="btn btn-primary mr-2"><i class="far fa-file-pdf mr-2"></i> Télécharger PDF</button> -->
            <button class="btn btn-primary mr-2" onclick="window.print()"><i class="fas fa-print mr-2"></i> Imprimer</button>
          </div>
        </div>
        <div class="card border-0 shadow shadow-print-0">
          <div class="card-header bg-gray-100 p-5 border-0 px-print-0">
            <div class="row">
              <div class="col-6 d-flex align-items-center"><img src="Assets/img/logoo.svg" alt="Directory"></div>
              <div class="col-6 text-right">
                <h3 class="mb-0">Carte de fidélité</h3>
                <p class="mb-0">Obtenue le: <?php echo $dateact ?> </p>
              </div>
            </div>
          </div>
          <div class="card-body p-5 p-print-0">
            <div class="row mb-4">
              <div class="col-sm-6 pr-lg-3">
                
                <h6 class="mb-1">Informations</h6>
                <p class="text-muted">Numéro: <?php echo $numero ?><br><strong>Vos points de fidélité:</strong><br><?php echo $nbptn  ?></p>
              </div>
              <div class="col-sm-6 pl-lg-4">
                <h2 class="h6 text-uppercase mb-4">Client</h2>
                <h6 class="mb-1"><?php echo $_SESSION['name']; ?></h6>
                <p class="text-muted">(+216)<?php echo $_SESSION['phone']; ?><br><?php echo $_SESSION['adress']; ?><br><strong><?php echo $_SESSION['email']; ?></strong></p>
              </div>
            </div>
            
              <div class="col-md-6 pl-lg-4 text-sm">
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Obtenue le </div>
                  <div class="col-6 text-right"><?php echo $dateact  ?></div>
                </div>
                <div class="row">
                  <div class="col-6 text-uppercase text-muted">Expire le </div>
                  <div class="col-6 text-right"><?php echo $dateexp ?></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 pr-lg-3">
              <h3>Historique de vos commandes</h3>
              <div class="text-muted">Vous trouverez ici vos commandes passées depuis la création de votre compte</div>

            </div>
            <div class="table-responsive text-sm mb-5">
              <table class="table table-striped">
                <thead class="bg-gray-200">
                  <tr class="border-0">
                    <th class="center">Référence</th>
                    <th>Date</th>
                    <th>Prix Total</th>
                    <th class="text-right">Paiement</th>
                    <th class="text-right">Facture</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >YMEOMBHNJ</td>
                    <td class="font-weight-bold">15/01/2021</td>
                    <td>958.00TND</td>
                    <td class="text-right">Paiement comptant à la livraison (Cash on delivery)</td>
                    <td class="text-left">- <a href="#">Détails</a></td>
                   
                  </tr>
                  <tr>
                    <td >YMJFFOFHNJ</td>
                    <td class="font-weight-bold">04/03/2021</td>
                    <td>100.00TND</td>
                    <td class="text-right">Paiement à la boutique</td>
                    <td class="text-left">- <a href="#">Détails</a></td>
                   
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row">
              
            </div>
          </div>
          <div class="card-footer bg-gray-100 p-5 px-print-0 border-0 text-right text-sm">
            <p class="mb-0">Merci pour votre confiance.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <?php include_once 'include/footer.php'; ?>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="Assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="Assets/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="Assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="Assets/vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="Assets/js/theme.js"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>