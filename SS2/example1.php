<?php
	 echo  $_SERVER['SCRIPT_NAME'];
	echo "<br>";

	exit ;

	$name = "Phan Minh Thông";
	
	
	function reverseName($name) {
			$arrName = explode(" ", $name);
			$lengName = count($arrName);
			$lastNamePosition = $lengName;
			$lastName = $arrName[$lastNamePosition - 1];
			$middleName = $arrName[$lastNamePosition - 2];
			$otherName = " ";
			for($i = 0; $i < $lengName - 2; $i++) {
				$otherName .= $arrName[$i].' ';
			}
			 echo $otherName.$lastName.' '.$middleName;
		}
		reverseName("Phan Minh Thông");




		echo $_SERVER['HTTP_USER_AGENT'];


  ?>