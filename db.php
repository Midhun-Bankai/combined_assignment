<?php
// db.php - procedural mysqli connection
$host = 'localhost';
$user = 'root';
$pass = ''; // default XAMPP
$db = 'shopdemo';


$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
die('DB Conn Error: '.mysqli_connect_error());
}


// Start session for auth/cart
if(session_status() === PHP_SESSION_NONE) session_start();