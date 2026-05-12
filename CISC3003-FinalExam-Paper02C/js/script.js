document.getElementById("registerForm").addEventListener("submit", function(e) {
    let email = document.getElementById("email").value;
    if (!email.includes("@")) {
        alert("Invalid email!");
        e.preventDefault();
    }
});