<?php
require_once 'functions.php';
// This file is used to handle form submissions and display the results

if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    if (is_array($value)) {
      echo "<strong>$key:</strong> " . implode(", ", $value) . "<br>";
    } else {
      echo "<strong>$key:</strong> $value<br>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Working with Forms</title>
</head>

<body>
  <h2>Working with Forms</h2>
  <form name="customer_form" method="POST" action="forms.php">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <p>Prefered Languages:</p>
    <label for="HTML"><input type="checkbox" id="HTML" name="languages[]" value="HTML">HTML</label>
    <label for="CSS"><input type="checkbox" id="CSS" name="languages[]" value="CSS">CSS</label>
    <label for="JavaScript"><input type="checkbox" id="JavaScript" name="languages[]" value="JavaScript">JavaScript</label>
    <label for="PHP"><input type="checkbox" id="PHP" name="languages[]" value="PHP">PHP</label><br><br>

    <label for="subscribe">Subscribe to newsletter:</label>
    <input type="checkbox" id="subscribe" name="subscribe"><br><br>

    <input type="submit" value="Submit">
  </form>
</body>

</html>