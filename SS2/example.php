<!DOCTYPE html>
<html>
<head>
	<title>example</title>
</head>
<body>
	<?php 
		$number = 36 ;
		for ($x = 1; $x < $number; $x++){
			if ($x % 3 == 0) {
				echo $x."<br>" ;
			}
		}
		echo "<br/>";
		//câu 2

		$number = 20 ;
		while ($number > 10) {
			echo $number ."<br>" ;
			break;
		}
		//Câu 3
		$number = 28;
		do {
			echo $number. "<br>";
			break;
			$number++ ;
		} while ($number > 15);
			echo "<br>";



	?>

</body>
</html>