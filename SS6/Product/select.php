
<?php
	session_start();
 	include 'connect.php';
 	

	$sqlSelectUser    = "SELECT * FROM product";
	$resultSelectUser = $conn_php09_basic->query($sqlSelectUser);
?>
<h1>List user information</h1>
	<p><a href='add.php'>Add users</a></p>
	<table>
		<thead>

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			if ($resultSelectUser->num_rows > 0) {
				if(empty($_SESSION['cart'])){
					echo "<p>Chưa có sản phẩm nào trong giỏ</p>";


				}else {
					$total = 0;
					foreach ($_SESSION['cart'] as $value) {
						$total+=$value['number'];
						echo "<p>Số lượng sản phẩm thêm vào là : $total sản phẩm</p>";
					}
				}
				$i = 1;
				while($elementUser = $resultSelectUser->fetch_assoc()) {
					$image = $elementUser['image'];
					$id     = $elementUser['id'];
					
					echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$elementUser['name']."</td>";
						echo "<td>".$elementUser['price']."</td>";
						echo "<td>".$elementUser['image']."</td>";
						echo "<td>"."<img src='images/$image' width=100px height = 150px>"."</td>";
						echo "<td><a href='mycart.php?id=$id'>Mua</a>";
								
					echo "</tr>";
					
					
					$i++;
				}
				
				
				 	
					
				
			?>
		</tbody>
	</table>
	<?php }else{
		echo "No user";
	}
//var_dump($resultSelectUser);exit();
?>