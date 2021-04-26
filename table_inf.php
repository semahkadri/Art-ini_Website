<?php 
   require_once 'C:/xampp/htdocs/mehdi/Controller/TypeC.php';
    require_once 'C:/xampp/htdocs/mehdi/Model/Type.php';

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

    <td>  <?php echo $t['desc_eve'] ?>  </td>
    <td>  <?php echo $t['nom'] ?>  </td>
    <td>  <?php echo $t['directeur'] ?>  </td>
    <td><img src="<?php  echo $t['photo']?>" width="50" height="50" ></td>
    <td>
      <a href="update_inf.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="tables_inf.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
