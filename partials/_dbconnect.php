<?php
$server = "127.0.0.1";
$username = "admin";
$password = "admin123";
$database = "forumhive_db";
$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    echo "connection successful";
}else{
    die("connection error".mysqli_connect_error());
}
?>