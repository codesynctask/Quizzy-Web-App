<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="../../css/result1.css">
    <link rel="stylesheet" href="../../css/nav.css">
</head>

<body>
    <?php
    session_start();
    require "../NAV/nav.php"; //getting navbar

    include "./useData.php"; //using $quizArray

    // Initialize user marks if not set
    if (!isset($_SESSION["user_marks"])) {
        $_SESSION["user_marks"] = 0;
    }

    // Initialize user answers array if not set
    if (!isset($_SESSION["user_answer_array"])) {
        $_SESSION["user_answer_array"] = [];
    }

    // Calculating user score
    $correctAnswers = 0;
    for ($i = 0; $i < 10; $i++) {
        if (isset($_SESSION["user_answer_array"][$i])) {
            if ($_SESSION["user_answer_array"][$i] == $quizArray[$i]["correct_answer"]) {
                ++$correctAnswers;
            }
        }
    }

    // Store the correct answers in session
    $_SESSION["user_marks"] = $correctAnswers;
    echo "<h2>Your Score: " . $correctAnswers . "/10</h2>";

    ?>

    <table>
        <tr>
            <th>Questions</th>
            <th>Your Answer</th>
            <th>Correct Answer</th>
            <th>Status</th> <!-- Add the "Status" column -->
        </tr>
        <?php
        for ($i = 0; $i < 10; $i++) {
            $userAnswer = isset($_SESSION["user_answer_array"][$i]) ? $_SESSION["user_answer_array"][$i] : "Not Answered";
            $correctAnswer = $quizArray[$i]["correct_answer"];
            $status = ($userAnswer == $correctAnswer) ? "Correct" : "Incorrect";

            echo "
            <tr>
                <td>" . ($i + 1) . ". " . $quizArray[$i]["question"] . "</td>
                <td>" . $userAnswer . "</td>
                <td>" . $correctAnswer . "</td>
                <td>" . $status . "</td> 
            </tr>";
        }
        ?>
    </table>

    <footer>
        <p>© 2024 .Quizz. All rights reserved.</p>
    </footer>

    <?php
    require "../SESSION_TASK/reset_session_var.php"; //reset quiz session
    require "./getDataFromAPI.php"; //reset question again


    ?>

</body>

</html>