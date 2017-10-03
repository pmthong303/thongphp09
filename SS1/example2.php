<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$arrDayEng = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
		$arrDayViet = array("Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy","Chủ Nhật");

			$number = 3;
			$language = "en";

			$arrDay = array();
			if($language == "vn") {
			$arrDay = $arrDayEng;
			}else{
			$arrDay = $arrDayViet;
			}

			$i = $number - 2;
			echo $arrDay[$i];
		


		
		


	?>

</body>
</html>