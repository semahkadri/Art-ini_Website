<?php
	$conn = new mysqli("localhost","root","","artini");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>