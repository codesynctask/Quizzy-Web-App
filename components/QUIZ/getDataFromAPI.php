<?php
$api_url = 'https://opentdb.com/api.php?amount=10&category=18&difficulty=medium&type=multiple'; 
$file_path_to_store = "C:/wamp64/www/ARTH/QUIZ_WEB_APPP/data/quizDATA.json";  

// Fetch data from API
$jsonString = file_get_contents($api_url);

// Decode JSON response into a PHP associative array
$quizData = json_decode($jsonString, true);

// Convert the PHP array back to JSON format
$jsonDataToStore = json_encode($quizData, JSON_PRETTY_PRINT);

// Write the JSON data to the file
if (file_put_contents($file_path_to_store, $jsonDataToStore)) {
    echo "<script>console.log('Data written to file successfully after fetching from api');</script>";
} else {
    echo "<script>console.log('Failed to write data to file after fetching from api');</script>";
}
?>
