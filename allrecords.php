<table   class="table table-striped table-responsive">
			<tr>
				<th>Product id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Paiment mode</th>
			</tr>
			<?php
			require('config.php');
			$db = new db;
			$result=$db->getRecords();
			while($row=mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['products']."</td>
					<td>".$row['amount_paid']."</td>
					<td>".$row['pmode']."</td>
				</tr>";
			}
			$db->closeCon();
			?>
</table>