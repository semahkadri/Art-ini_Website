<?php 

session_start (); 

  include_once '../../Controller/Type3C.php';
  include_once '../../Model/Type3.php';

  $inf1= new eventC();
  $liste=$inf1->afficherType();

  $inf2= new eventC();
  $liste2=$inf2->afficherType();


  $tp1= new eventC();
  $listetp=$tp1->afficherType();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Evenements</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>(function(w, d) { w.CollectId = "6086bfcb34b8b76f099eff1a"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
 
  </head>
  <body style="padding-top: 72px;">
  <?php include_once 'include/header-1.php'; ?>

    
    <!-- Hero Section-->
    <section class="py-7 position-relative dark-overlay"><img class="bg-image" src="Assets\img\instagram\event.jpg" alt="">
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
       
          <br>
          <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form action="ResRecherche2.php" method="POST">
              <div class="row">
                <div class="col-lg-4 d-flex align-items-center form-group">
                  <!-- INPUT RECHERCHE -->
                  <input class="form-control border-0 shadow-0" type="text" name="searchInf" placeholder="Quel événement recherchez-vous?">
                
                </div>
                <div class="col-lg-3 d-flex align-items-center form-group no-divider">

                  

                  <select class="selectpicker" title="Evenement" name="nom_type" id="nom_type" >

                    <?php
                      foreach($listetp as $t) {
                    ?>

                    <option >  <?php echo $t['nom'] ?>  </option>
                    
                    <?php
                      }
                    ?>
                  </select>

                </div>
                <div class="col-lg-2">
                  <!-- BOUTON RECHERCHE -->

                  <button class="btn btn-primary btn-block rounded-xl h-100" type="submit" > Chercher </button> 

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <section class="pt-6 pb-4">
    
      <div class="container">
        <h6 class="subtitle text-center text-primary mb-5">Evenements</h6>
        
        <div class="row mb-7">
          <?php
            foreach($liste as $i) {
          ?>
          <div class="mb-3 mb-lg-0 col-sm-6 col-lg-3">
            <div class="card border-0 hover-animate bg-transparent"><a class="position-relative" href="promo.php?id_inf=<?php echo $i['id'] ?>"><img class="card-img-top team-img" src="assets/<?php  echo $i['photo']?>" alt=""/>
                <div class="team-circle bg-secondary-light"></div></a>
              <div class="card-body team-body text-center">
                <h6 class="card-title"> <?php echo $i['nom'] ?> </h6>
                <p class="card-subtitle text-muted text-xs text-uppercase">directed by </p>
                <h6 class="card-title"> <?php echo $i['directeur'] ?> </h6>
                <p class="card-subtitle text-muted text-xs text-uppercase"><?php echo $i['prix_event'] ?> dinars    </p>
              </div>
            </div>
          </div>
        
          <?php
          }
          ?>  
          
        </div>
      </div>


    </section>
   

    
    
    <!-- Footer-->
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