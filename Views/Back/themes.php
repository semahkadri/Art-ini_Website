<?php 
    require_once '../../Controller/TypeC.php';
    require_once '../../Model/Type.php';

    $tp1= new TypeC();
    $liste=$tp1->afficherType();

    if(isset($_GET['id'])) {
      $tp1->supprimerTypeInst($_GET['id']);
  }


?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Catégories</title>
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <?php include_once 'include/header.php'; ?>
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
                    <a href="index.php"> <i class="icon-home"></i>Accueil </a>
                </li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Graphiques </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Formulaires </a></li> -->
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
                    <h2 class="h5 no-margin-bottom">Affichage des catégories</h2>
                </div>
            </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active">Catégorie</li>
          </ul>
        </div>
        <section >
          <div class="container">
                  <div class="title"><strong>Liste des catégories</strong></div>

                  </br>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" >Chercher</button>
                      </div>
                      <input type="text" id="rech" class="form-control" placeholder="Chercher une catégorie">
                    </div>



                  </div>
                  </br>
                  
                  <div class="table-responsive"> 

                    <table class="table table-striped table-hover" id="pagination_data">
                      <thead>
                         <!-- Pagination -->
                      <script>
                        $(document).ready(function(){
                          load_data();
                          function load_data(page){
                            $.ajax({
                             url  : "pagination.php",
                             type : "POST",
                             cache: false,
                             data : {page:page},
                             success:function(data){
                              $("#pagination_data").html(data);
                             }
                            });
                          }

                          $(document).on('click', '.pagination_link', function(){
                            var page = $(this).attr("id");
                            load_data(page);
                          });

                        });
                      </script>



                        <tr>
                          <th>ID catégorie</th>
                          <th>Historique catégorie</th>
                          <th>Nom catégorie</th>
                          <th>Photo catégorie</th>
                          <th>Modifier catégorie</th>
                          <th>Supprimer catégorie</th>
                        </tr>
                      </thead>


                      <tbody id="tableau">
                        

                      </tbody>
                    </table>
                  </div>

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

                    <script type = "text/javascript">
                        $(document).ready(function(){
                            load_data();
                            function load_data(str)
                            {
                                $.ajax({
                                    url:"Theme.php",
                                    method:"post",
                                    data:{str:str},
                                    success:function(data)
                                    {
                                        $('#tableau').html(data);
                                    }
                                });
                            }
                          
                            $('#rech').keyup(function(){
                                var recherche = $(this).val();
                                if(recherche != '')
                                {
                                    load_data(recherche);
                                }
                                else
                                {
                                    load_data();
                                }
}                            );
                        });
                    </script>
              
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
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/front.js"></script>
  </body>
</html>