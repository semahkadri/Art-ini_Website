<?php 
   require_once '../../Controller/Type3C.php';
    require_once '../../Model/Type3.php';

    $tp1= new eventC();
    $liste=$tp1->afficherType();


  $tp2= new eventC();
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
    <td>  <?php echo $t['prix_event'] ?>  </td>
    <td><img src="/assets<?php  echo $t['photo']?>" width="50" height="50" ></td>
    <td>
      <a href="update_event.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="tables_event.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
