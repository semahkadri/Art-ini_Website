<?php  
 $connect = mysqli_connect("localhost", "root", "", "cart_system");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $address = mysqli_real_escape_string($connect, $_POST["address"]);  
      $phone = mysqli_real_escape_string($connect, $_POST["phone"]);  
      $products = mysqli_real_escape_string($connect, $_POST["products"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);  
      if($_POST["client_id"] != '')  
      {  
           $query = "  
           UPDATE orders   
           SET name='$name',   
           address='$address',   
           phone='$phone',   
           products = '$products',   
           email = '$email'   
           WHERE id='".$_POST["client_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT orders(name, address, phone, products, email)  
           VALUES('$name', '$address', '$phone', '$products', '$email');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM orders ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">client Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th> 
                          <th width="15%">Delete</th> 
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
                          <td><input type="button" name="Delete" value="Delete" id="' . $row["id"] . '" class="btn btn-info btn-xs delete_data" /></td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 