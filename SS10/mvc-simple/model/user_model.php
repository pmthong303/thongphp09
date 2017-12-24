<?php
require_once 'config/database.php';
 		


class UserModel extends ConnectDB {

      
	public function getListUser(){
        $dbres = mysqli_query($this->conn,"SELECT * FROM users");
        $users = array();
        while ( ($obj = mysqli_fetch_object($dbres)) != NULL ) {
        $users[] = $obj;
        }
        
        return $users;
	}
                
	 public function delUser($id){
		$dbId = mysqli_real_escape_string($this->conn,$id);
		$del=mysqli_query($this->conn,"DELETE FROM users WHERE id=$dbId");

		}
	public function AddUser($name, $phone, $email, $address){
		$dbName = ($name != NULL)?"'".mysqli_real_escape_string($this->conn,$name)."'":'NULL';
        $dbPhone = ($phone != NULL)?"'".mysqli_real_escape_string($this->conn,$phone)."'":'NULL';
        $dbEmail = ($email != NULL)?"'".mysqli_real_escape_string($this->conn,$email)."'":'NULL';
        $dbAddress = ($address != NULL)?"'".mysqli_real_escape_string($this->conn,$address)."'":'NULL';
        
        mysqli_query($this->conn,"INSERT INTO users (name, phone, email, address) VALUES ($dbName, $dbPhone, $dbEmail, $dbAddress)");
        return mysqli_insert_id($this->conn);

	}
	public function viewUser($id){
	 	$dbId = mysqli_real_escape_string($this->conn,$id);
      	$dbres = mysqli_query($this->conn,"SELECT * FROM users WHERE id=$dbId");
        return mysqli_fetch_object($dbres);
	 }
}
   

       

   


      
        