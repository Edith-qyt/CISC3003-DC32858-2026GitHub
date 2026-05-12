<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="box">
    <h2>Register</h2>
    <form id="registerForm" action="php/register_process.php" method="post">
        <input type="text" name="name" id="name" placeholder="Name" required><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <div id="emailCheck"></div>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <button type="submit" name="register">Register</button>
    </form>
</div>

<script>
// C05 Browser validation with JavaScript
document.getElementById("registerForm").addEventListener("submit", function(e) {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pwd = document.getElementById("password").value;

    if (name.length < 2) {
        alert("Name too short");
        e.preventDefault();
    }
    if (!email.includes("@")) {
        alert("Invalid email");
        e.preventDefault();
    }
    if (pwd.length < 6) {
        alert("Password at least 6 chars");
        e.preventDefault();
    }
});

// C06 Ajax email check
document.getElementById("email").onblur = function() {
    let email = this.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/check_email.php", true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.onload = function() {
        document.getElementById("emailCheck").innerHTML = this.responseText;
    };
    xhr.send("email="+email);
};

    <script src="js/script.js"></script>
    <footer>CISC3003 Web Programming: QUYTING DC328581 2026</footer>
</body>
</html>