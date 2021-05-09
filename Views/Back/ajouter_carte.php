<?php 
include_once '../../Controller/carteC.php';
include_once '../../Model/carte.php';
include "../Front/PHPMailer-master/PHPMailerAutoload.php";
session_start();
$db=config::getConnexion();
$result=$db->query('select * from users');
    $carteC =  new carteC();
    function verif_Num($str){
        // On cherche tt les caractères autre que [A-Za-z] ou [0-9]
        preg_match("/([^0-9\s])/",$str,$result);
        // si on trouve des caractère autre que A-Za-z ou 0-9
        if(!empty($result)){
          return false;
        }
        return true;
      }
   

    if (isset($_POST['numero']) && isset($_POST['dateact']) && isset($_POST['dateexp'])&& isset($_POST['idc'])) {

      $numero= $_POST['numero'];
      $dateact= $_POST['dateact'];
      $dateexp =$_POST['dateexp'];
      $idclient =$_POST['idc'];
        
        
      $date1 = new DateTime($dateact);
      $date2 = new DateTime($dateexp);
      
      $sname= "localhost";
      $unmae= "root";
      $password = "";
      $db_name = "gestioncc";
      $conn = mysqli_connect($sname, $unmae, $password, $db_name);
      $sql = "SELECT * FROM carte WHERE idclient='$idclient' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ajouter_carte.php?error=Identifiant deja pris");
	        exit();
        }
        else if(!verif_Num($numero))
        {
            header("Location: ajouter_carte.php?error=Numéro non valid");
          exit();
        }
       
        else if(empty($dateact))
        {
            header("Location: ajouter_carte.php?error=Date activation vide");
            exit();

        }
        else if(empty($dateexp))
        {
            header("Location: ajouter_carte.php?error=Date expiration vide");
            exit();

        }
        else if ($date2<$date1)
        {
            header("Location: ajouter_carte.php?error=Date expiration inferieure à la date d'activation");
            exit();
        }
        
        else{

            $carte = new carte($numero,$dateact,$dateexp,$idclient);
            $carteC->ajoutercarte($carte);
            $resultmail=$db->query("SELECT * FROM users WHERE id='$idclient'");
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
                   $mail->Send();
            }
            

        header('Location: ajouter_carte.php?success=Ajout fait avec succès"');
        }
        
    }
   
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carte fidélité</title>
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
    <link rel="shortcut icon" href="Assets/img/JD&Co3.png">
    <link rel="shortcut icon" href="Assets/img/mostache.png">
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">

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
                    <h2 class="h5 no-margin-bottom">Ajouter Carte fidelité</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active">Carte fidélité </li>
                </ul>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>Table Carte fidélité</strong></div>
                                <div class="table-responsive">
                                    <div class="card-header">
                                        <i class="fas fa-table"></i> Ajouter une nouvelle carte
                                    </div>
                                    <form id="myForm" action="" method="POST">
                                    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
                                        <div>
                                        <label style="font-weight: bold"> Numero </label>
                                        <?php if (isset($_GET['numero'])) { ?>
                                        <input type="text" class="form-control" name="numero" placeholder="Numéro de la carte" style="width:350px" value="<?php echo $_GET['numero']; ?>"> </br>
                                        <?php }else{ ?>
               <input  class="form-control" type="text" 
                      name="numero" placeholder="Numero de la carte"
                      >
          <?php }?> </div>
                                            <div>
                                        <label style="font-weight: bold"> Date d'activation </label>      
                                        <?php if (isset($_GET['dateact'])) { ?>                   
                                        <input type="date" class="form-control" name="dateact"  style="width:350px" value="<?php echo $_GET['dateact']; ?>"> </br>
                                        <?php }else{ ?>
               <input  class="form-control" type="date" 
                      name="dateact" 
                      >
          <?php }?> </div>
                                      <div>
                                        <label style="font-weight: bold"> Date d'expirtation </label>      
                                        <?php if (isset($_GET['dateexp'])) { ?>                            
                                        <input type="date" class="form-control" name="dateexp"  style="width:350px" value="<?php echo $_GET['dateexp']; ?>"> </br>   
                                        <?php }else{ ?>
               <input  class="form-control" type="date" 
                      name="dateexp" 
                      >
          <?php }?> </div>                </br>
                                            <div>
                                        <label style="font-weight: bold"> Identifiant du CLient  </label>     
                                        <select  class="form-select form-select-lg mb-3" tabindex="10"  name="idc" id="idc" required>
                                <?php while ($row = $result->fetch()) { 
                                    ?>
                                    <option value= "<?php echo  $row['id'];?>"> <?php echo $row['id'];?> </option>
                                <?php } ?>
                                </select>
          </div>     
          <div>
          </br>
                                        <button class="btn btn-info btn-xs" type="submit" value="Valider" name="Valider">  Enregister </button>
                                        <button type="reset" value="Annuler" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Annuler </button>
                                        
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

