<?php 
session_start();
if(isset($_SESSION['admin'])){
	echo "Welcome ".$_SESSION['admin']."<br/>";
	

	echo "<a href='logout_admin.php'>Logout</a>"."<br>";
	echo "<a href='select.php'>Click to control</a>";
	

}else{
	header("Location: admin.php");
}
?>