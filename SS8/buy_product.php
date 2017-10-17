<?php include 'connect.php';?>
<?php 
	if(!isset($_SESSION['login'])){
		
		echo "Bạn cần đắng nhập để mua sản phẩm"."<br>";
		echo "<td><a href='login.php'>Login</a></td>";

		
	}else {
		
		$idBuy = $_GET['id'];

		if(isset($_SESSION['cart']) 
		&& isset($_SESSION['cart'][$idBuy]['quantity'])) {
		$_SESSION['cart'][$idBuy]['id'] = $idBuy;
		$_SESSION['cart'][$idBuy]['quantity'] +=1;
		}else{
		$_SESSION['cart'][$idBuy]['id'] = $idBuy;
		$_SESSION['cart'][$idBuy]['quantity'] = 1;
		}
		header("Location: cart.php");
	}
		
	
	
?>
