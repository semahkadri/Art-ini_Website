<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Art-Ini</title>
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
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
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
                <div class="avatar"> <img src="" alt="..." class="img-fluid rounded-circle" ></div>
                <div class="title">
                    <h1 class="h5"> Ines Kouki </h1>
                    <p>Admin</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Menu Principal</span>
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
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="categorie.php">Categories</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="afficher_client.php">Clients</a></li>
                        <li><a href="afficher_carte.php">Carte Fidélité</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.php"> <i class="icon-logout"></i>Page de connexion </a>
                </li>
            </ul>
           
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Tableau de bord</h2>
                </div>
            </div>
            <section class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-user-1"></i></div><strong>Nouveaux Clients</strong>
                                    </div>
                                    <div class="number dashtext-1">27</div>
                                </div>
                                <div class="progress progress-template">
                                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-contract"></i></div><strong>Nouveaux évènements</strong>
                                    </div>
                                    <div class="number dashtext-2">375</div>
                                </div>
                                <div class="progress progress-template">
                                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Nouvelles factures</strong>
                                    </div>
                                    <div class="number dashtext-3">140</div>
                                </div>
                                <div class="progress progress-template">
                                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Tous les projets</strong>
                                    </div>
                                    <div class="number dashtext-4">41</div>
                                </div>
                                <div class="progress progress-template">
                                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="bar-chart block no-margin-bottom">
                                <canvas id="barChartExample1"></canvas>
                            </div>
                            <div class="bar-chart block">
                                <canvas id="barChartExample2"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="line-cahrt block">
                                <canvas id="lineCahrt"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding-bottom">
                
            </section>
            
            <section class="margin-bottom-sm">
                <div class="container-fluid">
                    <div class="row d-flex align-items-stretch">
                        <div class="col-lg-4">
                            <div class="stats-with-chart-1 block">
                                <div class="title"> <strong class="d-block">Différence de ventes</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                                <div class="row d-flex align-items-end justify-content-between">
                                    <div class="col-5">
                                        <div class="text"><strong class="d-block dashtext-3">740TND</strong><span class="d-block">Mai 2020</span><small class="d-block">320 ventes</small></div>
                                    </div>
                                    <div class="col-7">
                                        <div class="bar-chart chart">
                                            <canvas id="salesBarChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats-with-chart-1 block">
                                <div class="title"> <strong class="d-block">Statistiques de visites</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                                <div class="row d-flex align-items-end justify-content-between">
                                    <div class="col-4">
                                        <div class="text"><strong class="d-block dashtext-1">457TND</strong><span class="d-block">Mai 2020</span><small class="d-block">210 ventes</small></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="bar-chart chart">
                                            <canvas id="visitPieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats-with-chart-1 block">
                                <div class="title"> <strong class="d-block">Activités de ventes</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                                <div class="row d-flex align-items-end justify-content-between">
                                    <div class="col-5">
                                        <div class="text"><strong class="d-block dashtext-2">80%</strong><span class="d-block">Mai 2020</span><small class="d-block">+35 ventes</small></div>
                                    </div>
                                    <div class="col-7">
                                        <div class="bar-chart chart">
                                            <canvas id="salesBarChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checklist-block block">
                                <div class="title"><strong>Liste de tâches à faire</strong></div>
                                <div class="checklist">
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-1" name="input-1" class="checkbox-template">
                                        <label for="input-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-2" name="input-2" checked class="checkbox-template">
                                        <label for="input-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                                        <label for="input-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                                        <label for="input-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                                        <label for="input-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                                        <label for="input-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="messages-block block">
                                <div class="title"><strong>Nouveaux messages</strong></div>
                                <div class="messages">
                                    <a href="#" class="message d-flex align-items-center">
                                        <div class="profile"><img src="Assets/img/avatar-3.jpg" alt="..." class="img-fluid">
                                            <div class="status online"></div>
                                        </div>
                                        <div class="content"> <strong class="d-block">Ines Kouki</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                                    </a>
                                    <a href="#" class="message d-flex align-items-center">
                                        <div class="profile"><img src="Assets/img/avatar-2.jpg" alt="..." class="img-fluid">
                                            <div class="status away"></div>
                                        </div>
                                        <div class="content"> <strong class="d-block">Semah Kadri</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                                    </a>
                                    <a href="#" class="message d-flex align-items-center">
                                        <div class="profile"><img src="Assets/img/avatar-1.jpg" alt="..." class="img-fluid">
                                            <div class="status busy"></div>
                                        </div>
                                        <div class="content"> <strong class="d-block">Salim Ferhat</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                                    </a>
                                    <a href="#" class="message d-flex align-items-center">
                                        <div class="profile"><img src="Assets/img/avatar-5.jpg" alt="..." class="img-fluid">
                                            <div class="status offline"></div>
                                        </div>
                                        <div class="content"> <strong class="d-block">Mehdi Azzaz</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                                    </a>
                                    <a href="#" class="message d-flex align-items-center">
                                        <div class="profile"><img src="Assets/img/avatar-4.jpg" alt="..." class="img-fluid">
                                            <div class="status online"></div>
                                        </div>
                                        <div class="content"> <strong class="d-block">Ilyes Nakhli</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:47pm</small></div>
                                    </a>
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
                        <p class="no-margin-bottom">2020 &copy; Your company.
                            <!-- Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/charts-home.js"></script>
    <script src="Assets/js/front.js"></script>
</body>

</html>

<?php 
