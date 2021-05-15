<?php 
session_start();

require_once '../../Controller/TypeC.php';
  require_once '../../Model/Type.php';

  $tp1= new TypeC();
  $listetp=$tp1->afficherType();


 ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-ini</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="Assets/vendor/nouislider/nouislider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="Assets/css/custom.css">
    <link rel="shortcut icon" href="Assets/img/mostache.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body style="padding-top: 0;">

<?php include_once 'include/header.php'; ?>
    <!-- Slider main container-->
    <div class="swiper-container home-slider multi-slider">
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
            <!-- Slides-->
            <div class="swiper-slide bg-cover dark-overlay" style="background-image: url('Assets/img/photo/photo-1493976040374-85c8e12f0c0e.jpg');">
                <div class="container h-100">
                    <div class="d-flex h-100 text-white overlay-content align-items-center" data-swiper-parallax="-500">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="subtitle text-white letter-spacing-3 mb-3 font-weight-light">Art &amp; Culture</p>
                                    <h2 class="display-3 font-weight-bold mb-3" style="line-height: 1">Art-ini</h2>
                                    <p class="mb-5">Profitez du choix du N°1 chez nous avec 200 marques et 400 articles en stock au meilleur prix.</p><a class="btn btn-outline-light d-none d-sm-inline-block" href="#">Découvrir de plus<i class="fa fa-angle-right ml-2"></i></a>
                                </div>
                                <div class="col-lg-6 pl-lg-5 my-3 my-md-5 my-lg-0">
                                    <a class="media text-reset text-decoration-none hover-animate mb-2 mb-md-5" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#open-box-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Evenements</h5>
                                            <div class="badge badge-light">dés 20€</div>
                                        </div>
                                    </a>
                                    <a class="media text-reset text-decoration-none hover-animate mb-2 mb-md-5" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#label-tag-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Promotions</h5>
                                            <p>En savoir plus</p>
                                        </div>
                                    </a>
                                    <a class="media text-reset text-decoration-none hover-animate" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#image-gallery-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Gallerie &amp; Historique</h5>
                                            <p>En savoir plus</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-cover dark-overlay" style="background-image: url('Assets/img/photo/photo-1558114965-eeb97aa84c3b.jpg');">
                <div class="container h-100">
                    <div class="d-flex h-100 text-white overlay-content align-items-center" data-swiper-parallax="-500">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="display-3 font-weight-bold mb-5" style="line-height: 1">Influenceurs</h2>
                                    <p class="mb-5">Chez Art-ini vous pouvez accéder à des évenements organisés par de vos Influenceurs préférés ou même des célebres chanteurs.Bénéficer encore des plusieurs offres.</p>
                                </div>
                            </div><a class="d-md-none btn btn-outline-light" href="#">Exploré</a>
                            <div class="row">
                                <!-- place item-->
                                <div class="d-none d-md-block col-md-4 mb-5" data-marker-id="">
                                    <div class="card h-100 border-0 shadow-lg bg-dark hover-animate">
                                        <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/fez.jpg" alt="Fez" />
                                            <a class="tile-link" href="#"></a>
                                            <div class="card-img-overlay-top text-right">
                                                <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                                    <svg class="svg-icon text-white">
                              <use xlink:href="#heart-1"> </use>
                            </svg></a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex align-items-center">
                                            <div class="w-100">
                                                <h6 class="card-title"><a class="text-decoration-none text-white" href="#">Khormo</a></h6>
                                                <div class="d-flex card-subtitle">
                                                    
                                             
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- place item-->
                                <div class="d-none d-md-block col-md-4 mb-5" data-marker-id="">
                                    <div class="card h-100 border-0 shadow-lg bg-dark hover-animate">
                                        <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/marrakech.jpg" alt="Marrakech" />
                                            <a class="tile-link" href="#"></a>
                                            <div class="card-img-overlay-top text-right">
                                                <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                                    <svg class="svg-icon text-white">
                              <use xlink:href="#heart-1"> </use>
                            </svg></a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex align-items-center">
                                            <div class="w-100">
                                                <h6 class="card-title"><a class="text-decoration-none text-white" href="#">Sami</a></h6>
                                                <div class="d-flex card-subtitle">
                                                 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- place item-->
                                <div class="d-none d-md-block col-md-4 mb-5" data-marker-id="">
                                    <div class="card h-100 border-0 shadow-lg bg-dark hover-animate">
                                        <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/essaouira.jpg" alt="Essaouira" />
                                            <a class="tile-link" href="#"></a>
                                            <div class="card-img-overlay-top text-right">
                                                <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                                    <svg class="svg-icon text-white">
                              <use xlink:href="#heart-1"> </use>
                            </svg></a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex align-items-center">
                                            <div class="w-100">
                                                <h6 class="card-title"><a class="text-decoration-none text-white" href="#">Beki</a></h6>
                                                <div class="d-flex card-subtitle">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-cover dark-overlay bg-cover-right" style="background-image: url('Assets/img/photo/photo-1526392060635-9d6019884377.jpg');">
                <div class="container h-100">
                    <div class="d-flex h-100 text-white overlay-content align-items-center" data-swiper-parallax="-500">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="subtitle text-white letter-spacing-3 mb-3 font-weight-light">Nuance entre Art & Culture</p>
                                    <h2 class="display-3 font-weight-bold mb-3" style="line-height: 1">Art-ini</h2>
                                    <p class="mb-5">Bienvenue sur Art-ini, le site pour les musiciens.</p>
                                </div>
                            </div>
                            <div class="row mt-3 mt-md-5">
                                <div class="col-md-4 mb-2 mb-md-0">
                                    <a class="media text-reset text-decoration-none hover-animate" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#open-box-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Evenements</h5>
                                            <div class="badge badge-light">dés 20€</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 mb-2 mb-md-0">
                                    <a class="media text-reset text-decoration-none hover-animate" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#label-tag-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Promotions</h5>
                                            <p>En savoir plus</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 mb-2 mb-md-0">
                                    <a class="media text-reset text-decoration-none hover-animate" href="#">
                                        <div class="icon-rounded bg-white opacity-7 mr-4">
                                            <svg class="svg-icon text-dark w-2rem h-2rem">
                          <use xlink:href="#image-gallery-1"> </use>
                        </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5>Gallerie &amp; Historique</h5>
                                            <p>En savoir plus</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-nav d-none d-lg-block">
            <div class="swiper-button-prev" id="homePrev"></div>
            <div class="swiper-button-next" id="homeNext"></div>
        </div>
    </div>
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 px-5">
                    <p class="advantage-number">1</p>
                    <div class="pl-lg-5">
                        <h6 class="text-uppercase">Vivre</h6>
                        <p class="text-muted text-sm mb-5 mb-lg-0">Vivez la musique traditionnelle , classique , oxidentale et meme la tunisienne.</p>
                    </div>
                </div>
                <div class="col-lg-4 px-5">
                    <p class="advantage-number">2</p>
                    <div class="pl-lg-5">
                        <h6 class="text-uppercase">Découvrir</h6>
                        <p class="text-muted text-sm mb-5 mb-lg-0">Autre traditions en naver sur notre site.</p>
                    </div>
                </div>
                <div class="col-lg-4 px-5">
                    <p class="advantage-number">3</p>
                    <div class="pl-lg-5">
                        <h6 class="text-uppercase">Explorer</h6>
                        <p class="text-muted text-sm mb-5 mb-lg-0">Vous avez l'opportunité de rencontrer ton influenceur préféré.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Places-->
 
    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-primary">Venez nous rendre visite</p>
                    <h2>Catégories</h2>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a class="text-muted text-sm" href="info.php">
                  Voir tous les guides<i class="fas fa-angle-double-right ml-2"></i></a></div>
            </div>
            <div class="swiper-container guides-slider mx-n2 pt-3">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper pb-5">
                    <!-- Slides-->
                    <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0">
                            <a class="tile-link" href="info.php"></a><img class="bg-image" src="Assets/timbale.jpg" alt="Card image">
                            <div class="card-body overlay-content">
                                <h6 class="card-title text-shadow text-uppercase">les instruments de combinaison</h6>
                                <p class="card-text text-sm">Art-ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0">
                            <a class="tile-link" href="info.php"></a><img class="bg-image" src="Assets/wind.jpg" alt="Card image">
                            <div class="card-body overlay-content">
                                <h6 class="card-title text-shadow text-uppercase">les instruments à vent</h6>
                                <p class="card-text text-sm">Art-ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0">
                            <a class="tile-link" href="info.php"></a><img class="bg-image" src="Assets/les percussions.jpg" alt="Card image">
                            <div class="card-body overlay-content">
                                <h6 class="card-title text-shadow text-uppercase">les instruments à percussions</h6>
                                <p class="card-text text-sm">Art-ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <div class="card card-poster gradient-overlay hover-animate mb-4 mb-lg-0">
                            <a class="tile-link" href="info.php"></a><img class="bg-image" src="Assets/corde.jpg" alt="Card image">
                            <div class="card-body overlay-content">
                                <h6 class="card-title text-shadow text-uppercase">les instruments à cordes</h6>
                                <p class="card-text text-sm">Art-ini</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-md-none"> </div>
            </div>
        </div>
    </section>
    <section class="pt-6">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-8">
                    <h2>VOICI NOS SPONSORS </h2>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/kathmandu.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Jumia</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/medellin.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2"> Tunisi Telecome</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/bangkok.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Delice</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/kyoto.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Sony</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/los-angeles.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Fyzer</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/london.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Pepsi</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/madrid.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">CitiBank</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/havana.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Visa</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xl-3 px-0 d-none d-lg-block d-xl-none">
                    <div class="d-flex align-items-center dark-overlay hover-scale-bg-image" style="min-height: 400px;"><img class="bg-image" src="Assets/img/photo/barcelona.jpg" alt="">
                        <div class="p-3 p-sm-5 text-white z-index-20">
                            <h4 class="h2">Master Card</h4>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary">Dépêchez-vous, ceux-ci expirent bientôt. </p>
                    <h2>Promotions à ne pas rater</h2>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a class="text-muted text-sm" href="promo.php">
                Voir toutes les offres<i class="fas fa-angle-double-right ml-2"></i></a></div>
            </div>
            <!-- Slider main container-->
            <div class="swiper-container swiper-container-mx-negative swiper-init pt-3" data-swiper="{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper pb-5">
                    <!-- Slides-->
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e33b1527bfe2abaf92">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1484154218962-a197022b5858.jpg" alt="Modern, Well-Appointed Room" />
                                    <a class="tile-link" href="#"></a>
                                   
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title">
                                            <a class="text-decoration-none text-dark" href="#"></a>Tomorrowland</h6>
                                        
                                        <p class="card-text text-muted"><span class="h4 text-primary">-20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e322f3375db4d89128">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Cute Quirky Garden apt, NYC adjacent" />
                                    <a class="tile-link" href="#"></a>
                                   
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="#">Tomorrowland
Full Moon Party</a></h6>
                                       
                                        <p class="card-text text-muted"><span class="h4 text-primary">-30%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e3a31e62979bf147c9">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Modern Apt - Vibrant Neighborhood!" />
                                    <a class="tile-link" href="#"></a>
                                    
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="#">Glastonbury</a></h6>
                                        
                                        <p class="card-text text-muted"><span class="h4 text-primary">-75%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e3503eb77d487e8082">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1494526585095-c41746248156.jpg" alt="Sunny Private Studio-Apartment" />
                                    <a class="tile-link" href="#"></a>
                                    
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="#">Reggae Sumfest</a></h6>
                                       
                                        <p class="card-text text-muted"><span class="h4 text-primary">-23%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e39aa2eed0626e485d">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="Mid-Century Modern Garden Paradise" />
                                    <a class="tile-link" href="#"></a>
                                   
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="#">RFLX</a></h6>
                                       
                                        <p class="card-text text-muted"><span class="h4 text-primary">-15%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- place item-->
                        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e39aa2edasd626e485d">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="Assets/img/photo/photo-1488805990569-3c9e1d76d51c.jpg" alt="Brooklyn Life, Easy to Manhattan" />
                                    <a class="tile-link" href="#"></a>
                                   
                                    <div class="card-img-overlay-top text-right">
                                        <a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                                            <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="#">Saint Louis Jazz Festival</a></h6>
                                       
                                        <p class="card-text text-muted"><span class="h4 text-primary">-23%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination-->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Instagram-->
    <section>
        <div class="container-fluid px-0">
            <div class="swiper-container instagram-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-1.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-2.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-3.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-4.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-5.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-6.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-7.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-8.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-9.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-10.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-11.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-12.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-13.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-14.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-10.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-11.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-12.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-13.jpg" alt=" "></a>
                    </div>
                    <div class="swiper-slide overflow-hidden">
                        <a href="#"><img class="img-fluid hover-scale" src="Assets/img/instagram/instagram-14.jpg" alt=" "></a>
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
    <script>
        var basePath = ''
    </script>
    <!-- Main Theme JS file    -->
    <script src="Assets/js/theme.js"></script>
</body>

</html>
