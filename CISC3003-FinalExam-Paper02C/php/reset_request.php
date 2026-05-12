<?php
include "connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../php/PHPMailer/src/Exception.php';
require '../php/PHPMailer/src/PHPMailer.php';
require '../php/PHPMailer/src/SMTP.php';

if (isset($_POST['sendReset'])) {
    $email = $_POST['email'];
    $user = $conn->query("SELECT * FROM users WHERE email='$email'")->fetch_assoc();
    if (!$user) {
        header("Location: ../forgot.php?error=Email not found");
        exit();
    }
    
    $token = bin2hex(random_bytes(16));
    $conn->query("UPDATE users SET reset_token='$token' WHERE email='$email'");
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.qq.com';
    $mail->SMTPAuth = true;
    $mail->Username = '3139690069@qq.com';
    $mail->Password = 'dysjpwrmmfksdehh';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    
    $mail->setFrom('3139690069@qq.com', 'CISC3003');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Reset Password";
    $mail->Body = "Reset here: <a href='http://localhost/CISC3003-FinalExam-Paper02C/reset_password.php?token=$token'>Click to Reset</a>";
    $mail->send();
    
    header("Location: ../login.php?success=Reset link sent to email");
    exit();
}
?>