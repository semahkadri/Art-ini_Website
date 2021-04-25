<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-INI s'inscrire</title>
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
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
          <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
            <div class="mb-4"><img class="img-fluid mb-4" src="Assets/img/mostache.png" alt="..." style="max-width: 4rem;">
              <h2>S'inscrire</h2>
              <p class="text-muted">C'est facile et rapide.</p>
            </div>
            <form class="form-validate" action="signup-check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="form-group">
                <label class="form-label" for="id"> Identifiant </label>
                <?php if (isset($_GET['id'])) { ?>
                <input class="form-control" name="id" id="id" type="text" placeholder="identifiant" value="<?php echo $_GET['id']; ?>">
                <?php }else{ ?>
               <input  class="form-control" type="text" 
                      name="id" 
                      placeholder="Identifiant">
                      <br>
              <div class="form-group">
                <label class="form-label" for="name"> Nom et prénom </label>
                <?php if (isset($_GET['name'])) { ?>
                <input class="form-control" name="name" id="name" type="text" placeholder="Nom et prénom" value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input  class="form-control" type="text" 
                      name="name" 
                      placeholder="Nom et prénom">
          <?php }?>
              </div>
              
          <?php }?>
              </div>
              <div class="form-group">
                <label class="form-label" for="date"> Date de datesance</label>
                <?php if (isset($_GET['date'])) { ?>
                <input class="form-control" name="date" id="date" type="date" value="<?php echo $_GET['date']; ?>" >
                <?php }else{ ?>
               <input  class="form-control" type="date" 
                      name="date" 
                      >
          <?php }?>
              </div>
              <div class="form-group">
                <label class="form-label" for="mail"> Adresse e-mail</label>
                <?php if (isset($_GET['mail'])) { ?>
                <input class="form-control" name="mail" id="mail" type="email" placeholder="nom.prénom@address.com" value="<?php echo $_GET['mail']; ?>">
                <?php }else{ ?>
               <input  class="form-control" type="email" 
                      name="mail" 
                      placeholder="nom.prénom@address.com">
          <?php }?>
              </div>
              <div class="form-group">
                <label class="form-label" for="image">Photo de profile</label>
                <input  name="image" id="image" type="file" >
              </div>
              <div class="form-group">
                <label class="form-label" for="password"> Mot de passe</label>
                <input class="form-control" name="password" id="password" placeholder="Mot de passe" type="password" >
              </div>
              <div class="form-group mb-4">
                <label class="form-label" for="re_password"> Confirmer votre mot de passe</label>
                <input class="form-control" name="re_password" id="re_password" placeholder="Mot de passe" type="password">
              </div>
               <!-- <div class="form-group mb-4">
              <label for="captcha">Please Enter the Captcha Text</label> <br>
									    <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="material-icons">computer</i>
									    
									    <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
              </div>-->

              <button class="btn btn-lg btn-block btn-primary" type="submit">S'inscrire</button>
              <!--<hr class="my-3 hr-text letter-spacing-2" data-content="OR">
              <button class="btn btn btn-outline-primary btn-block btn-social mb-3"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
              <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
              <hr class="my-4"> -->
              <p class="text-sm text-muted">En appuyant sur S’inscrire, vous acceptez nos  <a href="#">Conditions générales</a> et <a href="#">Politique d’utilisation des données</a>.</p>
            </form><a class="close-absolute mr-md-5 mr-xl-6 pt-5" href="index.php"> 
              <svg class="svg-icon w-3rem h-3rem">
                <use xlink:href="#close-1"> </use>
              </svg></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 mr-n3" style="background-image: url(Assets/img/photo/background.jpg);"></div>
        </div>
      </div>
    </div>
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