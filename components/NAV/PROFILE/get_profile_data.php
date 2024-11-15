<?php
require "C:\wamp64\www\ARTH\QUIZ_WEB_APPP\components\DATABASE\connect_mysql.php";

$sql_read = "SELECT * FROM `quiz_web_app_user` WHERE `user_mail` = 'deepak92059sharma@gmail.com' AND `user_password` = '123'";

$read_result = $conn->query($sql_read);

if ($read_result->num_rows > 0) {
    // getting data from each row
    while($row = $read_result->fetch_assoc()) {
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
