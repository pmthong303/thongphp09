<!DOCTYPE html>
<html>
   <head>
      <title>form</title>
      <style type="text/css">
         .error {
         color: red;
         margin-left: 1cm;
         }
         .image img {
         width: 180px;
         height: 200px;
         }
         p{
         color: red;
         }
      </style>
   </head>
   <body>
      <?php
         $name = $class =$birth = $email =$avatar= "";
         $errName = $errClass = $errBirth = $errEmail = $errAvatar= "";
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
         	if(empty($_FILES['avatarName']['name'])){
         		$errAvatar = "Please enter avatar";
         		$error = true;
         		}
         		else{
         			$avatar = $_FILES['avatarName']['name'];
         			$link='image/'.$avatar;
         	  		move_uploaded_file($_FILES['avatarName']['tmp_name'],$link);
         		}
         		
         		
         	if ($error == false){
         		
         		$sql = "INSERT INTO user (Name, Class, Age, Email, Avatar)
         				VALUES ('$name', '$class','$birth', '$email', '$avatar')";
         
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
         	}else {
         		echo "<p> Bạn chưa nhập dữ liệu</p>";
         	}
         
         					
         								
         
         	
         
         	
         		
         }
         
         ?>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
         Name:  <input type="text" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $errName  ?><br></span> 
         Class: <input type="text" name="class" value="<?php echo $class;?>"><span class="error"><?php echo $errClass ?><br></span> 
         Birthday: <input type="number" name="birth" value="<?php echo $birth;?>"><span class="error"><?php echo $errBirth ?><br></span> 
         Email: <input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $errEmail ?><br></span> 
         Avatar : 
         <input type="file" name="avatarName" id="avatarName" value="<?php echo $avatar;?>"><span class="error"><?php echo $errAvatar ?><br></span> 
         <div class="image">
            <img src="<?php ?>" alt="" >
         </div>
         <input type="submit" name="submit" value="Thêm vào database">
      </form>
     
   </body>
</html>