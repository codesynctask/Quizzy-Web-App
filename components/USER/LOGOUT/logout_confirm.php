<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel="stylesheet" href="../../../css/logout.css">
    
    
    <title>Confirm Logout!!</title>
</head>
<body>
    <form action="./logout.php" method="post" id="logout_form">
        <h1>Are you sure you want to logout?</h1>
        <div id="confirm_container">
            <input type="radio" value="Yes" id="logout" name="confirm_logout">
            <label for="logout">Yes</label>
            <input type="radio" value="No" id="cancel" name="confirm_logout">
            <label for="cancel">No</label>
        </div>
        <br>
        <input type="submit" value="Confirm" id="confirm_logout">
    </form>
</body>
</html>