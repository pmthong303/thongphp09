
<?php 
    include 'connect.php';
    include 'header.php';


?>
<?php 
	$limit = 3;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	$total = 0;
	$from = $limit*($page - 1);
	$sqlGetTotalProduct =  "SELECT name from products";
	$resultGetTotalProduct = $conn_php09_basic->query($sqlGetTotalProduct);
	$total = $resultGetTotalProduct->num_rows;

	
	

	$sqlSelectProduct    = "SELECT products.id, products.name, products.description, products.price, products.created, products.image, categories.name as category_name FROM products INNER JOIN categories ON products.category_id = categories.id LIMIT $from,$limit";
	
	$resultSelectProduct = $conn_php09_basic->query($sqlSelectProduct);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Select Product</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css" media="screen">
		th,td {
			text-align: center;
		}

		
	</style>
</head>
<body>

	<div class="container">
	<h1 style="text-align: center;">List products</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Image</th>
					<th>Category</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(mysqli_num_rows($resultSelectProduct) > 0){

					//show list users
					$i = 1;
					while($elementProduct = mysqli_fetch_assoc($resultSelectProduct)) {
						$image  = $elementProduct['image'];
						$id     = $elementProduct['id'];
						echo "<div class='container'";
						
							echo "<tr>";
								echo "<td>".$i."</td>";
								echo "<td>".$elementProduct['name']."</td>";
								echo "<td>".$elementProduct['description']."</td>";
								echo "<td>".$elementProduct['price']."</td>";
								echo "<td>"."<img src='uploads/products/$image' width=100px height = 150px>"."</td>";
								echo "<td>".$elementProduct['category_name']."</td>";
								echo "<td>".$elementProduct['created']."</td>";
								echo "<td><a href='buy_product.php?id=$id'><img width='50px' src='tải xuống.png'></a></td>";
							echo "</tr>";
						
						echo "</div>";
						$i++;	
					}

				
				?>

			</tbody>
		</table>
      			
		<?php }else{
			echo "No product"."<br>";
			
		}
		for($i = 1; $i <= ceil($total/$limit); $i++){
		echo  "<ul class='pagination'>";
			//echo "  <li><a href='select_product.php?page=$i'>&laquo;</a></li>";
			echo " <li><a href='select_product.php?page=$i'>$i</a></li>";
			//echo "  <li><a href='select_product.php?page=$i'>&raquo;</a></li>";

		echo "</ul>";

	}
	?>
	</div>
</body>
</html>
 <?php include 'footer.php'; ?>
