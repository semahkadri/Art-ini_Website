<?php
$connect = mysqli_connect("localhost", "root", "", "cart_system");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM orders WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
