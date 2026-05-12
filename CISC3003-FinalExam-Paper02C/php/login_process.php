<?php
session_start();
include "connect.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $res = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $res->fetch_assoc();
    
    if (!$user) {
        header("Location: ../login.php?error=User not found");
        exit();
    }
    
    // C08 Must verify email to login
    if ($user['is_verified'] == 0) {
        header("Location: ../login.php?error=Please verify email first!");
        exit();
    }
    
    // Check password
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: ../dashboard.php");
        exit();
    } else {
        header("Location: ../login.php?error=Wrong password");
        exit();
    }
}
?>