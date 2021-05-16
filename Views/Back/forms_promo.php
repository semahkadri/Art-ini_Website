<?php 
include_once '../../Controller/Type3CC.php';
include_once '../../Model/typee3.php';
/*include "../Front/PHPMailer-master/PHPMailerAutoload.php";*/
session_start();
$db=config::getConnexion();
$result=$db->query('select * from evenement ');
    $promoC=  new promoC();
    

    if (isset($_POST['desc_pro']) && isset($_POST['nom']) && isset($_POST['valeur'])&& isset($_POST['PA_Promo'])&& isset($_POST['idevent'])) {

      $desc_pro= $_POST['desc_pro'];
      $nom= $_POST['nom'];
      $valeur =$_POST['valeur'];
      $PA_Promo=$_POST['PA_Promo'];
      $idevent =$_POST['idevent'];
        
        
     
      $sname= "localhost";
      $unmae= "root";
      $password = "";
      $db_name = "artini";
      $conn = mysqli_connect($sname, $unmae, $password, $db_name);
      $sql = "SELECT * FROM promotion WHERE idevent='$idevent' ";
		$result = mysqli_query($conn, $sql);

		
            $promo = new promo($desc_pro,$nom,$valeur,$PA_Promo,$idevent);
            $promoC->ajouterTypeInst($promo);
            header("Location:tables_promo.php");
            /* $resultmail=$db->query("SELECT * FROM users WHERE id='$id'");
            foreach($resultmail as $row){
                    $s=$row['email'];
                    $n=$row['name'];
                    $mailto = $s;
                    $name = $n;
        
                    $mailSub = 'Artini';
                    $mailMsg = "Bonjour ,$name. Votre demande de carte de fidelité a approbé !";
                   $mail = new PHPMailer();
                   $mail ->IsSmtp();
                   $mail ->SMTPDebug = 0;
                   $mail ->SMTPAuth = true;
                   $mail ->SMTPSecure = 'ssl';
                   $mail ->Host = "smtp.gmail.com";
                   $mail ->Port = 465; // or 587
                   $mail ->IsHTML(true);
                   $mail ->Username = 'Artiniprojet@gmail.com';
                   $mail ->Password = "artini123";
                   $mail ->SetFrom("yourmail@gmail.com");
                   $mail ->Subject = $mailSub;
                   $mail ->Body = $mailMsg;
                   $mail ->AddAddress($mailto);
                   $mail->Send();*/
                }
            
            

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout promotion</title>
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
    <link rel="shortcut icon" href="assets/img/JD&Co3.png">
    <link rel="shortcut icon" href="assets/img/mostache.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">

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
                        <li><a href="forms_event.php">Ajouter un evenement</a></li>
                        <li><a href="forms_promo.php">Ajouter promotion</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="themes.php">Categories</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="afficher_client.php">Clients</a></li>
                        <li><a href="afficher_carte.php">Cartes Fidélité</a></li>
                        <li><a href="tables_inf.php">Influenceurs</a></li>
                        <li><a href="tables_spons.php">Sponsors</a></li>
                        <li><a href="tables_event.php">Evenements</a></li>
                        <li><a href="tables_promo.php">Promotions</a></li>
                        <li><a href="tables_promo.php">Commandes</a></li>

                    </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Ajouter promotion </h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active">promotion </li>
                </ul>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>Ajouter promotion</strong></div>
                                <div class="table-responsive">
                                    <div class="card-header">
                                        <i class="fas fa-table"></i> Ajouter une nouvelle promotion
                                    <form id="myForm" action="" method="POST">
                                 
                                        <div>
                                        </br>
                                        <label style="font-weight: bold"> description promo </label>
                                       
                                        <input type="text" class="form-control" name="desc_pro" placeholder="descrption promotion" style="width:350px" > 
                                      
                                         </div>
                                         <div>
                                        <label style="font-weight: bold"> nom </label>      
                                                         
                                        <input type="text" class="form-control" name="nom" placeholder="Nom" style="width:350px" > 
                                        </div>
                                      <div>
                                        <label style="font-weight: bold"> valeur </label>      
                                                                   
                                        <input type="valeur" class="form-control" name="valeur" placeholder="Valeur de promotion" style="width:350px" >   
                                       
               </div>               
               <div>
                                        <label style="font-weight: bold"> prix de promotion </label>      
                                                                   
                                        <input type="PA_Promo" class="form-control" name="PA_Promo"  placeholder="Prix de promotion" style="width:350px" > 
               </div>                
                                            <div>
                                        <label style="font-weight: bold"> Identifiant du evenement  </label>     
                                        <select  class="form-control" tabindex="10"  name="idevent" id="idevent" style="width:350px" required>
                                        <?php while ($row = $result->fetch()) { 
                                    ?>
                                    <option value= "<?php echo  $row['id'];?>"> <?php echo $row['nom'];?> </option>
                                <?php } ?>
                                </select>
          </div>     
          <div>
          </br>
                                        <button class="btn btn-light btn-xs" type="submit" value="Valider" name="Valider">  Enregister </button>
                                        <button type="reset" value="Annuler" class="btn btn-info btn-xs"><i class ="fa fa-trash-o"> </i> Annuler </button>
                                        
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/front.js"></script>
</body>

</html>

