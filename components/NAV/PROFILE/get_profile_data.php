<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "C:\wamp64\www\ARTH\QUIZ_WEB_APPP\components\DATABASE\connect_mysql.php";
if (isset($_SESSION["log_user_data"])) {
    $sql_read = "SELECT * FROM `quiz_web_app_user` WHERE `user_mail` = '" . $_SESSION["log_user_data"]["mail"] . "' AND `user_password` = '" . $_SESSION["log_user_data"]["pass"] . "'";
    $set_user_average_sql = "UPDATE `quiz_web_app_user` SET `user_average_score` = IF(`user_completed_quiz` > 0, `user_total_score` / `user_completed_quiz`, 0)";
    $set_user_average_sql = $conn->query($set_user_average_sql); 
    $read_result = $conn->query($sql_read);

    if ($read_result->num_rows > 0) {
        // getting data from each row
        while ($row = $read_result->fetch_assoc()) {
            // var_dump($row);
            $user_name = $row["user_name"];
            $user_completed_quiz = $row["user_completed_quiz"];
            $user_total_score = $row["user_total_score"];
            $user_mail = $row["user_mail"];
            $user_bio = $row["user_bio"];
            $user_id = $row["user_id"];
            $user_password = $row["user_password"];
        }
    } else {
        echo "<script>console.log('No data found from database')</script>";
    }
} else {
    $user_name = "Not Found";
    $user_completed_quiz = "nill";
    $user_total_score = "nill";
    $user_mail = "nill";
    $user_bio = "nill";
    $user_id = "nill";
    $user_password = "nill";
}
