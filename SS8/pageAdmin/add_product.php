


<?php  
include 'connect.php';
include 'header.php';
//get list category
   $sqlCategory    = "SELECT * FROM categories";
   $resultCategory = $conn_php09_basic->query($sqlCategory);
   $category = "";
   while($elementCategory = $resultCategory->fetch_assoc()) {
      $categoryID   = $elementCategory['id'];
      $categoryName = $elementCategory['name'];
      $category.= "<option value='$categoryID'>$categoryName</option>";
   }
   //if(isset($_SESSION['admin'])){
         if(isset($_POST['submit'])){
            $name         = $_POST['name'];
            $description  = $_POST['description'];
            $price        = $_POST['price'];
            $image        = $_FILES['image'];
            $category_id  = $_POST['category_id'];
            $imageName    = strtotime('now').$_FILES['image']['name'];
            $created      = date('Y-m-d h:i:s');
            //upload avatar into folder
            $folderUploads = 'uploads/products/';
            move_uploaded_file($image['tmp_name'], $folderUploads.$imageName);

            // insert data into users table
            $sqlInsertProduct = "INSERT INTO products (name, price, description, image, category_id, created) 
                              VALUES ('$name', '$price', '$description', '$imageName',  '$category_id', '$created')";
            // insert
            $conn_php09_basic->query($sqlInsertProduct);
         }
      

         ?>
      
<!DOCTYPE>
<html>
<head>
   <title>Thêm sản phẩm</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
   

    <div class="container">
      <h2>Add products</h2>
      
      <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post" enctype="multipart/form-data">
         <p>Name: <input type="text" name="name" class="form-control"></p>
         <p>Desciption: <input type="text" name="description" class="form-control"></p>
         <p>Price: <input type="text" name="price" class="form-control"></p>
         <p>Category: 
         <select name = "category_id">
            <?php echo $category;?>
         </select>
         </p>
         <p>Image: <input type="file" name="image" ></p>
         <input type="submit" value="Add" name = "submit" class="btn btn-primary">
      </form>
   </div>


</body>
</html>
  <?php include 'footer.php'; ?>
