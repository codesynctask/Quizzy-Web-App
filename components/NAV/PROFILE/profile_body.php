<div class="container">
  <!-- Profile Header Section -->
  <div class="profile-header">
    <img src="https://wallpapers.com/images/hd/fierce-son-goku-60yc481rwik8mc5q.jpg" alt="User's Profile Picture">
    <div>
      <?php
      if ($user_name) {
        echo "<h2>$user_name</h2>";
      } else {
        echo "<h2>User Not founded</h2>";
      }
      ?>
    </div>
  </div>

  <!-- Stats Section -->
  <div class="stats">
    <div class="stat-box">
      <?php
      if ($user_completed_quiz >= 0) {
        echo "<h3>Completed Quizzes</h3>";
        echo "<p>$user_completed_quiz</p>";
      } else {
        echo "<h2>Completed Quizzes</h2>";
        echo "<p>Nill</p>";
      }
      ?>

    </div>
    <div class="stat-box">
      <?php
      if ($user_total_score >= 0) {
        echo "<h3>Total Score (max : " . ($user_completed_quiz * 10) . ")</h3>";
        echo "<p>$user_total_score</p>";
      } else {
        echo "<h2>Total Score</h2>";
        echo "<p>Nill</p>";
      }
      ?>
    </div>
    <div class="stat-box">
      <h3>Average Marks</h3>
      <?php
        if ($user_completed_quiz == 0 or $user_total_score == 0) {
          echo "<p>Nill</p>";
      } else {
        echo "<p>" . round(num: $user_total_score / $user_completed_quiz) . "/10 </p>";
      }
      ?>
    </div>
  </div>

  <!-- Profile Information Section -->
  <div class="profile-info">
    <label for="email">Email</label>
    <?php
    if ($user_mail) {
      echo "<p>$user_mail</p>";
    } else {
      echo "<p>Nill</p>";
    }
    ?>


    <label for="bio">Biography</label>
    <?php
    if ($user_bio) {
      echo "<p>$user_bio</p>";
    } else {
      echo "<p>Nill</p>";
    }
    ?>
  </div>

  <!-- Action Buttons -->
  <div class="button-container">
    <a href=""><button>Edit Profile</button></a>
    <a href="../../USER/LOGOUT/logout_confirm.php"><button>Log Out</button></a>
  </div>
</div>