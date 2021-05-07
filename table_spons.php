<?php 
   require_once 'C:/xampp/htdocs/ilyes/Controller/TypeCC.php';
    require_once 'C:/xampp/htdocs/ilyes/Model/Typee.php';

    $tp1= new TypeC();
    $liste=$tp1->afficherType();


  $tp2= new TypeC();
  if(!isset($_POST['str'])){
      $liste = $tp2->afficherType();
  }
  else{
      $liste = $tp2->rechercherType($_POST['str']);
  }

  foreach ($liste as $t) {
    ?>
    <tr>
    <th scope="row">  <?php echo $t['id'] ?>  </th>

    <td>  <?php echo $t['historique_sponsor'] ?>  </td>
    <td>  <?php echo $t['nom_sponsor'] ?>  </td>
    <td><img src="<?php  echo $t['photo_sponsor']?>" width="50" height="50" ></td>
    <td>
      <a href="update_spons.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="tables_spons.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
