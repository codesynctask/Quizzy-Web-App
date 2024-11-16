<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../../../css/index.css"> 
  <link rel="stylesheet" href="../../../css/contact.css">
  <link rel="stylesheet" href="../../../css/nav.css">
  <link rel="stylesheet" href="../../../css/footer.css">
</head>
<body>
  <?php
  require "../nav.php";
  ?>


  <div class="container">
    <h2>We'd love to hear from you!</h2>
    <p>If you have any questions or need assistance, please fill out the form below and we’ll get back to you as soon as possible.</p>

    <form action="./contact_data.php" method="POST">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" required placeholder="Enter your name">

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" required placeholder="Enter your email">

      <label for="message">Your Message</label>
      <textarea id="message" name="message" required placeholder="Write your message here"></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

  <?php
  require "../../FOOTER/footer.php";
  ?>

</body>
</html>
