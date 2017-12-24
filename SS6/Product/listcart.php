
<?php 
session_start();
include ('connect.php');

//$imageName = strtotime('now').$_FILES['image']['name'];
//$folderUploads = 'images/';
//move_uploaded_file($image['tmp_name'], $folderUploads.$imageName);
//$image = $elementUser['image'];
//$sqlSelectUser    = "SELECT * FROM users";
//$resultSelectUser = $conn_php09_basic->query($sqlSelectUser);

	if(!empty($_SESSION['cart'])){
	echo "<h1 align ='center'>MY CART</h1>";
	echo "<table border = '1' align= 'center'>";
	echo "<tr>";
	   echo "<td>ID</td>";
	   echo "<td>Name</td>";
	   echo "<td>Price</td>";
	   echo "<td>Image</td>";
	   echo "<td>Number</td>";

	   echo "<td>Total</td>";
	echo "</tr>";
	foreach ($_SESSION['cart'] as $value) {
		echo "<tr>";
		echo "<td>$value[id]</td>";
		echo "<td>$value[name]</td>";

		echo "<td>$value[price]</td>";
		echo "<td>$value[image]</td>";
		

		echo "<td>$value[number]</td>";
		echo "<td>". number_format($value['price']*$value['number'])."</td>";
		echo "</tr>";
		
		# code...
	}

}



?>

