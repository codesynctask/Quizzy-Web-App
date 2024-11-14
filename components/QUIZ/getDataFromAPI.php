<?php
$api_url = 'https://opentdb.com/api.php?amount=10&category=18&difficulty=medium&type=multiple'; 
$file_path_to_store = "C:/wamp64/www/ARTH/QUIZ_WEB_APPP/data/quizDATA.json";  

// Fetch data from API
$jsonString = file_get_contents($api_url);

// Decode JSON response into a PHP associative array
$quizData = json_decode($jsonString, true);

echo "<script>console.log('Got data and stored in file from api')</script>";
?>
