<!DOCTYPE html>
<html>
<body>
	<?php 
	include 'connect.php';
	?>

`<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="text" name="name">
    <input type="submit" value="Upload" name="submit">
`</form>
 	<?php 
 	$imageFileType = pathinfo($_FILES['fileToUpload']['name'],PATHINFO_EXTENSION);
 
   
    if (isset($_POST['submit']))
    {
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['fileToUpload']))
        	{
            // Nếu file upload không bị lỗi,
           
           
                
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './image/'.strtotime('now').$_FILES['fileToUpload']['name']);
                echo "file upload is " . date("Y-m-d", strtotime('now'))."<br>";
            }
            if($_FILES["fileToUpload"]["size"] < 300000 && $imageFileType == "jpg" ) {
            	echo "file is upload" ;
            	}
            if($imageFileType == "jpg"){
            	 move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './image/'.strtotime('now').$_FILES['fileToUpload']['name']);
            }else {
            	 move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './document/'.strtotime('now').$_FILES['fileToUpload']['name']);
            }

            
            
           
      
    }
	?>

</body>
</html>