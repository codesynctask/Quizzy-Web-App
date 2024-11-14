<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="../../../css/profile.css"> <!-- Optional: link to an external CSS file -->
  <link rel="stylesheet" href="../../../css/nav.css"> <!-- Optional: link to an external CSS file -->
  
</head>
<body>
  <?php
  require "../nav.php";


?>

  <header>
    <h1>User Profile</h1>
  </header>

  <div class="container">
    <!-- Profile Header Section -->
    <div class="profile-header">
      <img src="https://wallpapers.com/images/hd/fierce-son-goku-60yc481rwik8mc5q.jpg" alt="User's Profile Picture">
      <div>
        <h2>John Doe</h2>
        <p>Joined: January 2024</p>
      </div>
    </div>

    <!-- Stats Section -->
    <div class="stats">
      <div class="stat-box">
        <h3>Completed Quizzes</h3>
        <p>15</p>
      </div>
      <div class="stat-box">
        <h3>Total Score</h3>
        <p>1350</p>
      </div>
      <div class="stat-box">
        <h3>Ranking</h3>
        <p>#5</p>
      </div>
    </div>

    <!-- Profile Information Section -->
    <div class="profile-info">
      <label for="email">Email</label>
      <p>john.doe@example.com</p>

      <label for="location">Location</label>
      <p>New York, USA</p>

      <label for="bio">Biography</label>
      <p>Passionate about mathematics and science. Loves taking quizzes and learning new things every day!</p>
    </div>

    <!-- Action Buttons -->
    <div class="button-container">
      <button class="btn">Edit Profile</button>
      <button class="btn">Change Password</button>
    </div>
  </div>
 
  <footer>
    <p>© 2024 Your Quiz Site. All rights reserved.</p>
  </footer>

</body>
</html>
