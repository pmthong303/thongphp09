<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "php09";

// Create connection
$conn_php09_basic = new mysqli($servername, $username, $password, $database);
//$setname = mysql_query($conn_php09_basic ,"SET NAMES 'utf8'");

// Check connection
if ($conn_php09_basic->connect_error) {
    die("Connection failed: " . $conn_php09_basic->connect_error);
} 
?>