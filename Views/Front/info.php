<?php 

session_start();


  require_once '../../Controller/productsC.php';
  require_once '../../Model/product.php';

  $inf1= new productsC();
  $liste=$inf1->afficherproducts();

  $inf2= new productsC();
  $liste2=$inf2->afficherproducts();

  
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
    <title>Categorie</title>
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
    <link rel="shortcut icon" href="Assets/img/mostache.png">
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
    <section class="py-7 position-relative dark-overlay"><img class="bg-image" src="Assets\img\instagram\1.jpg" alt="">
      <div class="container">
        <div class="overlay-content text-white py-lg-5">
          <h3 class="display-3 font-weight-bold text-serif text-shadow mb-5">Ressentez la musique "ART-INI"</h3>
          <br>
          <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form action="ResRecherche.php" method="POST">
              <div class="row">
                <div class="col-lg-4 d-flex align-items-center form-group">
                  <!-- INPUT RECHERCHE -->
                  <input class="form-control border-0 shadow-0" type="text" name="searchInf" placeholder="La liste des catégories des instruments: ">
                
                </div>
                <div class="col-lg-3 d-flex align-items-center form-group no-divider">

                  

                  <select class="selectpicker" title="Catégorie nom" name="nom_categorie" id="nom_categorie" >

                    <?php
                      foreach($listetp as $t) {
                    ?>

                    <option >  <?php echo $t['nom_categorie'] ?>  </option>

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
        <h6 class="subtitle text-center text-primary mb-5">Nos produits et leurs catégories</h6>
        
        <div class="row mb-7">
          <?php
            foreach($liste as $i) {
          ?>
          <div class="mb-3 mb-lg-0 col-sm-6 col-lg-3">
          <?php if (isset($_SESSION["id"])) {?> <div class="card border-0 hover-animate bg-transparent"><a class="position-relative" href="shop.php?id=<?php echo $i['id'] ?>"><img class="card-img-top team-img" src="assets/<?php  echo $i['img_prod']?>" alt=""/>
          <?php }else { ?><div class="card border-0 hover-animate bg-transparent"><a class="position-relative" href="shopp.php?id=<?php echo $i['id'] ?>"><img class="card-img-top team-img" src="assets/<?php  echo $i['img_prod']?>" alt=""/>   <?php } ?>
                <div class="team-circle bg-secondary-light"></div></a>
              <div class="card-body team-body text-center">
                <h6 class="card-title"> <?php echo $i['nom_categorie'] ?> </h6>
                <p class="card-subtitle text-muted text-xs text-uppercase"><?php echo $i['historique_categorie'] ?> </p>
              </div>
            </div>
          </div>
        
          <?php
          }
          ?>  
          
        </div>
      </div>


    </section>
    <section class="py-7">
      <div class="container">
        <div class="text-center">
          <p class="subtitle text-primary">Historique</p>
          <h2 class="mb-5">Découvrez l'historique de l'invention d'un tel instrument</h2>
        </div>
        <!-- Slider main container-->
        <div class="swiper-container testimonials-slider testimonials">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pt-2 pb-5">
            <!-- Slides-->
            <?php
            foreach($liste2 as $i) { 
            ?>
            <div class="swiper-slide px-3">
              <div class="testimonial card rounded-lg shadow border-0">
                <div class="testimonial-avatar"><img class="img-fluid" src="assets/<?php  echo $i['img_prod']?>" alt="..."></div>
                <div class="text">
                  <div class="testimonial-quote"><i class="fas fa-quote-right"></i></div>
                  <p class="testimonial-text"><?php echo $i['historique_categorie'] ?></p><strong><?php echo $i['nom_categorie'] ?> </strong>
                </div>
              </div>
            </div>
            <?php
            }
            ?>

          </div>
          <div class="swiper-pagination">     </div>
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
    <script src="assets/js/theme.js"></script>
  </body>
</html>
