<?php
include "connect.php";
$email = $_POST['email'];

$res = $conn->query("SELECT * FROM users WHERE email='$email'");
if($res->num_rows > 0) {
    echo "<span style='color:red'>Email already exists!</span>";
} else {
    echo "<span style='color:green'>Email available</span>";
}
?>