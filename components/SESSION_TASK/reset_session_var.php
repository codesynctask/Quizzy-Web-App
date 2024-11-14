<?php
// Check if session is already started
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

// Reset session variables to their initial state
$_SESSION["question_index"] = 0;
$_SESSION["user_answer_array"] = [];
$_SESSION["amount_of_question"] = 10; 
$_SESSION["user_marks"] = 0; 
?>

