<?php
include_once "../../Controller/clientC.php";
include_once "../../Model/client.php";
include "PHPMailer-master/PHPMailerAutoload.php";
session_start();
	$end=false;
	if (isset($_SESSION['id'])&&isset($_SESSION['login']))
		$end=true;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Récuperation</title>
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
  <body>
    <div class="mh-full-screen d-flex align-items-center dark-overlay"><img class="bg-image" src="Assets/img/photo/music.jpg" alt="Coming Soon">
      <div class="container text-white text-center text-lg overlay-content py-6 py-lg-0">
        
        <h1 class="mb-5 text-shadow">Retrouvez votre compte.</h1>
        
        <form class="form" method="post" action="newpassword.php">
                                    <div class="form__group mb--20">
                                    
											<?php if (isset($_GET['x'])) {?>
                                      
<input   type="type" name="lostid" id="lostid"  style="text-align:center" placeholder="Identifiant"<?php echo $_GET['x'];?>" >
                                    </div>
									<?php
									}
									else
									{
									?>
									 
                                        <input  type="text" name="lostid" id="lostid" class="form__input form__input--2 "  placeholder="Identifiant">
                                    </div>
									<?php
									}
									?>
									</br>
									<?php if (isset($_GET['var'])) {?>
									<div class="form__group mb--20">
                                       
                                        <input type="text" name="mcode" id="mcode" class="form__input form__input--2" placeholder="Code" value="<?php echo $_GET['var'];?>">
                                    </div>
									<?php
									}
									else
									{
									?>
                                    <input type="text" name="mcode" id="mcode" class="form__input form__input--2 "  placeholder="Code">
									<div class="form__group mb--20" >
                                       
                                        
                                    </div>
									<?php
									}
									?>
									</br>
									<div class="form__group mb--20">
                                        
                                        <input type="password" name="newpass" id="newpass" class="form__input form__input--2"  placeholder="Nouveau mot de passe">
                                    </div>
                          </br>
                                    <div >
                                        <button type="submit" class="btn btn-info btn-xs">reinitialiser</button>
											
                                    </div>
					
                                </form>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>