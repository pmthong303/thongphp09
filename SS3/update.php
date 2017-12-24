<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<?php 

	include 'connect.php'; 
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM user WHERE ID = $id";
	$result = mysqli_query($conn,$sql);
	
    while($row = mysqli_fetch_assoc($result)){
	
		$id       = $row["ID"];
		$name     = $row["Name"];
		$class    = $row["Class"];
		$birth    = $row["Age"];
		$email    =	$row["Email"];
		$avatar   = $row["Avatar"];
	}
	$sql1 = "UPDATE user SET Name = '$name', Class = '$class', Age = '$birth', Email ='$email', Avatar = '$avatar' WHERE ID = $id";

	if ($conn->query($sql1) === TRUE) {

	    echo "Users update successfully.";
	    echo "<a href='select.php'>Go to list users</a>";

	} else {
	    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
?>
<form action="select.php?id=<?php echo $row ['ID'];?>" method="post" enctype="multipart/form-data">
	 	Name:  <input type="text" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $errName  ?><br></span> 
         Class: <input type="text" name="class" value="<?php echo $class;?>"><span class="error"><?php echo $errClass ?><br></span> 
         Birthday: <input type="number" name="birth" value="<?php echo $birth;?>"><span class="error"><?php echo $errBirth ?><br></span> 
         Email: <input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $errEmail ?><br></span> 
         Avatar : 
         <input type="file" name="avatarName" id="avatarName" value="<?php 'image/'.$avatar;?>"><span class="error"><?php echo $errAvatar ?><br></span> 
         <input type="submit">
	
</form>


</body>
</html>