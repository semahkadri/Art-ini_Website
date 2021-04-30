<?php 
    require_once '../../Controller/TypeC.php';
    require_once '../../Model/Type.php';

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

    <td>  <?php echo $t['historique_categorie'] ?>  </td>
    <td>  <?php echo $t['nom_categorie'] ?>  </td>
    <td><img src="Assets/<?php  echo $t['photo_categorie']?>" width="50" height="50" ></td>
    <td>
      <a href="updateFormType.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="themes.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
