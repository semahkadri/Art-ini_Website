<?php

require_once 'C:/xampp/htdocs/demo/Semah/config.php';

    $connect = mysqli_connect('localhost','root','','artini');

    $record_per_page = 4;

    $page='';

    $output='';

    if (isset($_POST["page"])) {
        $page=$_POST["page"];
    }
    else {
        $page=1;
    }

    $start_from= ($page - 1) * $record_per_page;

    $query="SELECT * FROM categories LIMIT $start_from, $record_per_page";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }

    $output .=" 
    <table class='table table-responsive table-fluid' > 
        <thead>
          <tr>
            <th> Nom catégorie </th>
            <th>photo_categorie</th>
            <th>historique categorie</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
    ";
    while($row =  mysqli_fetch_array($result))
    {
        $output .='
            <tr>
                <th scope="row">' .$row["nom_categorie"]. '</th>
                <td><img src="' .$row["photo_categorie"]. '"</td>
                <td>' .$row["historique_categorie"]. '</td>
                <td>
                  <a href="updateP.php?id_inf=' .$row["id"]. '"> Edit </a>
                </td>
                <td>
                  <a href="produit.php?id_inf=' .$row["id"]. '"> Delete </a> 
                </td>
            </tr>
        ';
    }
    $output .= '
        </tbody>
    </table> <br> <div align="center">
    ';

    $page_query = "SELECT * FROM categories ORDER BY id DESC";

    $page_result = mysqli_query($connect, $page_query);

    $total_records = mysqli_num_rows($page_result);

    $total_pages = ceil($total_records/$record_per_page);
    
    $output .="
    <nav aria-label='Page navigation example'>
    <ul class='pagination justify-content-center'>
      
    ";

    for ($i=1; $i<=$total_pages; $i++) {
        $output .="<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px; solid #ccc; ' id='".$i."'> 
        
          <li class='page-item'><a class='page-link' href='#'>".$i."</a></li>
          </span>
        ";
    }

    $output .="
    
    </ul>
    </nav>
    ";

    echo $output;


?>