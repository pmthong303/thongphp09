<?php
	include ('connect.php');

	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$del ="DELETE FROM user WHERE ID = $id ";

		$result = mysqli_query($conn,$del);
		
		header("Location: select.php");
		
		

		

	}


 ?>