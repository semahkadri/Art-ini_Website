<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "cart_system");  
 if(isset($_POST["client_id"]))  
 {  
      $query = "SELECT * FROM orders WHERE id = '".$_POST["client_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>