<?php 
session_start();
if(isset($_SESSION['login'])){
	echo "Welcome ".$_SESSION['login']."<br/>";
	

	echo "<a href='logout.php'>Logout</a>"."<br>";
	echo "<a href='select_product.php'>Click to buy</a>";
	

}else{
	header("Location: login.php");
}
?>