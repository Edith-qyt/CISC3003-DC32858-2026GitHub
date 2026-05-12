<?php
include "connect.php";

// A05 接收表单数据
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : "";

// A06 filter 函数验证
$fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if(!$email){
    echo "Invalid Email Format";
    exit;
}

// A07 防SQL注入 + A08 预处理语句
$stmt = $conn->prepare("INSERT INTO user_form (fullname,email,message,gender,course,hobbies) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$fullname,$email,$message,$gender,$course,$hobbies);

// A10 INSERT 执行
if($stmt->execute()){
    echo "Data inserted successfully! <a href='../index.php'>Back to Form</a>";
}else{
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<!-- 页脚 -->
<footer>
    CISC3003 Web Programming: QUYITING DC328581 2026
</footer>