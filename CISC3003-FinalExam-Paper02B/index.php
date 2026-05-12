<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scenario B - Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>CISC3003 Scenario B - Contact Form</h2>

        <!-- B01 HTML Form + Client-side Validation -->
        <form action="php/send_email.php" method="post" onsubmit="return validateForm()">
            <label>Your Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label>Your Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label>Subject:</label>
            <input type="text" id="subject" name="subject" required><br><br>

            <label>Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <button type="submit" name="send" class="btn">Send Message</button>
        </form>
    </div>

    <!-- B05 JavaScript Validation -->
    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let msg = document.getElementById("message").value;

            if (name == "" || email == "" || msg == "") {
                alert("Please fill all fields!");
                return false;
            }
            return true;
        }
    </script>

    <!-- 必加页脚 -->
    <footer>
        CISC3003 Web Programming: QUYITING DC328581 + 2026
    </footer>
</body>
</html>