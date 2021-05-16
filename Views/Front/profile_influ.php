<?php 


session_start (); 

    require_once '../../Controller/InfluC.php';
    require_once '../../Model/Influ.php';


   

    $inf1= new InfluC();
    $liste=$inf1->afficherType();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artini</title>
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
  </head>
  <body style="padding-top: 72px;">
  <?php include_once 'include/header-1.php'; ?>

    <section class="py-5">
        <?php
          if (isset($_GET['id_inf'])) {
            $influenceur=new InfluC();
            $i=$influenceur->chercheridTypeInst($_GET['id_inf']); // récupère l'influenceur à afficher de la base
            //foreach($liste as $i) {
        ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mr-lg-auto">
            <div class="card border-0 shadow mb-6 mb-lg-0">
              
              <div class="card-header bg-gray-100 py-4 border-0 text-center"><a class="d-inline-block" href="#"><img class="d-block avatar avatar-xxl p-2 mb-2" src="assets/<?php  echo $i['photo_influenceur']?>" alt=""></a>
                <h5><?php echo $i['nom_influenceur'] ?> <?php echo $i['prenom_influenceur'] ?></h5>

                

                <form method="POST">
                  <!--<button class="btn btn-primary like_button rounded-xl h-100" name="like_button" type="button" data-content_id="7" > Follow </button>-->
                  <button type="submit" class="btn btn-primary rounded-xl h-100" name="follow_button"  value="Follow" >Follow</button>
                </form>
                  <?php
                     if(isset($_POST["follow_button"]) && (!empty($_POST['follow_button']))){
                       //echo "work";
                      
                       $date = date("Y/m/d");
                       $Res1=new ClientFollowInf($_SESSION['e'],$_GET['id_inf'],$date);
                       $Res1C=new ClientFollowInfC();
                       $Res1C->ajouterUserFollowInf($Res1);

                      try { 
                        $sql = "UPDATE influenceur SET nbr_ab_inf = nbr_ab_inf + 1 WHERE id_inf=".$_GET['id_inf'] ;
                        $db = config::getConnexion();
                        $query = $db->query($sql);
                        //echo $query->rowCount() . " records UPDATED successfully <br>";
                        }
                        catch (PDOException $e) {
                            $e->getMessage();
                        }
                    }
                  }
                  ?>

                  <br>
                 

                  <script>
                    function disableBtn() {
                      document.getElementById("myBtn").disabled = true;
                    }
                  </script>

              </div>
              <div class="card-body p-4">
                <div class="media align-items-center mb-3">

                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#diploma-1"> </use>
                    </svg>
                  </div>
                  
                  <div class="media-body">
                    <p class="mb-0"><?php echo $i['id'] ?> K Visiteurs</p>
                  </div>
                </div>
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#checkmark-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body">
                    <p class="mb-0">Verifié</p>
                  </div>
                </div>
                <hr>
                <h6>Les réseaux sociaux de <?php echo $i['nom_influenceur'] ?></h6>
                <ul class="card-text text-muted">
                <li class="list-inline-item"><a class="text-muted text-hover-primary" href="<?php echo $i['fb_inf'] ?>" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a>      Page facebook </li>
                <li class="list-inline-item"><a class="text-muted text-hover-primary" href="<?php echo $i['insta_inf'] ?>" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>     Page instagram</li> 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 pl-lg-5">
            <h1 class="hero-heading mb-0">Bonjour, je suis <?php echo $i['prenom_influenceur'] ?>!</h1>
            <div class="text-block">
              <p> <span class="badge badge-secondary-light">S'est joint en <?php echo $i['id'] ?></span></p>
              <p class="text-muted"><?php echo $i['historique_influenceur'] ?> </p>
            </div>
            <div class="text-block">
              <h4 class="mb-5">Les projets à venir de <?php echo $i['prenom_influenceur'] ?></h4>
              <div class="row">
                <!-- place item-->

                <?php
                  if (isset($_GET['id'])) {
                  $newt=new TripInfC();
                  if($ti=$newt->chercheridInf($_GET['id'])){
                   
                      foreach($liste as $ti) {
                  
                ?>

                

                <div class="col-sm-6 col-lg-4 mb-30px hover-animate" data-marker-id="59c0c8e33b1527bfe2abaf92">
                  <div class="card h-100 border-0 shadow">
                    <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="<?php  echo $ti['photo_influenceur']?>" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="Up_trip_profile.php?id_voy=<?php echo $ti['id'] ?>"></a>
                      
                    </div>
                    <div class="card-body d-flex align-items-center">
                      <div class="w-100">
                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="Up_trip_profile.php?id_voy=<?php echo $ti['id'] ?>"><?php  echo $ti['id']?></a></h6>
                        <div class="d-flex card-subtitle mb-3">
                          <p class="flex-grow-1 mb-0 text-muted text-sm"><?php  echo $ti['nom_influenceur']?> </p>
                          
                        </div>
                        <p class="card-text text-muted"><span class="h4 text-primary"><?php  echo $ti['id'].' '.'DT'?></span></p>
                      </div>
                    </div>
                  </div>
                </div>

                <?php
                      }
                    }
                  
                ?>
                
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php
          }
        ?>
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