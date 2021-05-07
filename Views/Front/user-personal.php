<?php 
session_start();
include_once "../../Controller/clientC.php";
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

  $clientC =  new clientC();
  function verif_alpha($str){
    // On cherche tt les caractères autre que [A-Za-z] ou [0-9]
    preg_match("/([^A-Za-z\s])/",$str,$result);
    // si on trouve des caractère autre que A-Za-z ou 0-9
    if(!empty($result)){
      return false;
    }
    return true;
  }
  function verif_Num($str){
    // On cherche tt les caractères autre que [A-Za-z] ou [0-9]
    preg_match("/([^0-9\s])/",$str,$result);
    // si on trouve des caractère autre que A-Za-z ou 0-9
    if(!empty($result)){
      return false;
    }
    return true;
  }

  if (isset($_POST['name']) && isset($_POST['birthday']) && isset($_POST['email'])&& isset($_POST['phone'])) {
     
    
   
    $today= date("Y-m-d");
    $diff= date_diff (date_create($birthday),date_create($today));
      $birthday= $_POST['birthday'];
      $email= $_POST['email'];
      $name =$_POST['name'];
      $phone= $_POST['phone'];
      if(strpos($email,"@")==false || strpos($email,".")==false)
      {
        header("Location: user-personal.php?error=Adresse e-mail non valide");
          exit();
      }/*else if($diff<18)
      {
      header("Location: user-personal.php?error=Vous devez avoir au moins 18ans");
        exit();
      }*/
      else if(!verif_Num($phone))
	{
	header("Location: user-personal.php?error=Votre numéro doit contenir seulement des chiffres");
	exit();

	}
  else if(!verif_alpha($name))
	{
	header("Location: user-personal.php?error=Caractères invalids");
	exit();

	}
   else {

    header("Location: user-personal.php?success=Modification faite avec succès");
    $clientC->modifierClient1($_SESSION['id'],$name,$phone,$email,$birthday);

      #header('Location:user-personal.php');
   }
      
  }

  if(isset($_POST['adress']))
  {
    $adress= $_POST['adress'];
    if(!verif_alpha($adress))
	{
	  header("Location: user-personal.php?error=Caractères invalids");
	  exit();

	}
  else
  {
    header("Location: user-personal.php?success=Modification faite avec succès");
    $clientC->modifierClient2($_SESSION['id'],$adress);

   
  }
    
  }
    
  
 




 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-Ini info</title>
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
          <li class="breadcrumb-item active">Informations personnelles   </li>
        </ol>
        <h1 class="hero-heading mb-0">Informations personnelles</h1>
        <p class="text-muted mb-5">Gérez vos informations personnelles et vos paramètres ici.</p>
        <div class="row">
          <div class="col-lg-7">
            <div class="text-block"> 
              <div class="row mb-3">
                <div class="col-sm-9">
                  <h5>Détails personnels</h5>
                </div>
                <div class="col-sm-3 text-right">
                  <button class="btn btn-link pl-0 text-primary collapsed" type="button" data-toggle="collapse" data-target="#personalDetails" aria-expanded="false" aria-controls="personalDetails">mettre à jour</button>
                </div>
              </div>
              <p class="text-sm text-muted"><i class="fa fa-id-card fa-fw mr-2"></i><?php echo $_SESSION['name']; ?> <br><i class="fa fa-birthday-cake fa-fw mr-2"></i><?php echo $_SESSION['birthday']; ?><br><i class="fa fa-envelope-open fa-fw mr-2"></i><?php echo $_SESSION['email']; ?>  <span class="mx-2"> | </span>  <i class="fa fa-phone fa-fw mr-2"></i></i><?php echo $_SESSION['phone']; ?></p>
              <div class="collapse" id="personalDetails">
                <form action="" method="POST">

                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

                  <div class="row pt-4">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="name">Nom et Prénom</label>
                      <?php if (isset($_GET['name'])) { ?>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Nom & Prénom"  value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
            <?php }?>
               <input  class="form-control" type="text" 
                      name="name" 
                      placeholder="Nom et prénom">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="birthday">Date de naissance</label>
                      <?php if (isset($_GET['birthday'])) { ?>
                      <input class="form-control" type="date" name="birthday" id="birthday" value="<?php echo $_GET['birthday']; ?>" >
                <?php }else{ ?>
               <input  class="form-control" type="date" 
                      name="birthday" 
                      >
          <?php }?>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="email">Adresse e-mail</label>
                      <?php if (isset($_GET['email'])) { ?>
                      <input class="form-control" type="email" name="email" id="email" placeholder="nom.prenom@gmail.com" value="<?php echo $_GET['email']; ?>">
                <?php }else{ ?>
               <input  class="form-control" type="email" 
                      name="email" 
                      placeholder="nom.prénom@address.com">
          <?php }?>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="phone">Numéro de téléphone</label>
                      <?php if (isset($_GET['phone'])) { ?>
                      <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $_GET['phone']; ?>">
                <?php }else{ ?>
               <input  class="form-control" type="phone" 
                      name="phone" 
                      >
          <?php }?>
                    </div>
                  </div>
                  <button class="btn btn-outline-primary mb-4" type="submit">enregistrer vos données personnelles</button>
                </form>
              </div>
            </div>
            <div class="text-block"> 
              <div class="row mb-3">
                <div class="col-sm-9">
                  <h5>Addresse</h5>
                </div>
                <div class="col-sm-3 text-right">
                  <button class="btn btn-link pl-0 text-primary collapsed" type="button" data-toggle="collapse" data-target="#address" aria-expanded="false" aria-controls="address">Changer</button>
                </div>
              </div>
              <div class="media text-sm text-muted"> <i class="fa fa-address-book fa-fw mr-2"></i>
                <div class="media-body mt-n1"><?php echo $_SESSION['adress']; ?></div>
              </div> 
              <div class="collapse" id="address">
                <form action="" method="POST">
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                  <div class="row pt-4">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="adress">Adresse</label>
                      <?php if (isset($_GET['adress'])) { ?>
                      <input class="form-control" type="text" name="adress" id="adress" placeholder="Adresse" value="<?php echo $_GET['adress']; ?>">
                <?php }else{ ?>
               <input  class="form-control" type="adress" 
                      name="adress" placeholder="Adresse"
                      >
          <?php }?>
                    </div>

                    
                   
                  </div>
                  <button class="btn btn-outline-primary">Sauvegarder votre addresse</button>
                </form>
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