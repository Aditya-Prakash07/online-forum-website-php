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

    $username = $_POST['name'];
    $email = $_POST['signupEmail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if email already exists
    $existSql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
        $showError = "Email ID already exists.";
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `timestamp`) VALUES ('$username', '$email', '$hash', CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: /index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showError = "Passwords do not match.";
        }
    }

    // Redirect if an error occurs
    header("Location: /index.php?signupsuccess=false&error=" . urlencode($showError));
    exit();
}
?>
