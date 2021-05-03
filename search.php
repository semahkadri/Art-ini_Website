
<table   class="table table-striped table-responsive">
	<tr>
		<th>Product id</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Paiment Mode</th>
	</tr>
<?php
require('config.php');
$db = new db;

$result1=$db->getRecordsWhere($_POST['selected_price']);

while($row1=mysqli_fetch_array($result1)){
	echo "<tr>
		<td>".$row1['id']."</td>
		<td>".$row1['name']."</td>
		<td>".$row1['products']."</td>
		<td>".$row1['amount_paid']."</td>
		<td>".$row1['pmode']."</td>
	</tr>";
}
$db->closeCon();
?>
</table>