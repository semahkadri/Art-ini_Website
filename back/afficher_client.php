<?php 

require_once '../../Controller/clientC.php';
  $clientC =  new clientC();
    $db=config::getConnexion();
    
    $result=$db->query('SELECT * FROM users');

    if (isset($_GET['search'])&& !empty($_GET['search']))
    {
        $result=$db->query('SELECT * FROM users WHERE name like \'%'.$_GET['search'].'%\'');
        
    }else
    {
        $result=$db->query('SELECT * FROM users');
    }


    if (isset($_GET['delete']))
    {

        $id =$_GET['delete'];
       
        $res=$clientC->supprimerUtilisateur($id);
        if ($res)
        {
            header("Location: afficher_client.php?success=Suppression executée avec succès");
        }
       else 
       {
        header("Location: afficher_client.php?error=Echec");
       }
      
    }
    if (isset($_GET['tri'])) {
        if ($_GET['tri']=="ID") {
          $tri="id";
         
         
        }
       

       
          else
          {
              $tri="name";
             $result=$clientC->afficherclienttri($tri);
            
          }
        
          
    }
?>
                
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>table clients</title>
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
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Assets/img/JD&Co3.png">
    <link rel="shortcut icon" href="Assets/img/mostache.png">

  
</head>

<body>
<header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn">Fermer <i class="fa fa-close"></i></div>
                    <form id="searchForm" action="#">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="Que cherchez-vous?..">
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
                                <div class="profile"><img src="Assets/img/avatar-3.jpg" alt="..." class="img-fluid">
                                    <div class="status online"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Ines Kouki</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="Assets/img/avatar-2.jpg" alt="..." class="img-fluid">
                                    <div class="status away"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Semah Kadri</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="Assets/img/avatar-1.jpg" alt="..." class="img-fluid">
                                    <div class="status busy"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Salim Ferhat</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                            </a>
                            <a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="Assets/img/avatar-5.jpg" alt="..." class="img-fluid">
                                    <div class="status offline"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Mehdi Azzaz</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                            </a>
                            <a href="#" class="dropdown-item text-center message"> <strong>Voir tous les messages <i class="fa fa-angle-right"></i></strong></a>
                        </div>
                    </div>
                    <!-- Tasks-->
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 1</strong><span>40% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 2</strong><span>20% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 3</strong><span>70% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 4</strong><span>30% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 5</strong><span>65% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-center"> <strong>Voir toutes les tâches <i class="fa fa-angle-right"></i></strong></a>
                        </div>
                    </div>
                    
            <!-- Megamenu end     -->
                    <!-- Languages dropdown    -->
                    <div class="list-inline-item dropdown">
                        <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="Assets/img/flags/16/FR.png" alt="Francais"><span class="d-none d-sm-inline-block">Francais</span></a>
                        <div aria-labelledby="languages" class="dropdown-menu">
                            <a rel="nofollow" href="#" class="dropdown-item"> <img src="Assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>Anglais</span></a>
                            <a rel="nofollow" href="#" class="dropdown-item"> <img src="Assets/img/flags/16/DE.png" alt="English" class="mr-2"><span>Allemand  </span></a>
                        </div>
                    </div>
                    <!-- Log out               -->
                    <div class="list-inline-item logout">
                        <a id="logout" href="logout.php" class="nav-link"> <span class="d-none d-sm-inline">Se déconnecter </span><i class="icon-logout"></i></a>
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
                <div class="avatar"><img src="" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h5">Ines Kouki</h1>
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
                        <li><a href="#">Ajouter une catégorie</a></li>
                        <li><a href="#">Ajouter un produit</a></li>
                        <li><a href="ajouter_carte.php">Ajouter une carte de fidélité</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Produits</a></li>
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
            <!-- Page Header-->
            
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                
                    <h2 class="h5 no-margin-bottom">Affichage table Clients</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active">Clients</li>
                </ul>
            </div>
            <section>
            
                <div class="container">
                <button  class="btn btn-info mr-2" onclick="window.print()" style="position: relative; left: 750px "><i class="fa fa-print" aria-hidden="true"></i></i> Imprimer</button>
                    <div class="title"><strong>Liste des clients</strong></div>

                    </br>
                    <form action="" method = 'GET'>
                    <div class="input group">
                    
                   
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <button class="btn btn-info btn-xs" value="Chercher"> <i class="fa fa-refresh" aria-hidden="true"></i> Refresh</button>
                            </div>
                             <td> <select name="tri" class="form-control" >
                             <option value="" disabled selected>Trier par</option>
                            <option >ID</option>
                            
                            <option>Nom d'utilisateur</option>

                            
                          </select></td> 
                          
                          
                        <td>
                            
                        </div>
                        </br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <button class="btn btn-danger btn-xs" value="Chercher"><i class="fa fa-search" ></i> Chercher</button>
                            </div>
                            <input type="text" id="search" name="search" class="form-control" placeholder="Chercher un client">
                            
                        </div>
                        
                    </form>


                    </div>
                    </br>
                    
                    <div class="table-responsive">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom et prénom</th>
                                    <th>Nom d'utilisateur</th>
                                    <th>Adresse e-mail</th>
                                    <th>Adresse </th>
                                    <th>Numero de téléphone</th>
                                    <th>Date de naissance</th>
                                </tr>
                            </thead>


                            <tbody id="tableau">
                            <?php while ($row = $result->fetch()) { 
                                    ?>
                                    <tr>

                                       
                            <td>  <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['login']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['adress']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['birthday']; ?></td>
                        <td>  
                        <a href="afficher_client.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Supprimer</a>
</tr>

										<?php
										}
                                               
										?>

                            </tbody>
                        </table>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            load_data();

                            function load_data(str) {
                                $.ajax({
                                    url: "Theme.php",
                                    method: "post",
                                    data: {
                                        str: str
                                    },
                                    success: function(data) {
                                        $('#tableau').html(data);
                                    }
                                });
                            }

                            $('#search').keyup(function() {
                                var searcherche = $(this).val();
                                if (searcherche != '') {
                                    load_data(searcherche);
                                } else {
                                    load_data();
                                }
                            });
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
    <script src="Assets/vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/front.js"></script>
</body>

</html>

