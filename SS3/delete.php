<?php
	include ('connect.php');

	
		
	$del ="DELETE FROM `user` WHERE  `ID`";
	if (mysqli_query($conn, $del)) {
    echo "Xóa thành công";
	} else {
    echo "Error deleting record: " . mysqli_error($conn);
	}


 ?>