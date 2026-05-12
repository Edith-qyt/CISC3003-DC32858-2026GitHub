<?php
include "connect.php";
$token = $_GET['token'];

$conn->query("UPDATE users SET is_verified=1 WHERE token='$token'");
header("Location: ../login.php?success=Email verified! You can login now.");
exit();
?>