<?php  include 'connect.php';?>
<?php 
	if(isset($_SESSION['admin'])){
		$idDelete = $_GET['id'];
		$sqlDeleteUser = "DELETE FROM users WHERE id = $idDelete";
		$resultDeleteUser = $conn_php09_basic->query($sqlDeleteUser);
		header("Location: select.php");
	}else {
		echo "Bạn không phải là admin"."<br>";
      	echo "Mời bạn đăng nhập:"."<a href='admin.php'>Click to login</a>";
   
	}
?>