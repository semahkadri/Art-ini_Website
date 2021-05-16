<?php 
   require_once '../../Controller/InfluC.php';
  require_once '../../Model/Influ.php';

 


$tp2= new InfluC();
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

  <td>  <?php echo $t['historique_influenceur'] ?>  </td>
  <td>  <?php echo $t['nom_influenceur'] ?>  </td>
  <td>  <?php echo $t['prenom_influenceur'] ?>  </td>
  <td><img src="assets/<?php  echo $t['photo_influenceur']?>" width="50" height="50" ></td>
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
