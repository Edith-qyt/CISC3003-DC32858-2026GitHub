<?php
// Database Connection - Scenario A
$host = 'localhost';
$dbname = 'cisc3003_scenario_a';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>