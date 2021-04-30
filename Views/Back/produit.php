<?php 

require_once '../../Controller/productsC.php';
require_once '../../Model/Type.php';
require_once '../../Model/product.php';


if (isset ($_POST['supprimer']))
{   
$req="DELETE from produit where id_prod=".$_POST['id_prod'];
$db=config::getConnexion();
$sql=$db->prepare($req);
$sql->execute();

}

 $prod=new productsC;
    if (isset($_GET['search'])) {
        $listP = $prod->rechercheproducts($_GET['search']);
    } else {
        $listP = $prod->afficherproducts();
    }



?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produits</title>
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
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="themes.php">Categories</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="afficher_client.php">Client</a></li>
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
            <h2 class="h5 no-margin-bottom">Affichage des produits</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item active">Produit        </li>
          </ul>
        </div>

        <section >
          <div class="container">
                  <div class="title"><strong>Liste des produits</strong></div>

              
                  </br>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" >Chercher</button>
                      </div>
                      <input type="text" id="rech" class="form-control" placeholder="Chercher un produit">
                    </div>

                  </div>
                  </br>
          <div class="container">
                  <div class="table-responsive" id="pagination_data"> 
                    <table class="table" id="pagination_data">
                      <thead>
                        <tr>
                        <th scope="col">ID</th>
                           <th scope="col">Photos</th>
					                  <th scope="col">Nom du produit</th>
						                <th scope="col">Prix</th>
                            <th scope="col">ID Catègorie</th>
                            <th scope="col">Nom du catégorie</th>

                        </tr>
                        </tr>
                      </thead>
                      
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
                            var page = $(this).attr("id_prod");
                            load_data(page);
                          });

                        });
                      </script>
                      </div>
                        


                     <?php

                     
$total=0;
foreach ($listP as $prod)
{

  echo('<td>'.$prod['id_prod'].'</td>');

echo('<td> <img src="assets/'.$prod['img_prod'].'" width="80" height="80" /> </td>'); 

echo('<td>'.$prod['nom_prod'].'</td>');

echo('<td>'.$prod['prix_prod'].'</td>');
	
echo('<td>'.$prod['id_categorie'].'</td>');

echo('<td>'.$prod['nom_categorie'].'</td>');


	
	
$total+=1;



?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

                    <script type = "text/javascript">
                        $(document).ready(function(){
                            load_data();
                            function load_data(str)
                            {
                                $.ajax({
                                    url:"produit.php",
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

                     <?php
                    $tp2= new productsC();
                    if(!isset($_POST['str'])){
                        $liste = $tp2->afficherproducts();
                    }
                    else{
                        $liste = $tp2->rechercheproducts($_POST['str']);
                    }
                    ?>




<td>
<td>
<form method="POST" action="produit.php" >
<input style="background-color: #495156" class="btn btn-primary btn-block"  onclick="sure()" type="submit" name="supprimer" value="supprimer">
<input class="btn btn-primary btn-block" type="hidden" value="<?php echo $prod['id_prod']; ?>" name="id_prod">
</form>
</td>
<td>
<a class="btn btn-success" href="modifierP.php?id_prod=<?php echo $prod['id_prod'] ?>">
Modifier
</a>
<?php
echo("</tr>");

}
?>
<style>
#serif 		{ font-family: serif ; 		}
#sans-serif { font-family: sans-serif; 	}
#cursive 	{ font-family: cursive; 	}
#monospace 	{ font-family: monospace; 	}
</style>    
                </table>
                <center>
					<h5  id='cursive' style="color: black; background-color: #FFC300; width: 250px;" align="center"> <?php echo('Total des produits : '.$total)?></h5>
                </center>
<form method="get" action="ajouterP.php" >
<center>
   <button align="center" id='monospace' style="background-color: #0c6071; width: 300px" class="btn btn-primary btn-block" type="submit" > <a>  Ajouter un autre produit  </a> </button>
</center>
</form>
</br> 
<br>
                    <form class="form-inline" method="post" action="generate_pdf.php">
						          <button type="submit"  id="pdf" name="generate_pdf" class="btn btn-info"><i class="fa fa-pdf" aria-hidden="true"></i>
                        Generate PDF
                      </button>
						        </form>
                  </div>
                  <br>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>