
<?php  
include 'connect.php';
include 'header.php';

      if(isset($_POST['submit'])){
         $name       = $_POST['name'];
         $username   = $_POST['username'];
         $password   = md5($_POST['password']);
         $avatar     = $_FILES['avatar'];
         $avatarName = strtotime('now').$_FILES['avatar']['name'];

         //upload avatar into folder
         $folderUploads = 'uploads/';
         move_uploaded_file($avatar['tmp_name'], $folderUploads.$avatarName);

         // insert data into users table
         $sqlInsertUser = "INSERT INTO users (name, username, password, avatar) 
                           VALUES ('$name', '$username', '$password', '$avatarName')";
         // insert
         $conn_php09_basic->query($sqlInsertUser);
      }
     
   
?>
<!DOCTYPE html>
<html>
<head>
   <title>Add</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
   <div class="container">
     
         <h2 style="text-align: center;">Add user</h2>
         <p><a href='select.php'>List users</a></p>
         <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post" enctype="multipart/form-data">
            <p>Name: <input type="text" name="name" class="form-control"></p>
            <p>Username: <input type="text" name="username" class="form-control"></p>
            <p>Password: <input type="text" name="password" class="form-control"></p>
            <p>Avatar: <input type="file" name="avatar"></p>
            <input type="submit" value="Add" name = "submit" class="btn btn-primary">
         </form>
     
   </div>

</body>
</html>
  <?php include 'footer.php'; ?>
