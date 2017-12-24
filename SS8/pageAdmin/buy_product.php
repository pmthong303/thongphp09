<?php session_start();
include 'connect.php';?>
<?php 
	
		
		$idBuy = $_GET['id'];
		if(isset($_SESSION['cart']) 
		&& isset($_SESSION['cart'][$idBuy]['quantity'])) {
		$_SESSION['cart'][$idBuy]['id'] = $idBuy;
		$_SESSION['cart'][$idBuy]['quantity'] +=1;
		}else{
		$_SESSION['cart'][$idBuy]['id'] = $idBuy;
		$_SESSION['cart'][$idBuy]['quantity'] = 1;
		}
		//var_dump($_SESSION['cart']);exit();
		header("Location: cart.php");
	
		
	
	

?>
