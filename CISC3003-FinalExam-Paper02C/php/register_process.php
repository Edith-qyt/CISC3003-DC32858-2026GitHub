<?php
include "connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../php/PHPMailer/src/Exception.php';
require '../php/PHPMailer/src/PHPMailer.php';
require '../php/PHPMailer/src/SMTP.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(16));
    
    // Check duplicate
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        header("Location: ../register.php?error=Email exists");
        exit();
    }
    
    // Insert with token (need verify)
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, token, is_verified)
    VALUES (?,?,?,?,0)");
    $stmt->bind_param("ssss", $name, $email, $password, $token);
    $stmt->execute();
    
    // ------------------------------
    // Send verification email (C08)
    // ------------------------------
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
    $mail->Subject = "Verify Email";
    // 把原来的 HTML 链接改成纯文本
    $mail->Body = "Please verify your email by copying this link to your browser:\n"
        . "http://localhost/CISC3003-FinalExam-Paper02C/php/verify.php?token=$token";
    $mail->AltBody = "Please verify your email by copying this link to your browser:\n"
        . "http://localhost/CISC3003-FinalExam-Paper02C/php/verify.php?token=$token";$mail->send();
    
    header("Location: ../login.php?success=Please check email to verify");
    exit();
}
?>