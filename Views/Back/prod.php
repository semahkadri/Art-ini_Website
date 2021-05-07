<?php 
    require_once '../../Controller/productsC.php';
    require_once '../../Model/product.php';

    $tp1= new productsC();
    $liste=$tp1->afficherproducts();


  $tp2= new productsC();
  if(!isset($_POST['str'])){
      $liste = $tp2->afficherproducts();  
  }
  else{
      $liste = $tp2->rechercheproducts($_POST['str']);
  }

  foreach ($liste as $t) {
    ?>
    <tr>
    <th scope="row">  <?php echo $t['id_prod'] ?>  </th>
    <td><img src="assets/<?php  echo $t['img_prod']?>" width="50" height="50" ></td>
    <td>  <?php echo $t['nom_prod'] ?>  </td>
    <td>  <?php echo $t['prix_prod'] ?>  </td>
    <td>  <?php echo $t['id_categorie'] ?>  </td>
    <td>  <?php echo $t['nom_categorie'] ?>  </td>
    <td>
      <a href="modifierP.php?id_prod=<?php echo $t['id_prod']?>"> Modifier </a>
    </td>
    <td>
      <a href="produit.php?id_prod=<?php echo $t['id_prod'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
