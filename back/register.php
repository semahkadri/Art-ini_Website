<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="Assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="Assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
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
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Art-ini</h1>
                  </div>
                  <p>Let the music play</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" action="register-check.php" method="post">
                  </br> </br></br>
                  <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                    <div class="form-group-material">
                    <label for="name" class="label-material">Nom d'utilisateur</label>
                    <?php if (isset($_GET['name'])) { ?>
                      <input id="name" type="text" name="name"  class="input-material" value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input  class="input-material" type="text" 
                      name="name" >
          <?php }?>
                      
                    </div>
                    <div class="form-group-material">
                    <label for="mail" class="label-material">Adresse E-mail      </label>
                    <?php if (isset($_GET['mail'])) { ?>
                      <input id="mail" type="email" name="mail"  class="input-material"  value="<?php echo $_GET['mail']; ?>">
          <?php }else{ ?>
               <input  class="input-material" type="text" 
                      name="mail" >
          <?php }?>
                      
                    </div>
                    <div class="form-group-material">
                    <label for="password" class="label-material">Mot de passe       </label>
                      <input id="password" type="password" name="password"  class="input-material">
                      
                    </div>
                    <div class="form-group-material">
                    <label for="re_password" class="label-material">Confirmer le mot de passe       </label>
                      <input id="re_password" type="password" name="re_password"  class="input-material">
                      
                    </div>
                    <div class="form-group-material">
                    <label for="image" class="label-material">Photo de profile </label>
                      <input id="image" type="file" name="image"  class="input-material">
                      
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Votre accord est obligatoire" class="checkbox-template">
                      <label for="register-agree">En cliquant sur S'inscrire, vous reconnaissez avoir lu et approuvé les Conditions d’utilisation et la Politique de confidentialité.</label>
                    </div>
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="S'inscrire" class="btn btn-primary">
                    </div>
                  </form><small>Vous avez déjà un compte? </small><a href="login.php" class="signup">Se connecter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <!--<p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p> -->
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/front.js"></script>
  </body>
</html>