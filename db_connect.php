<?php


session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


$servername = "localhost";
$username = "root";
$password= "";
$dbname = "minishop";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

?>