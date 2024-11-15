<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require "../../DATABASE/connect_mysql.php";
//getting data from post
$user_mail = $_POST["user_mail"];
$user_pass = $_POST["user_pass"];

$sql_read = "SELECT `user_mail`, `user_password` FROM `quiz_web_app_user` WHERE `user_mail`='$user_mail' AND `user_password` = '$user_pass'";

$read_result = mysqli_query($conn, $sql_read);

if (mysqli_num_rows($read_result)) {
    echo mysqli_num_rows($read_result);
    //setting login session
    $_SESSION["log_user_data"] = [
        "mail" => $user_mail,
        "pass" => $user_pass,
        "login_success" => true
    ];
    header("Location: ../../../index.php");
    exit();
} else {
    echo "<script>console.log('user Not found with email = $user_mail and pass = $user_pass')</script>";
    header("Location: ../SIGNUP/signUpHome.php");
    exit();
}
