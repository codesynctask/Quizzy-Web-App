<?php
// session
session_start();
// $_SESSION["amount_of_question"]=10;

// API specification
$amount_of_question = $_SESSION["amount_of_question"]??10;
$_SESSION["amount_of_question"] = $amount_of_question;
$type_of_question = "multiple";
$category_of_question = 18; //science-computer
$difficulty_of_question = "easy";

$apiUrl = "https://opentdb.com/api.php?amount=$amount_of_question&category=$category_of_question&difficulty=$difficulty_of_question&type=$type_of_question"; // Replace with actual API URL
$response = file_get_contents($apiUrl);

session_abort();
if ($response !== false) {
  $data = json_decode($response, true);
  $quiz_data = $data["results"];
  
  $file_path = "../../data/quizDATA.json";

  if (file_put_contents($file_path, json_encode($quiz_data))) {
    // saving json res into file
    echo "<script>console.log('JSON data has been successfully saved to " . $file_path . "')</script>";
  } else {
    echo "<script>alert('There was an error saving the JSON data to the file.')</script>";
    header(".\QUIZ_WEB_APPP\index.php");
    header("Location: http://localhost/ARTH/QUIZ_WEB_APPP");
    exit();
  }
} else {
  echo 'Error fetching data from the API';
}
