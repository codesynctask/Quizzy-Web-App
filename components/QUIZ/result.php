<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="../../css/result.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
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

    // if answer array is not empty
    if (count($_SESSION["user_answer_array"]) > 0) {
        // Calculating user score
        $user_correct_marks_got = 0;
        for ($i = 0; $i < 10; $i++) {
            if (isset($_SESSION["user_answer_array"][$i])) {
                if ($_SESSION["user_answer_array"][$i] == $quizArray[$i]["correct_answer"]) {
                    ++$user_correct_marks_got;
                }
            }
        }

        // Store the correct answers in session
        $_SESSION["user_marks"] = $user_correct_marks_got;
        echo "<h2>Your Score: " . $user_correct_marks_got . "/10</h2>";

    ?>

        <table>
            <tr>
                <th>Questions</th>
                <th>Your Answer</th>
                <th>Correct Answer</th>
                <th>Status</th>
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

    <?php
        require "../NAV/PROFILE/get_profile_data.php"; //get loggeed user data from db
        // if user answer array is greater than 0
        $user_completed_quiz++;
        $user_total_score += $user_correct_marks_got;

        $sql_update = "UPDATE `quiz_web_app_user` SET `user_completed_quiz` = '$user_completed_quiz', `user_total_score` = '$user_total_score' WHERE `user_mail` = '" . $_SESSION["log_user_data"]["mail"] . "' AND `user_password` = '" . $_SESSION["log_user_data"]["pass"] . "'";
        $set_user_average_sql = "UPDATE `quiz_web_app_user` SET `user_average_score` = IF(`user_completed_quiz` > 0, `user_total_score` / `user_completed_quiz`, 0)";
        

        $write_result = $conn->query($sql_update); 
        $set_average_result = $conn->query($set_user_average_sql); 

        if ($write_result) {
            echo "<script>console.log('user Data Updated')</script>";
        } else {
            echo "<script>console.log('user data not updated!!')</script>";
        }

        require "../SESSION_TASK/reset_session_var.php"; //reset quiz session
        require "./getDataFromAPI.php"; //reset question again

    } else {
        echo "<script>alert('answer key not found ')</script>";
        echo '<div class="answer-error"><h1>Start quiz again to see result!</h1></div>';
    }

    require "../FOOTER/footer.php";

    ?>

</body>

</html>