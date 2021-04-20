<?php 
    require_once 'C:/xampp/htdocs/demo/Semah/Controller/TypeC.php';
    require_once 'C:/xampp/htdocs/demo/Semah/Model/Type.php';

    if( isset($_POST["historique_categorie"])&& isset($_POST["nom_categorie"]) && isset($_POST["photo_categorie"]) ) {
      $tp= new Type( $_POST["historique_categorie"],$_POST["nom_categorie"], $_POST["photo_categorie"]);
      $newtp= new TypeC();
      $newtp->ajouterTypeInst($tp);
      header("Location:themes.php");
    }
  ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout categorie</title>
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
    <link rel="shortcut icon" href="img/JD&Co3.png">
    <link rel="shortcut icon" href="img/mostache.png">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
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
            border: 1px solid #0a0;
        }
        
        input.form-control:invalid {
            border: 1px solid #a00;
        }
        
        input.form-control:valid+span:before {
            content: "\f00c";
            font-family: "FontAwesome";
            color: #0a0;
            font-size: 1.5em;
        }
        
        input.form-control:invalid+span:before {
            content: "\f00d";
            font-family: "FontAwesome";
            color: #a00;
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
                            <button type="submit" class="submit">Chercher</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header-->
                    <a href="index.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">ART-</strong><strong>INI</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                                    <div class="status online"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Ines Kouki</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                                    <div class="status away"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Semah Kadri</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                                    <div class="status busy"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Salim Ferhat</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                                    <div class="status offline"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Mehdi Azzaz</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                            </a>
                            <a href="#" class="dropdown-item text-center message"> <strong>Voir tous les messages <i class="fa fa-angle-right"></i></strong></a>
                        </div>
                    </div>
                    <!-- Tasks end-->

                    <!-- Log out               -->
                    <div class="list-inline-item logout">
                        <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h5">Semah Kadri</h1>
                    <p>Admin</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active">
                    <a href="index.php"> <i class="icon-home"></i>Acceuil </a>
                </li>

                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="formType.php">Ajouter une catégorie</a></li>
                        <li><a href="ajouterP.php">Ajouter un produit</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="themes.php">Catégorie</a></li>
                        <li><a href="produit.php">Produit</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html"> <i class="icon-logout"></i>Login page </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Ajouter une catégorie</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item active">Catégorie </li>
                </ul>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Horizontal Form-->
                        <div class="col-lg-6">
                            <div class="block">
                                <div class="title"><strong class="d-block">Ajouter Catégorie</strong><span class="d-block">Allez entrer votre choix du catégorie</span></div>
                                <div class="block-body">
                                    <form class="form-horizontal" method="POST">
                                                                        
                                            <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Nom</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nom_categorie" id="nom_categorie" placeholder="Categorie nom" style="width:350px" class="form-control form-control-success" required><small class="form-text">Art-ini </small>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Historique</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="historique_categorie" id="historique_categorie" placeholder="Categorie hisorique" style="width:350px" class="form-control form-control-success" required><small class="form-text">Art-ini </small>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Photo du catégorie</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <input type="file" class="btn btn-primary" name="photo_categorie" id="photo_categorie" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <input type="reset" value="Annuler" name="reset" class="btn btn-secondary">

                                                <input type="button" onclick="document.getElementById('id').style.display='block'" value="Enregistrer" name="Submit" class="btn btn-primary">

                                                <div id="id" class="modal">
                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                       <form method="POST" action="formType.php">
                                                       <strong> Succés</strong> Tu as ajouté une catégorie.
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                                            <div class="clearfix ">
                                                                <input type="submit" onclick="document.getElementById('id').style.display='none'" class="btn-primary" value="Passer">
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
                        </div>

                    </div>
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
    <script src="vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>