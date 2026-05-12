<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // B03 Send Email with PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // B02 PHPMailer Config
        $mail->isSMTP();
        $mail->Host = 'smtp.qq.com';
        $mail->SMTPAuth = true;
        $mail->Username = '3139690069@qq.com'; // 你的Gmail
        $mail->Password = 'dysjpwrmmfksdehh';    // 你的Gmail应用密码
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->setFrom($email, $name);
        $mail->addAddress('3139690069@qq.com');
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message";
        
        $mail->send();
        
        // B05 Post/Redirect/Get Pattern
        header("Location: ../index.php?status=success");
        exit();
    }
    // B04 Debug Email Errors
    catch (Exception $e) {
        header("Location: ../index.php?status=error&detail=" . $mail->ErrorInfo);
        exit();
    }
}
?>