<?php
session_start();

if (!isset($_SESSION["user_answer_array"])) {
    $_SESSION["user_answer_array"] = [];
}

// Process the user's answer for the current question
foreach ($_POST as $key => $value) {
    // Append the user's answer to the session array
    $_SESSION["user_answer_array"][$key] = $value;
}

// if this is the last question 
if ($_SESSION["question_index"] == 9) {
    header("Location: ./result.php");
    exit();
}

$_SESSION["question_index"] += 1; //update question number

// back again 
header("Location: ./quiz.php");
exit();
