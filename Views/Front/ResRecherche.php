<?php

session_start();

    require_once '../../Controller/TypeC.php';
    require_once '../../Model/Type.php';
  
    $tp1= new TypeC();
    $listetp=$tp1->afficherType();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chercher catégorie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/mostache.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">
  <?php include_once 'include/header-1.php'; ?>



    
    
    <!-- Hero Section-->
    <section class="py-7 position-relative dark-overlay"><img class="bg-image" src="assets/img/instagram/3.jpg" alt="">
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
          <h3 class="display-3 font-weight-bold text-serif text-shadow mb-5">Binevenu chez Artini</h3>
          <br>
          <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form action="ResRecherche.php" method="POST">
              <div class="row">
                <div class="col-lg-4 d-flex align-items-center form-group">
                  <!-- INPUT RECHERCHE -->
                 <input class="form-control border-0 shadow-0" type="text" name="searchInf" placeholder="Tu cherches quoi?">
                </div>
                <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                <select class="selectpicker" title="Type du produit" name="nom_categorie" id="nom_categorie" >

                  <?php 
                    foreach($listetp as $t) {
                  ?>
                  
                  <option>  <?php echo $t['nom_categorie'] ?>  </option>
                    
                  <?php
                    }
                  ?>
                </select>
                </div>
                <div class="col-lg-2">
                  <!-- BOUTON RECHERCHE -->

                  <button class="btn btn-primary btn-block rounded-xl h-100" type="submit"> Rechercher </button>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

    

    <section class="pt-6 pb-4">

              
    <?php
      if (isset($_POST['nom_categorie'])) {
        $inf2=new TypeC();
        if ($liste2=$inf2->chercherTypeInst($_POST['nom_categorie'])) {
   ?>

    <?php
      foreach ($liste2 as $elt) {
    ?>
        <div class="container">
          <h6 class="subtitle text-center text-primary mb-5">Résultats de recherche</h6>
          
          <div class="row mb-7">

          
          <br>
            <div class="mb-3 mb-lg-0 col-sm-6 col-lg-3">
              <div class="card border-0 hover-animate bg-transparent">
                <a class="position-relative" href="shopp.php?id=<?php echo $elt['id'] ?>">

                  <img class="card-img-top team-img" src="assets/<?php echo $elt['photo_categorie'] ?>" alt=""/> 
                  <div class="team-circle bg-secondary-light"></div>
                </a>
                  <div class="card-body team-body text-center">
                    <h6 class="card-title"> <?php echo $elt['nom_categorie'] ?> </h6>
                    <p class="card-subtitle text-muted text-xs text-uppercase"><?php echo $elt['historique_categorie'] ?>    </p>
                  </div>
              </div>
            </div>
         
            

        </div>
  <?php
        } 

      } 
      else {
      ?>

        <h1 class="hero-heading mb-4">Error 404</h1>
        <p class="text-muted mb-5">Oups, il semble que la catégorie que vous recherchez n'existe pas.</p>
        <p class="mb-6"> <img class="img-fluid" src="img/illustration/undraw_trip_dv9f.svg" alt="" style="width: 400px;"></p>
    <?php
      }
    }// isset              
    ?>

            </section>
    
    <!-- Footer-->
    <?php include_once 'include/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="assets/js/sh.js"></script>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="assets/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="assets/vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>