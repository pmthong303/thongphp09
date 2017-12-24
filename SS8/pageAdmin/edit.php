<?php  include 'connect.php';?>
<?php
	if(isset($_SESSION['admin'])){
		$idEdit = $_GET['id'];
		//get data
		$sqlGetUserEdit = "SELECT * FROM users WHERE id = $idEdit";
		$resultGetUserEdit = $conn_php09_basic->query($sqlGetUserEdit);

		while($elementGetUserEdit = $resultGetUserEdit->fetch_assoc()) {
			$id       = $elementGetUserEdit["id"];
			$name     = $elementGetUserEdit["name"];
			$username = $elementGetUserEdit["username"];
			$password = $elementGetUserEdit["password"];
			$avatar   = $elementGetUserEdit["avatar"];
		}
		if(isset($_POST['submit'])){
		   $name       = $_POST['name'];
		   $username   = $_POST['username'];
		   $password   = md5($_POST['password']);
		   $avatarUpload = $_FILES['avatar'];
		   $avatar = strtotime('now').$_FILES['avatar']['name'];
		   //upload avatar into folder
		   $folderUploads = 'uploads/';
		   move_uploaded_file($avatarUpload['tmp_name'], $folderUploads.$avatar);

		   // update data users table
		   $sqlUpdateUser = "UPDATE users SET name = '$name', username = '$username',password = '$password', avatar = '$avatar' WHERE id = $idEdit";
		   // update
		   $conn_php09_basic->query($sqlUpdateUser);
		}
	}else{
		echo "Bạn không phải là admin"."<br>";
      	echo "Mời bạn đăng nhập:"."<a href='admin.php'>Click to login</a>";
      	exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
		<div class="container">
		<h2 style="text-align: center;">Edit user</h2>
		<p><a href='select.php'>List users</a></p>
		<form action = "<?php echo "edit.php?id=$idEdit";?>" method = "post" enctype="multipart/form-data">
		   <p>Name: <input type="text" name="name" value="<?php echo $name;?>" class="form-control"></p>
		   <p>Username: <input type="text" name="username" value="<?php echo $username;?>" class="form-control"></p>
		   <p>Password: <input type="text" name="password" value="<?php echo $password;?>" class="form-control"></p>
		   <p>Avatar: <input type="file" name="avatar"></p>
		   <p><img src="uploads/<?php echo $avatar;?>" alt="Avatar" width="100" height = "150"></p>
		   <input type="submit" value="Edit" name = "submit" class="btn btn-primary">
		</form>
		</div>

</body>
</html>