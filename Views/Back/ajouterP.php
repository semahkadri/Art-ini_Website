<?php 
session_start();


include_once '../../Controller/productsC.php';
include_once '../../Model/product.php';
include "../Front/PHPMailer-master/PHPMailerAutoload.php";


$db=config::getConnexion();
$result=$db->query('SELECT * from categorie');

    $productsC =  new productsC();


    function verif_Num($str){
        // On cherche tt les caractères autre que [A-Za-z] ou [0-9]
        preg_match("/([^0-9\s])/",$str,$result);
        // si on trouve des caractère autre que A-Za-z ou 0-9
        if(!empty($result)){
          return false;
        }
        return true;
      }
   

    if (isset($_POST['nom_prod']) && isset($_POST['prix_prod']) && isset($_POST['img_prod'])&& isset($_POST['idc'])) {

        
      $nom_prod= $_POST['nom_prod'];
      $prix_prod= $_POST['prix_prod'];
      $img_prod =$_POST['img_prod'];
      $id_categorie =$_POST['idc'];

        if(!verif_Num($prix_prod))
        {
            header("Location: ajouterP.php?error=prix non valide");
          exit();
        }
       
    
        else if(empty($nom_prod))
        {
            header("Location: ajouterP.php?error=Nom vide");
            exit();

        }
        else if(empty($img_prod))
        {
            header("Location: ajouterP.php?error=Image vide");
            exit();

        }
        else{
            $product = new product($nom_prod,$prix_prod,$img_prod,$id_categorie);
            $productsC->ajouterproducts($product);

         /*   $resultmail=$db->query('select * from users ');
foreach($resultmail as $row){
        $s=$row['email'];
$mailto = $s;
    $mailSub = 'Artini';
    $mailMsg = ' Consultez notre nouveau produit !';
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
        
            

        header('Location: ajouterP.php?success=Ajout fait avec succès"');
        }
        
    //}

    

?>
   


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout produit</title>
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
    <link rel="stylesheet" href="assets/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/mostache.png">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<script>
    function ok() {
        alert("Votre produit a été ajouté avec succès!");
    }


    function surligne(myForm, erreur) {
        if (erreur)
            myForm.style.backgroundColor = "#f57061";
        else
            myForm.style.backgroundColor = "#bff781";
    }

    function verifNB(myForm) {
        //renvoie un entier
        var NB = parseInt(myForm.value);
        //Not a Number
        if (isNaN(NB) || NB < 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }
    }
    function verifierCaracteres(event) {
	 		
             var keyCode = event.which ? event.which : event.keyCode;
             var touche = String.fromCharCode(keyCode);
                     
             var champ = document.getElementById('mon_input');
                     
             var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                     
             if(caracteres.indexOf(touche) >= 0) {
                 champ.value += touche;
             }
                     
         }

    function verifReff(myForm) {
        if (myForm.value.length == 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }

    }




    function verifform(f) {

        var NBOk = verifqteP(f.NB);
        var refOk = verifReff(f.ref);

        if (NBOk && refOk)
            return true;
        else {
            
            alert("Veuillez remplir correctement tous les champs");
            return false;
        }
    }
</script>



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
                        <li><a href="afficher_commande.php">Commandes</a></li>

                    </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Ajouter un produit</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active">Produit </li>
                </ul>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>Ajouter un produit</strong></div>
                                <div class="table-responsive">
                                    <form id="myForm" action="" method="POST">

                                    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div>
          <label style="font-weight: bold"> Catégorie  </label>  
          <br> 
          <select  class="form-control" tabindex="10"  name="idc" id="idc" required style="width:500px">
                     <?php while ($row = $result->fetch()) { 
                              ?>
                           <option value= "<?php echo  $row['id'];?>"> <?php echo $row['nom_categorie'];?> </option>
                         <?php } ?>
                    </select>
                 </div>     
         
                <div>
                <label style="font-weight: bold"> Nom du produit </label> 
                <?php if (isset($_GET['nom_categorie'])) { ?>
                <input type="text" class="form-control form-control-success" name="nom_prod" placeholder="Nom du produit" value="<?php echo $_GET['nom_prod']; ?>" style="width:500px"> </br>
                <?php }else{ ?>
                <input  class="form-control" type="text" style="width:500px"
                name="nom_prod" placeholder="Nom du produit"
                      >
                <?php }?> 
                </div>

                <div>
                <label style="font-weight: bold"> Prix </label>
                <?php if (isset($_GET['prix_prod'])) { ?>
                <input type="text" min="1" max="9999999999"  class="form-control form-control-success" name="prix_prod" value="<?php echo $_GET['prix_prod']; ?>" placeholder="Prix en Dt" style="width:300px" required="required"></br>
                <?php }else{ ?>
                <input  class="form-control" type="text" style="width:500px"
                name="prix_prod" placeholder="Prix en Dt"
                      >
                <?php }?> 
                </div>

                <div>
                <label style="font-weight: bold">Ajouter une photo</label>
                <br>

                <?php if (isset($_GET['img_prod'])) { ?>
                <input type="file" class="form-control form-control-succes" name="img_prod" src="assets/<?php echo $_GET['img_prod']; ?>" required="required"> </br>
                <?php }else{ ?>
                <input  class="btn btn-primary" type="file" style="width:500px"
                name="img_prod"
                      >
                 <?php }?> 
                 </div>

    <div>
          </br>
                                        <button class="btn btn-success" type="submit" value="Valider" name="Valider">  Enregister </button>
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