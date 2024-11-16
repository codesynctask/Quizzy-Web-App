<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/loginHome.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <title>Login portal</title>
</head>

<body>
    <?php
    require "../../NAV/nav.php";
    ?>
    
    <header>
        <h2>Login Page</h2>
    </header>
    <div id="container">
        <form method="POST" action="./login_data.php" id="login">
            <div><label for="email">Email:</label><br>
                <input type="email" id="email" name="user_mail" required><br><br>
            </div>
            <div><label for="password">Password:</label><br>
                <input type="password" id="password" name="user_pass" required><br><br>
            </div>
            <button>Log In</button>
        </form>
    </div>

    <?php
    require "../../FOOTER/footer.php";
    ?>
</body>

</html>