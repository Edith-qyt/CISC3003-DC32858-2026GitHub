<?php session_start(); if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="dash">
        <h1>Welcome, <?=$_SESSION['user']['name']?></h1>
        <p>Registered on: <?=$_SESSION['user']['created_at']?></p>
        <a href="php/logout.php" class="btn">Logout</a>
    </div>

    <footer>CISC3003 Web Programming: QUYITING DC328581 2026</footer>
</body>
</html>