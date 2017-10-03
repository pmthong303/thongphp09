<?php
$arrHocsinh = array();
$arrHocsinh[0] = array( "Nguyen Van A", "1990", "man", "backkhoa");
$arrHocsinh[1] = array( "Nguyen Van B", "1991", "woman", "Duytan");
$arrHocsinh[2] = array( "Nguyen Van C", "1992", "man", "Out school");
$arrHocsinh[3] = array( "Nguyen Van D", "1993", "woman", "backkhoa");

// Cau 1
foreach($arrHocsinh as $hocsinh){
	$hoten = explode(' ', $hocsinh[0]);
	if($hoten == "Nguyễn"){
		print_r($hocsinh);
	}
}

// Cau 2
foreach($arrHocsinh as $hocsinh){
	$hoten = explode(' ', $hocsinh[0]);
	
	$count = count($hoten);
	$count = $count - 1;
	
	//if(preg_match('a', $hoten[$count] || preg_match('A', $hoten[$count]){
		print_r($hocsinh);
	}
}

// Cau 3
foreach($arrHocsinh as $hocsinh){
	if($hocsinh[3] == "Duytan"){
		print_r($hocsinh);
	}
}

// Cau 4
foreach($arrHocsinh as $hocsinh){
	if($hocsinh[1] > 1994){
		print_r($hocsinh);
	}
}

// cau 5
sort();