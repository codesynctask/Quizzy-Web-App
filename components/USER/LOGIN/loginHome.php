<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../css/loginHome.css">
    <title>Login portal</title>
</head>

<body>
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

    <footer>
        <p>© 2024 Your Quiz Site. All rights reserved.</p>
    </footer>
</body>

</html>