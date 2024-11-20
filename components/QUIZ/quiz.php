<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quiz play</title>
  <link rel="stylesheet" href="../../css/index.css" />
  <link rel="stylesheet" href="../../css/quiz.css" />
</head>

<body>
  <?php
  include "../../ADMIN/absolute_root_path.php";
  ?>
  <?php
  // Start the session
  session_start();

  if (isset($_SESSION["log_user_data"]["login_success"]) && $_SESSION["log_user_data"]["login_success"]) {

    // Initialize question index if not set in the session
    if (!isset($_SESSION["question_index"])) {
      $_SESSION["question_index"] = 0;
    }

    include "./useData.php"; //fetching data from where it is stored

    // current question index
    $question_index = $_SESSION["question_index"];
    $question_num = $question_index + 1;

    if ($question_index >= count($quizArray)) {
      header("Location: results_page.php");
      exit();
    }

    //  current question and answers
    $question = $quizArray[$question_index]["question"];
    $correct_answer = $quizArray[$question_index]["correct_answer"];
    $incorrect_answers = $quizArray[$question_index]["incorrect_answers"];

    // merge correct and incorrect answers, => shuffle 
    $total_answer_option = [$correct_answer, ...$incorrect_answers];
    shuffle($total_answer_option);

    // Display the quiz question
    require "./quiz_question.php";
  } else {
    echo "<script>alert('Make sure you are login first')</script>";
    // echo "<h1>Login Not Found</h1>";
    require("../USER/LOGIN/loginHome.php");
    
  }
  ?>

</body>

</html>