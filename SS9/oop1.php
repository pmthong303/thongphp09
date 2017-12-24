<?php
 class User {
 	public $name  = '';
 	public $email = '';
 	public function add($name){
 		return $name;
 	}
 	public function am(){
 		$s= $this->name;
 		$s.= " ";
 		$s.= $this->email;
 		return $s;
 	
 	}
 
 }
 class HinhVuong{
 	public $canh='';
 	function HinhVuong($x){
 		$this ->canh= $x;


 	}
 	function Tinhchuvi(){
 		return $this ->canh*4;

 	}
 	function Tinhdientich(){
 		return $this ->canh* $this->canh;
 	}

 }
 class Phim {
 	
 }
 $hv= new HinhVuong(30);
 $user = new User();

 $user ->name = 'Ngoc'; 
 $user ->email= 'thong@gmail.com';
 
 

 
 echo $user -> add('Thong');
 //echo $student -> email('thong@gmail.com');

 echo $user ->am();
 echo $hv ->Tinhchuvi();
 echo $hv ->Tinhdientich();

 ?>