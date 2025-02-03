<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$showError = false;
$showAlert = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if _dbconnect.php exists before including
    if (!file_exists('_dbconnect.php')) {
        die("Error: _dbconnect.php file not found!");
    }

    include '_dbconnect.php';

    // Check if $conn is set
    if (!$conn) {
        die("Error: Database connection not established.");
    }
    $email = $_POST['loginEmail'];
    $password = $_POST['password'];

    // Check if email already exists
    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
       $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row['user_password'])){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            $_SESSION['username']=$row['user_name'];
            header("Location: /index.php?loginsuccess=true");
            exit();
       }
    } 

        // Redirect if an error occurs
        header("Location: /index.php?loginsuccess=false&error=" . urlencode($showError));
        exit();
}
?>
