<?php  
include 'connect.php';
if(isset($_POST['submit'])){
  
   $name   = $_POST['name'];
   $image     = $_FILES['image'];
   $price   = $_POST['price'];
   $imageName = strtotime('now').$_FILES['image']['name'];

   //upload avatar into folder
   $folderUploads = 'images/';
   move_uploaded_file($image['tmp_name'], $folderUploads.$imageName);

   // insert data into users table
   $sqlInsertUser = "INSERT INTO product (name, image, price)
                     VALUES ('$name', '$imageName', '$price')";
   // insert
   $conn_php09_basic->query($sqlInsertUser);
}
?>
<h2>Add user</h2>
<p><a href='select.php'>List users</a></p>
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post" enctype="multipart/form-data">
   <p>Name: <input type="text" name="name"></p>

   <p>price: <input type="text" name="price"></p>
   <p>Avatar: <input type="file" name="image"></p>
   <input type="submit" value="Add" name = "submit">
</form>
