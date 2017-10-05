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
			
			$Rex = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				if(empty($_POST['name'])){
					$errName = "Please enter name";
					
				}
				else{
					$name =$_POST['name'];
				}
			
			if(empty($_POST['class'])){
					$errClass = "Please enter class";
					
				}
				else{
					$class =$_POST['class'];
				}
			
			if(empty($_POST['birth'])){
					$errBirth = "Please enter birth";
					
				} 
				elseif ($_POST['birth'] < "18") {
					$errBirth = "Please enter invalid birth";
					
				}
				else{
					$birth =$_POST['birth'];
				}
			
			if(empty($_POST['email'])){
					$errEmail = "Please enter email";
					
				}
				elseif (!preg_match( $Rex, $_POST['email'])) {
					$errEmail = "Please enter invalid email";
					
					}
				else{
					$email =$_POST['email'];
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
		<?php 
			echo "Name:".$name."<br>";
			echo "Class:".$class."<br>";
			echo "Birth:".$birth."<br>";
			echo "Email:".$email."<br>";
			
			
			?>
	</body>
</html>
			
			
			
			
			
			