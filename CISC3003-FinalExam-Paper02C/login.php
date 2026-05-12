<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <?php if (isset($_GET['success'])) echo "<div class='success'>".$_GET['success']."</div>"; ?>
        <?php if (isset($_GET['error'])) echo "<div class='error'>".$_GET['error']."</div>"; ?>
        
        <form action="php/login_process.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login" class="btn">Login</button>
        </form>
        <br>
        <a href="forgot.php">Forgot Password?</a>
    </div>

    <footer>CISC3003 Web Programming: QUYITING DC328581 2026</footer>
</body>
</html>