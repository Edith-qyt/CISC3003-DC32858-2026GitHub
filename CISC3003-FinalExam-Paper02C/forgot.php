<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="box">
    <h2>Forgot Password</h2>
    <form action="php/reset_request.php" method="post">
        <input type="email" name="email" placeholder="Your Email" required><br>
        <button type="submit" name="sendReset">Send Reset Link</button>
    </form>
</div>

<footer>CISC3003 Web Programming: QUYTING DC328581 2026</footer>
</body>
</html>