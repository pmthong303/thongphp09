<?php
	$d=strtotime("1994-3-30");
	echo "Created date is " . date("D Y-m-d", $d)."<br>"; 
	$ds=strtotime("-1 week");
	echo "Created date is ". date("Y-m-d", $ds)."<br>";
	$dss=strtotime("-3 month");
	echo "Created date is". date(" D Y-m-d",$dss);

?>