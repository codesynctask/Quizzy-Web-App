<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leaderboard</title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional: link to an external CSS file -->
  <link rel="stylesheet" href="../../../css/leaderboard.css">
  <link rel="stylesheet" href="../../../css/nav.css">
</head>
<body>

<?php
require "../nav.php";
?>
  <header>
    <h1>Leaderboard</h1>
  </header>

  <div class="container">
    <h2>Top Scorers</h2>
    <p>Check out the top performers in the quiz!</p>

    <!-- Leaderboard Table -->
    <table>
      <thead>
        <tr>
          <th>Rank</th>
          <th>Name</th>
          <th>Score</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="rank">1</td>
          <td>John Doe</td>
          <td>95</td>
          <td>2024-11-10</td>
        </tr>
        <tr>
          <td class="rank">2</td>
          <td>Jane Smith</td>
          <td>90</td>
          <td>2024-11-09</td>
        </tr>
        <tr>
          <td class="rank">3</td>
          <td>Emily Johnson</td>
          <td>85</td>
          <td>2024-11-08</td>
        </tr>
        <tr>
          <td class="rank">4</td>
          <td>Michael Brown</td>
          <td>80</td>
          <td>2024-11-07</td>
        </tr>
        <tr>
          <td class="rank">5</td>
          <td>Sarah Wilson</td>
          <td>75</td>
          <td>2024-11-06</td>
        </tr>
      </tbody>
    </table>
  </div>

  <footer class="footer">
    <p>© 2024 Your Quiz Site. All rights reserved.</p>
  </footer>

</body>
</html>
