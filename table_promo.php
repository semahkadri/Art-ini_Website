<?php 
   require_once '../../Controller/Type3CC.php';
    require_once '../../Model/Typee3.php';

    $tp1= new promoC();
    $liste=$tp1->afficherType();


  $tp2= new promoC();
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

    <td>  <?php echo $t['desc_pro'] ?>  </td>
    <td>  <?php echo $t['nom'] ?> </td>
    <td><?php echo $t['valeur'] ?></td>
    <td><?php echo $t['PA_Promo'] ?></td>
    <td><?php echo $t['idevent'] ?></td>

    <td>
      <a href="update_promo.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="tables_promo.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
