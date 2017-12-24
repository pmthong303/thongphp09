<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "php09_product";

// Create connection
$conn_php09_basic = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn_php09_basic->connect_error) {
    die("Connection failed: " . $conn_php09_basic->connect_error);
} 
?>