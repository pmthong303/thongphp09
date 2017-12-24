<?php
include 'connect.php';

if(isset($_POST['submit'])){
   $username   = $_POST['username'];
   $password   = md5($_POST['password']);
   $sqlLogin   = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
   $resultLogin = $conn_php09_basic->query($sqlLogin);
   if ($resultLogin->num_rows > 0) {
   		$_SESSION['admin'] = $username;
   		header("Location: select.php");
        
   }else{
   		echo "Username/Password is not matching";

   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login Admin</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
   <div class="container">
         <h2 style="text-align: center;">Admin</h2>

         <p><a href='select.php'>List user</a></p>
         <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            <p>Username: <input type="text" name="username"  class="form-control"></p>
            <p>Password: <input type="text" name="password" class="form-control"></p>
            <input type="submit" value="Login" name = "submit" class="btn btn-primary" >
         </form>
   </div>


</body>
</html>