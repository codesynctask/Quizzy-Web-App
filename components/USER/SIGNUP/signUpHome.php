<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../css/signUpHome.css">
    <title>Sign Up portal</title>
</head>

<body>
    <header>
        <h2>Sign Up Page</h2>
    </header>
    <div id="container">
        <form method="POST" action="./signUp_data.php" id="login">
            <div><label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br><br>
            </div>
            <div><label for="usermail">Mail:</label><br>
                <input type="mail" id="usermail" name="usermail" required><br><br>
            </div>
            <div><label for="userbio">User Bio:</label><br>
                <input type="text" id="userbio" name="userbio" required><br><br>
            </div>
            <div><label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
            </div>
            <button>Sign Up</button>
        </form>
    </div>

    <footer>
        <p>© 2024 Your Quiz Site. All rights reserved.</p>
    </footer>
</body>

</html>