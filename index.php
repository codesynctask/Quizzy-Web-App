<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzt - "Let's challenge our knowledge!!"</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/dashboardo.css">
    <link rel="stylesheet" href="./css/cards.css">
    <link rel="stylesheet" href="./css/intro.css">
    <link rel="stylesheet" href="./css/feedback.css">
    <link rel="stylesheet" href="./css/login_signup_wrapper.css">
</head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    //Functional components
    require "./components/DATABASE/connect_mysql.php";
    require "./components/SESSION_TASK/reset_session_var.php";

    //debuugg
    // var_dump($_SESSION);

    // UI components 
    require "./components/NAV/nav.php";

    if (isset($_SESSION["log_user_data"]["login_success"]) && $_SESSION["log_user_data"]["login_success"]) {
        echo "<script>console.log('user logged in success')</script>";
    } else {
        require "./components/NAV/LOGIN_SIGNUP_WRAPPER/login_signup_wrapper.php";
    }


    require "./components/INTRO_HOME/INTRO.PHP";
    require "./components/DASHBOARD/dashboard.php"; //or intro page
    require "./components/CARD/card.php";
    require "./components/FEEDBACK/feedback.php";
    require "./components/FOOTER/footer.php";
    ?>


    <script src="./js/index.js"></script>
</body>

</html>

</body>

</html>