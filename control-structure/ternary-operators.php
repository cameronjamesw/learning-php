<?php

//Ternary Operators
//Ternary operators are a shorthand way of writing if-else statements.
//They are often used to assign a value to a variable based on a condition.

//The syntax is as follows:
//condition ? value_if_true : value_if_false;

//Example:
$is_logged_in = true;
$has_permission = false;
$has_access = true;
$access_message = $is_logged_in ? "Welcome back!" : "Please log in.";
echo $access_message . "\n";

//Example with HTML
$is_logged_in = true;
$has_permission = false;
$has_access = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ternary Operators</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Ternary Operators</h1>
  <p><?php echo $is_logged_in ? "Welcome back!" : "Please log in."; ?></p>
  <p><?php echo $has_permission ? "You have permission to access this page." : "You do not have permission to access this page."; ?></p>
  <p><?php echo $has_access ? "You have access to this page." : "You do not have access to this page."; ?></p>
  <p><?php echo $is_logged_in && $has_permission ? "You have access to this page." : "You do not have permission to access this page."; ?></p>
</body>

</html>
<?php
