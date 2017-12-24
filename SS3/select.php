<!DOCTYPE html>
<html>
   <head>
      <title>Select Data</title>
      <style type="text/css">
         .table p {
         color: red;
         font-size: 20px;
         }
      </style>
   </head>
   <body>
      <?php include ('connect.php') ?>
      <div class="table">
         <p>Danh Sách Sinh Viên</p>
         <table>
            <thead style="margin: auto;">
               <tr >
                  <th>ID</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Age</th>
                  <th>Email</th>
                  <th>Avatar</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if($_SERVER['REQUEST_METHOD'] == "POST"){
                  	
                  
                   		
                  	$sql = 'SELECT * FROM user ORDER BY ID DESC';
                  	$result = mysqli_query($conn,$sql);
                  		while($row = mysqli_fetch_assoc($result))
                  		{
                  			?>
               <tr>
                  <td><?php echo ($row ['ID']) ?></td>
                  <td><?php echo ($row ['Name']) ?></td>
                  <td><?php echo ($row ['Class']) ?></td>
                  <td><?php echo ($row ['Age']) ?></td>
                  <td><?php echo ($row ['Email']) ?></td>
                  <td><?php echo "<img src='image/".$row['Avatar']."' height = '300' width = '300'>";  ?></td>
                  <td><a href="delete.php?id=<?php echo $row ['ID'];?>" title="">Xóa</a></td>
                  <td><a href="update.php?id=<?php echo $row ['ID'];?>" title="">Sửa</a></td>
               </tr>
               <?php
                  }
                  }
                  
                  ?>
            </tbody>
         </table>
         <form action="" method="post">
            <input type="submit" name="" value="Lấy dữ liệu">
           
         </form>
      </div>
   </body>
</html>