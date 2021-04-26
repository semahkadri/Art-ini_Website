<?php 
    require_once 'C:/xampp/htdocs/mehdi/Controller/TypeC.php';
    require_once 'C:/xampp/htdocs/mehdi/Model/Type.php';

    
    if(isset($_POST["desc_eve"]) && isset($_POST["nom"]) && isset($_POST["directeur"]) && isset($_POST["photo"])) {
      $tp= new Type($_POST["desc_eve"],$_POST["nom"],$_POST["directeur"],$_POST["photo"]);
      $newtp= new TypeC();
      if ($newtp->modifierTypeInst($tp,$_POST['id'])) {
        var_dump($_POST['id']);
      }
      header("Location:tables_inf.php");
    }
    
?>


<!DOCTYPE html>
<html>
  <head> 
  <script src="javascript.js">    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier catégorie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/mostache.png">
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
  <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">ART-</strong><strong>INI</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end-->
            
            <!-- Log out               -->
            <div class="list-inline-item logout"><a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-5.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h5">Mehdi Azzaz</h1>
                    <p>Admin</p>
                </div>
            </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="index.php"> <i class="icon-home"></i>Acceuil </a></li>
          
          <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="forms_inf.php">Ajouter evenement</a></li>
                        <li><a href="forms_spons.php">Ajouter promotion</a></li>
                    </ul>
                </li>

           <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="tables_inf.php">evenement</a></li>
                        <li><a href="tables_spons.php">promotion</a></li>
                    </ul>
                </li>
                <li>

          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Affichage evenement</h2>
                </div>
            </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active">evenement  </li>
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
                  <div class="title"><strong class="d-block">Modifier evenement</strong></div>
                  <div class="block-body">
                    <form name ="f" class="form-horizontal" method="POST">

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nom evenement</label>
                          <div class="col-sm-9">
                            <input type="text" name="nom" id="nom" minlength="4" value="<?= $i['nom'] ?>" class="form-control form-control-success" >
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">direcetur evenement</label>
                          <div class="col-sm-9">
                            <input type="text" name="directeur" id="directeur" minlength="4" value="<?= $i['directeur'] ?>" class="form-control form-control-success" >
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">description d'evenement</label>
                          <div class="col-sm-9">
                            <input type="text" name="desc_eve" id="desc_eve" minlength="10" value="<?= $i['desc_eve'] ?>" class="form-control form-control-success" >
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Photo d'evenement</label>
                          <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <img src="<?php echo $i['photo'] ?>" width="100" height="100">
                                <input type="file" class="btn btn-primary" name="photo" value="<?php echo $i["photo"] ?>"  id="photo" ></input>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>


                        <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">

                          <input type="button" onclick=" fonction(); document.getElementById('id').style.display='block'" value="Save" name="Submit" class="btn btn-primary"> 
                          <input type="hidden" value=<?PHP echo $i['id']; ?> name="id">

                          <div id="id" class="modal">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <form method="POST" action="influ.php">
                                <strong>C'est bien !</strong> Tu as modifier la catégorie <?PHP echo $i['nom']?>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>