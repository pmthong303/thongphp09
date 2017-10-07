<!DOCTYPE html>
<html>
	<head>
		<title>form</title>
		<style type="text/css">
			.error {
			color: red;
			margin-left: 1cm;
			}
		</style>
	</head>
	<body>
		<?php
			$name = $class =$birth = $email = "";
			$errName = $errClass = $errBirth = $errEmail = "";
			$error = false;
			$Rex = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
			include ('connect.php');
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				if(empty($_POST['name'])){
					$errName = "Please enter name";
					$error = true;
				}
				else{


					$name =$_POST['name'];
				}
			
				if(empty($_POST['class'])){
						$errClass = "Please enter class";
						$error = true;
						
						
					}
					else{
						$class =$_POST['class'];
					}
				
				if(empty($_POST['birth'])){
						$errBirth = "Please enter birth";
						$error = true;
						
						
					} 
					elseif ($_POST['birth'] < "18") {
						$errBirth = "Please enter invalid birth";
						$error = true;
						
						
					}
					else{
						$birth =$_POST['birth'];
					}
				
				if(empty($_POST['email'])){
						$errEmail = "Please enter email";
						$error = true;
						
						
					}
					elseif (!preg_match( $Rex, $_POST['email'])) {
						$errEmail = "Please enter invalid email";
						$error = true;
						
						
						}
					else{
						$email =$_POST['email'];
					}
				
					$sql = "INSERT INTO user (Name, Class, Age, Email)
							VALUES ('$name', '$class','$birth', '$email')";

					if (mysqli_query($conn, $sql)) {
					    echo "";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					if($sql){
						echo "<p>Thêm dữ liệu thành công</p>";
					}
					else {
						echo "<p>Thêm mới không thành công</p>";
					}
			
				

				
					
			}
			
			?>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
			Name:  <input type="text" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $errName  ?><br></span> 
			Class: <input type="text" name="class" value="<?php echo $class;?>"><span class="error"><?php echo $errClass ?><br></span> 
			Birthday: <input type="number" name="birth" value="<?php echo $birth;?>"><span class="error"><?php echo $errBirth ?><br></span> 
			Email: <input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $errEmail ?><br></span> 
			<input type="submit">
		</form>
		
	</body>
</html>
			
			
			
			
			
			