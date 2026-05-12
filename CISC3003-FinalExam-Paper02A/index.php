<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scenario A Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>CISC3003 Scenario A Form</h2>
        <form action="php/process.php" method="post">
            <!-- A02 简单文本输入 -->
            <label>Full Name:</label>
            <input type="text" name="fullname" required><br><br>

            <label>Email:</label>
            <input type="email" name="email" required><br><br>

            <!-- A03 多行文本 textarea -->
            <label>Message:</label><br>
            <textarea name="message" rows="5" cols="40"></textarea><br><br>

            <!-- A04 下拉列表 -->
            <label>Course:</label>
            <select name="course">
                <option value="CISC3003">CISC3003</option>
                <option value="CISC3000">CISC3000</option>
                <option value="Project Management">Project Management</option>
            </select><br><br>

            <!-- A04 单选按钮 -->
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female<br><br>

            <!-- A04 复选框 -->
            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="Coding"> Coding
            <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br><br>

            <input type="submit" value="Submit Form" class="btn">
        </form>
    </div>

    <!-- 页脚 必加，缺了0分 -->
    <footer>
    	CISC3003 Web Programming: QUYITING DC328581 2026
    </footer>
</body>
</html>