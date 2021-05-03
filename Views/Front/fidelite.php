<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fidelite programme</title>
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
    <!-- Hero Section-->
    <section class="hero py-6 py-lg-7 text-white dark-overlay"><img class="bg-image" src="Assets/img/photo/photo-1467987506553-8f3916508521.jpg" alt="Text page">
      <div class="container overlay-content">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb text-white justify-content-center no-border mb-0">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">Programme de fidélité </li>
        </ol>
        <h1 class="hero-heading">Programme de fidélité </h1>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-10 mx-auto">           
            <p class="lead mb-5">Le programme de fidélité est notre façon de remercier nos clients fidèles! Plus vous achetez, plus vous gagnez de points, plus vous avez droit à des réductions.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-10 mx-auto"><img class="img-fluid mb-5" src="Assets/img/photo/photo-1471189641895-16c58a695bcb.jpg" alt=""></div>
        </div>
        
              <h2>Comment bénéficier du nouveau programme du fidélité?</h2>
              <blockquote class="blockquote blockquote-primary bg-gray-100 p-5">C’est facile. Il vous suffit de créer un compte et de <a href="contact/index.php" target="_blank" > Remplir ce formulaire </a></blockquote>
              <h2>Comment cumuler des points de fidélités?</h2>
              <blockquote class="blockquote blockquote-primary bg-gray-100 p-5">Lors de chaque achat, chaque produit vous fait gagner des points .</blockquote>
              <h2>Comment connaitre le montant de mes points de fidélité?</h2>
              <blockquote class="blockquote blockquote-primary bg-gray-100 p-5">Pour consulter le solde de vos points fidélité il vous suffit de vous connecter à votre compte client et de consulter la rubrique « Mes informations - Paiements & carte de fidélité ». .</blockquote>
              <h2>Quelle est la durée de validité des points de fidélité</h2>
              <blockquote class="blockquote blockquote-primary bg-gray-100 p-5">Les points cumulés et acquis au cours d’une année sont valables 1 an à partir de la date de leur obtention.</blockquote>
            </div>
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