<?php 
session_start();
include_once "../../Controller/clientC.php";
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

  $clientC =  new clientC();

  if (isset($_POST['password-new']) && isset($_POST['password-confirm'])) {
     $newpass=$_POST['password-new'];
     $conpass=$_POST['password-confirm'];
      if(strlen($newpass)<6)
      {
        header("Location: user-security.php?error=Mot de passe court");
	    exit();
      }
      else if($newpass!=$conpass)
      {
        header("Location: user-security.php?error=Le mot de passe de confirmation ne correspond pas");
	    exit();
      }
      else{
        header("Location: user-security.php?success=Modification faite avec succès");
        $newpass = md5($newpass);
        $clientC->modifierClient3($_SESSION['id'],$newpass);

      

      }
      
  }





 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-Ini securité</title>
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
  <body style="padding-top: 72px;">
 
  <?php include_once 'include/header-1.php'; ?>

    <section class="py-5">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item"><a href="user-account.php">Compte</a></li>
          <li class="breadcrumb-item active">Connexion &amp; sécurité  </li>
        </ol>
        <h1 class="hero-heading mb-0">Connexion &amp; sécurité</h1>
        <p class="text-muted mb-5">Gérez votre connexion, votre sécurité et vos paramètres ici.</p>
        <div class="row">
          <div class="col-lg-7">
            <div class="text-block"> 
              <h3 class="mb-4">Connexion</h3>
              <div class="row">
                <div class="col-sm-8">
                  <h6>Mot de passe</h6>
                  <!-- <p class="text-sm text-muted">Last updated 3 years ago</p> -->
                </div>
                <div class="col text-right">
                  <button class="btn btn-link pl-0 text-primary collapsed" type="button" data-toggle="collapse" data-target="#updatePassword" aria-expanded="false" aria-controls="updatePassword">Mettre à jour.</button>
                </div>
              </div>
              <div class="collapse" id="updatePassword">
              <form action="" method="POST">
              <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                <div class="row mt-4">
                  <!--<div class="form-group col-12">
                    <label class="form-label" for="password-current">Mot de passe actuel</label>
                    <input class="form-control" type="password" name="password-current" id="password-current">
                  </div> -->
                  <div class="form-group col-md-6">
                    <label class="form-label" for="password-new">nouveau mot de passe</label>
                    <input class="form-control" type="password" name="password-new" id="password-new">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="password-confirm">Confirmez le mot de passe</label>
                    <input class="form-control" type="password" name="password-confirm" id="password-confirm">
                  </div>
                </div>
                <button class="btn btn-outline-primary">Mettre à jour le mot de passe</button>
                </form>
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