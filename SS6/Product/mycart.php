<!DOCTYPE html>
<html>
<head>
	<title>Mycart</title>
</head>
<body>
	<meta charset="utf-8">
	<?php
	session_start();
 	include ('connect.php');
 	
 		
 		$sqlSelectUser    = "SELECT * FROM product";
		$resultSelectUser = $conn_php09_basic->query($sqlSelectUser);
		if ($resultSelectUser->num_rows > 0) {
			$data = array();
			while($elementUser = $resultSelectUser->fetch_assoc()) {
				$data[$elementUser['id']]= $elementUser;

			}
		}
		$id = $_GET['id'];
		if(empty($_SESSION['cart'])){
			$data[$id]['number'] =1 ;
			$_SESSION['cart'][$id] = $data[$id];
		}else {
			if(array_key_exists($id, $_SESSION['cart'])){
				$_SESSION['cart'][$id]['number']+=1;
				
			}else {
				$data[$id]['number']=1;
				
				$_SESSION['cart'][$id] = $data[$id];
				
				
			}
		}
	
		header("location: select.php");
			

			




		
 	?>



 		
			

		  
		
		
   
		



	

</body>
</html>