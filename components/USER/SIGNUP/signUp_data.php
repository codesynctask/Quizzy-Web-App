<?php
var_dump($_POST);
require "../../DATABASE/connect_mysql.php";

$user_name = $_POST["username"];
$user_pass = $_POST["password"];
$user_mail = $_POST["usermail"];
$user_bio = $_POST["userbio"];

// if data already exist redirect agin to login
$sql_read = "SELECT * FROM `quiz_web_app_user` WHERE `user_name` = '$user_name' AND `user_mail` = '$user_mail' AND `user_password`='$user_pass'";

$sql_insert = "INSERT INTO `quiz_web_app_user`(`user_name`, `user_completed_quiz`, `user_total_score`, `user_mail`, `user_bio`, `user_id`, `user_password`) VALUES ('$user_name','','','$user_mail','$user_bio','','$user_pass')";


$read_result = mysqli_query($conn, $sql_read);
if (mysqli_num_rows($read_result) > 0) {
    echo "read_result";
    header("Location:../LOGIN/loginHome.php");
    exit();
} else {

    if (mysqli_query($conn, $sql_insert)) {
        echo "New record created successfully";
        header("Location:../LOGIN/loginHome.php");
        exit();
    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
}





// Close connection
mysqli_close($conn);
