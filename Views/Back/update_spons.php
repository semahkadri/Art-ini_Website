<?php 
    require_once '../../Controller/Type2CC.php';
    require_once '../../Model/Type2.php';

    session_start();
    if(isset($_POST["nom_sponsor"]) && isset($_POST["historique_sponsor"]) && isset($_POST["photo_sponsor"])) {
      $tp= new Type($_POST["historique_sponsor"],$_POST["nom_sponsor"],$_POST["photo_sponsor"]);
      $newtp= new TypeC();
      if ($newtp->modifierTypeInst($tp,$_POST['id'])) {
        var_dump($_POST['id']);
      }
      header("Location:tables_spons.php");
    }
    
?>


<!DOCTYPE html>
<html>
  <head> 
  <script src="assets/javascript1.js">    
        </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier catégorie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/mostache.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <style>

          .form-control {
           height: calc(2.4rem + 2px);
           border: 1px solid #444951;
           background: transparent;
           border-radius: 0;
           color: #979a9f;
           padding: 0.45rem 0.75rem;
          }

          input.form-control:valid {
            border:1px solid #0a0;
          }
          input.form-control:invalid {
            border:1px solid #a00;
          }
          input.form-control:valid + span:before  {
            content: "\f00c";
            font-family: "FontAwesome";
            color:#0a0;
            font-size: 1.5em;
          }	
          input.form-control:invalid + span:before  {
            content: "\f00d";
            font-family: "FontAwesome";
            color:#a00;
            font-size: 1.5em;
          }
        </style>

  </head>
  <body>
  <?php include_once 'include/header.php'; ?>

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"> <img src="Assets/img/<?=$_SESSION['image']; ?>" alt="..." class="img-fluid rounded-circle" ></div>
                <div class="title">
                    <h1 class="h5"> <?php echo $_SESSION['name']; ?> </h1>
                    <p>Admin</p>
                </div>
            </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="index.php"> <i class="icon-home"></i>Acceuil </a></li>
          
          <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Informations </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="formType.php">Ajouter une catégorie</a></li>
                        <li><a href="ajouterP.php">Ajouter un produit</a></li>
                        <li><a href="ajouter_carte.php">Ajouter une carte de fidélité</a></li>
                        <li><a href="forms_inf.php">Ajouter influenceur</a></li>
                        <li><a href="forms_spons.php">Ajouter Sponsors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="themes.php">Categories</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="afficher_client.php">Client</a></li>
                        <li><a href="afficher_carte.php">Carte Fidélité</a></li>
                        <li><a href="tables_inf.php">influenceur</a></li>
                        <li><a href="tables_spons.php">Sponsors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.php"> <i class="icon-logout"></i>Page de connexion </a>
                </li>
            </ul>
        </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Affichage Catégorie</h2>
                </div>
            </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active">Catégorie  </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container">


            <?php
              if (isset($_GET['id'])) {
                $tp2=new TypeC();
                $i=$tp2->chercheridTypeInst($_GET['id']); 
            ?>
              
              <!-- Horizontal Form-->
                <div class="block">
                  <div class="title"><strong class="d-block">Modifier catégorie</strong><span class="d-block">Modifier la catégorie de ton produit</span></div>
                  <div class="block-body">
                    <form name ="f" class="form-horizontal" method="POST">

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nom catétgrie</label>
                          <div class="col-sm-9">
                            <input type="text" name="nom_sponsor" id="nom_sponsor" minlength="4" value="<?= $i['nom_sponsor'] ?>" class="form-control form-control-success" ><small class="form-text">Set free your imagination !</small>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Historique du catégorie</label>
                          <div class="col-sm-9">
                            <input type="text" name="historique_sponsor" id="historique_sponsor" minlength="10" value="<?= $i['historique_sponsor'] ?>" class="form-control form-control-success" ><small class="form-text">Allez racontez nous l'historique!</small>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Photo du catégorie</label>
                          <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <img src="assets/<?php echo $i['photo_sponsor'] ?>" width="100" height="100">
                                <input type="file" class="btn btn-primary" name="photo_sponsor" value="<?php echo $i["photo_sponsor"] ?>"  id="photo_sponsor" ></input>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>


                        <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">

                          <input type="button" onclick="fonction();document.getElementById('id').style.display='block'" value="Save" name="Submit" class="btn btn-primary"> 
                          <input type="hidden" value=<?PHP echo $i['id']; ?> name="id">

                          <div id="id" class="modal">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <form method="POST" action="influ.php">
                                <strong>C'est bien !</strong> Tu as modifier la catégorie <?PHP echo $i['nom_sponsor']?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="clearfix ">
                                  <input type="submit" onclick="document.getElementById('id').style.display='none'" class="btn-primary" value="OK">
                                </div>
                              </form>
                            </div>
                          </div>

                          <script>
                          var modal = document.getElementById('id')
                          window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                          }
                          </script>


                          </div>
                        </div>
                    </form>
                  </div>
                </div>

              <?php }
                /*else { // Si l'utilisateur essaye d'accéder directement à la page sans passer par showAlbums
                  header("Location:themes.php");
                }*/
              ?>
              
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Design by <a href="index.php">Art-ini</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>