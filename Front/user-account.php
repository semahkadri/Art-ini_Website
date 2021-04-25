<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-ini Compte</title>
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
  
<header class="header">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand py-3" href="index.php" style="line-height: 0;"><img src="Assets/img/logoo.svg" width="138" height="31" viewBox="50 0 13800 31" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
            <path class="navbar-brand-svg-text" d="M42.875 9.47C43.985 9.47 44.955 9.69 45.785 10.13C46.615 10.57 47.255 11.19 47.705 11.99C48.165 12.78 48.395 13.695 48.395 14.735C48.395 15.765 48.165 16.68 47.705 17.48C47.255 18.28 46.61 18.9 45.77 19.34C44.94 19.78 43.975 20 42.875 20H38.93V9.47H42.875ZM42.71 17.81C43.68 17.81 44.435 17.54 44.975 17C45.515 16.46 45.785 15.705 45.785 14.735C45.785 13.765 45.515 13.01 44.975 12.47C44.435 11.93 43.68 11.66 42.71 11.66H41.495V17.81H42.71ZM53.8934 9.47V20H51.3284V9.47H53.8934ZM62.6223 20L60.4323 16.025H59.8173V20H57.2523V9.47H61.5573C62.3873 9.47 63.0923 9.615 63.6723 9.905C64.2623 10.195 64.7023 10.595 64.9923 11.105C65.2823 11.605 65.4273 12.165 65.4273 12.785C65.4273 13.485 65.2273 14.11 64.8273 14.66C64.4373 15.21 63.8573 15.6 63.0873 15.83L65.5173 20H62.6223ZM59.8173 14.21H61.4073C61.8773 14.21 62.2273 14.095 62.4573 13.865C62.6973 13.635 62.8173 13.31 62.8173 12.89C62.8173 12.48 62.6973 12.16 62.4573 11.93C62.2273 11.69 61.8773 11.57 61.4073 11.57H59.8173V14.21ZM71.1024 11.495V13.685H74.5374V15.62H71.1024V17.975H74.9874V20H68.5374V9.47H74.9874V11.495H71.1024ZM77.7177 14.72C77.7177 13.68 77.9427 12.755 78.3927 11.945C78.8427 11.125 79.4677 10.49 80.2677 10.04C81.0777 9.58 81.9927 9.35 83.0127 9.35C84.2627 9.35 85.3327 9.68 86.2227 10.34C87.1127 11 87.7077 11.9 88.0077 13.04H85.1877C84.9677 12.61 84.6677 12.285 84.2877 12.065C83.9077 11.835 83.4727 11.72 82.9827 11.72C82.1927 11.72 81.5527 11.995 81.0627 12.545C80.5727 13.085 80.3277 13.81 80.3277 14.72C80.3277 15.63 80.5727 16.36 81.0627 16.91C81.5527 17.46 82.1927 17.735 82.9827 17.735C83.4727 17.735 83.9077 17.62 84.2877 17.39C84.6677 17.16 84.9677 16.83 85.1877 16.4H88.0077C87.7077 17.54 87.1127 18.44 86.2227 19.1C85.3327 19.75 84.2627 20.075 83.0127 20.075C81.9927 20.075 81.0777 19.85 80.2677 19.4C79.4677 18.94 78.8427 18.305 78.3927 17.495C77.9427 16.685 77.7177 15.76 77.7177 14.72ZM98.6534 9.47V11.495H95.8634V20H93.2984V11.495H90.5084V9.47H98.6534ZM106.421 20.105C105.431 20.105 104.521 19.875 103.691 19.415C102.871 18.955 102.216 18.315 101.726 17.495C101.246 16.665 101.006 15.735 101.006 14.705C101.006 13.675 101.246 12.75 101.726 11.93C102.216 11.11 102.871 10.47 103.691 10.01C104.521 9.55 105.431 9.32 106.421 9.32C107.411 9.32 108.316 9.55 109.136 10.01C109.966 10.47 110.616 11.11 111.086 11.93C111.566 12.75 111.806 13.675 111.806 14.705C111.806 15.735 111.566 16.665 111.086 17.495C110.606 18.315 109.956 18.955 109.136 19.415C108.316 19.875 107.411 20.105 106.421 20.105ZM106.421 17.735C107.261 17.735 107.931 17.46 108.431 16.91C108.941 16.36 109.196 15.625 109.196 14.705C109.196 13.785 108.941 13.05 108.431 12.5C107.931 11.95 107.261 11.675 106.421 11.675C105.571 11.675 104.891 11.95 104.381 12.5C103.881 13.05 103.631 13.785 103.631 14.705C103.631 15.625 103.881 16.36 104.381 16.91C104.891 17.46 105.571 17.735 106.421 17.735ZM120.103 20L117.913 16.025H117.298V20H114.733V9.47H119.038C119.868 9.47 120.573 9.615 121.153 9.905C121.743 10.195 122.183 10.595 122.473 11.105C122.763 11.605 122.908 12.165 122.908 12.785C122.908 13.485 122.708 14.11 122.308 14.66C121.918 15.21 121.338 15.6 120.568 15.83L122.998 20H120.103ZM117.298 14.21H118.888C119.358 14.21 119.708 14.095 119.938 13.865C120.178 13.635 120.298 13.31 120.298 12.89C120.298 12.48 120.178 12.16 119.938 11.93C119.708 11.69 119.358 11.57 118.888 11.57H117.298V14.21ZM135.048 9.47L131.403 16.52V20H128.838V16.52L125.193 9.47H128.103L130.143 13.865L132.168 9.47H135.048Z"
                fill="black" />
            <path class="text-primary" d="M15.5 0.96875C12.626 0.96875 9.81653 1.82099 7.42688 3.41771C5.03722 5.01442 3.17472 7.28389 2.07488 9.93913C0.975046 12.5944 0.687279 15.5161 1.24797 18.3349C1.80866 21.1537 3.19263 23.7429 5.22486 25.7751C7.25709 27.8074 9.84631 29.1913 12.6651 29.752C15.4839 30.3127 18.4056 30.025 21.0609 28.9251C23.7161 27.8253 25.9856 25.9628 27.5823 23.5731C29.179 21.1835 30.0313 18.374 30.0313 15.5C30.0313 11.6461 28.5003 7.94999 25.7752 5.22485C23.05 2.49972 19.3539 0.96875 15.5 0.96875V0.96875ZM8.71876 22.2812L11.7703 13.1266L17.8734 19.2297L8.71876 22.2812ZM19.2297 17.8734L13.1266 11.7703L22.2813 8.71875L19.2297 17.8734Z"
                fill="#4E66F8" />
            </svg>
        </a>
            <form class="form-inline d-none d-sm-flex" action="#" id="search">
              <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3"> 
                <label class="label-absolute" for="search_search"><i class="fa fa-search"></i><span class="sr-only">Que cherchez-vous?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="search_search" placeholder="Chercher" aria-label="search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas"></i></button>
              </div>
            </form>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-4 mb-2 d-sm-none" action="#" id="searchcollapsed">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label class="label-absolute" for="searchcollapsed_search"><i class="fa fa-search"></i><span class="sr-only">Que cherchez-vous?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="searchcollapsed_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="index-1.php">Accueil</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Produits</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Evénements</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Promotions</a></li>
              <li class="nav-item dropdown ml-lg-3"><a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar"  src="Assets/img/<?=$_SESSION['image']; ?>" alt="user"></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdownMenuLink">
                <a class="dropdown-item" href="user-account.php"><i class="fa fa-user"></i> Mes informations</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt mr-2 text-muted"></i> Se déconnecter</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>

    <section class="py-5">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb #{breadcrumbClass}">
          <li class="breadcrumb-item"><a href="index-1.php">Accueil</a></li>
          <li class="breadcrumb-item active">Votre compte   </li>
        </ol>
        <h1 class="hero-heading mb-0">Votre compte</h1>
        <p class="text-muted mb-5">Gérez votre compte et vos paramètres ici.</p>
        <div class="row">
          <div class="col-6 col-md-4 mb-30px">
            <div class="card h-100 border-0 shadow hover-animate">
              <div class="card-body">
                <div class="icon-rounded bg-secondary-light mb-3">
                  <svg class="svg-icon text-secondary w-2rem h-2rem">
                    <use xlink:href="#identity-1"> </use>
                  </svg>
                </div>
                <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link" href="user-personal.php">Informations personnelles</a></h5>
                <p class="text-muted card-text text-sm">Fournissez des informations personnelles et comment nous pouvons vous joindre.</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-30px">
            <div class="card h-100 border-0 shadow hover-animate">
              <div class="card-body">
                <div class="icon-rounded bg-secondary-light mb-3">
                  <svg class="svg-icon text-secondary w-2rem h-2rem">
                    <use xlink:href="#password-1"> </use>
                  </svg>
                </div>
                <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link" href="user-security.php">Connexion &amp; securité</a></h5>
                <p class="text-muted card-text text-sm">Mettez à jour votre mot de passe et sécurisez votre compte</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-30px">
            <div class="card h-100 border-0 shadow hover-animate">
              <div class="card-body">
                <div class="icon-rounded bg-secondary-light mb-3">
                  <svg class="svg-icon text-secondary w-2rem h-2rem">
                    <use xlink:href="#pay-by-card-1"> </use>
                  </svg>
                </div>
                <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link" href="user-carte.php">Paiments &amp; Carte de fidélité</a></h5>
                <p class="text-muted card-text text-sm">Examiner vos anciennes commandes et vos points de fidélités.</p>
              </div>
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