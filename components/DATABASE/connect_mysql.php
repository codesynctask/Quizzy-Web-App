<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "quiz_web_app"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<script>console.log('mySQL Connected successfully')</script>";

// $conn->close();
?>
