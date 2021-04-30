<?php 

include_once "../../config.php";

    
   if(isset($_GET['id']))
   {
       $id=$_GET['id'];
       $sql_update=mysqli_query($conn,"UPDATE message SET status=1 WHERE id='$id'");
   }
  
   if (isset($_GET['delete']))
   {

       $idd =$_GET['delete'];
       
       $res=mysqli_query($conn,"DELETE FROM message WHERE id='$idd'");
       if($res)
       {
           header("Location: read_msg.php?success=Suppression executée avec succès");
       }
      else 
      {
       header("Location: read_msg.php?error=Echec");
      }
      
   }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>table carte fidélité</title>
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

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
<?php include_once 'include/header.php'; ?>
    
            <section>
                
                   
                    

                    <div class="table-responsive">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Adresse e-mail</th>
                                    <th>Date d'envoi</th>
                                    
                                    
                                </tr>
                            </thead>


                            <tbody id="tableau">
                            <?php 
                            
                            $sql_get = mysqli_query($conn,"SELECT * FROM message WHERE status=1");
                            while($main_result=mysqli_fetch_assoc($sql_get)) :
                                    ?>
                        <tr>

                                     
                            <td> <?php echo $main_result['id']; ?></td>
                            <td> <?php echo $main_result['name']; ?></td>
                            <td><?php echo $main_result['email']; ?></td>
                            <td><?php echo $main_result['cr_date']; ?></td>
                            
                            <td>  
                        <a href="read_msg.php?delete=<?php echo $main_result['id'] ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Supprimer</a>
                       
                        </td>
                       
                        </tr>
                                        
										<?php
										endwhile
										?>

                            </tbody>
                        </table>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


                </div>
            </section>
            
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

</html>
