<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="../../../css/profile.css">
  <link rel="stylesheet" href="../../../css/index.css">
  <link rel="stylesheet" href="../../../css/nav.css">
  <link rel="stylesheet" href="../../../css/footer.css">
</head>

<body>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  require "./get_profile_data.php";

  require "../nav.php";

  if (isset($_SESSION["log_user_data"]["login_success"]) && $_SESSION["log_user_data"]["login_success"]) {
    require "./profile_body.php";
    echo "<script>console.log('user logged in success')</script>";
  } else {
    echo "<script>alert('Make sure you are login first')</script>";
    echo '<div class="login-error"><h1>Login Not Found</h1></div>';
  }

  require "../../FOOTER/footer.php";
  ?>

</body>

</html>