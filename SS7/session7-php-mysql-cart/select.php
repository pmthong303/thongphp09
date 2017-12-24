<?php include 'connect.php'; ?>
<?php 
	$sqlSelectUser    = "SELECT * FROM users";
	$resultSelectUser = $conn_php09_basic->query($sqlSelectUser);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Select.php</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css" media="screen">
		th,td {
			text-align: center;
		}

		
	</style>
</head>
<body>
<div class="container">
<h1 style="text-align: center;">List user information</h1>
	<p><a href='add.php'>Add users</a></p>
	<p><a href='add_product.php'>Add product</a></p>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Avatar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($resultSelectUser->num_rows > 0) {
				//show list users
				$i = 1;
				while($elementUser = $resultSelectUser->fetch_assoc()) {
					$avatar = $elementUser['avatar'];
					$id     = $elementUser['id'];
					echo "<div class='container'";
					echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$elementUser['name']."</td>";
						echo "<td>".$elementUser['username']."</td>";
						echo "<td>".$elementUser['password']."</td>";
						echo "<td>"."<img src='uploads/$avatar' width=100px height = 150px>"."</td>";
						echo "<td><a href='edit.php?id=$id'><img width='30px' src='Custom-Icon-Design-Pretty-Office-9-Edit-validated.ico'>Edit</a>     
								<a href='delete.php?id=$id'><img width='30px' src='images.png'>Delete</a></td>";
					echo "</tr>";
					echo "</div>";
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
</div>
</body>
</html>