<h1>Our top 3 participants</h1>
<div id="card_cont">
    <?php
        require "C:\wamp64\www\ARTH\QUIZ_WEB_APPP\components\DATABASE\connect_mysql.php";

        $set_user_average_sql = "UPDATE `quiz_web_app_user` SET `user_average_score` = IF(`user_completed_quiz` > 0, `user_total_score` / `user_completed_quiz`, 0)";
        $sql_read = "SELECT `user_name` , `user_average_score` FROM `quiz_web_app_user` ORDER BY `user_average_score` DESC LIMIT 3;";

        $set_average_result = $conn->query($set_user_average_sql);
        $read_result = $conn->query($sql_read);

        if ($read_result->num_rows > 0) {
            // getting data from fetched each row
            while ($row = $read_result->fetch_assoc()) {
                // echo $row["user_name"] . "<br>";
                echo "<div class='card'><img src='https://cdn-icons-png.flaticon.com/512/21/21104.png' alt='user Profile pic'><h3>".$row["user_name"]."</h3></div>";
            }
        } else {
            echo "<script>console.log('failed to get top 3 users')</script>";
        }
    ?>
</div>


