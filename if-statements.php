<?php

// PHP if statements

$is_logged_in = true;
$has_permission = false;
$has_access = true;

if ($is_logged_in) {
  echo "Welcome back!";
} else {
  echo "Please log in.";
}
echo "\n";

if ($is_logged_in && $has_permission) {
  echo "You have access to this page.";
} else {
  echo "You do not have access to this page.";
}
echo "\n\n";

// Alternative syntax

if ($is_logged_in) :
  echo "Welcome back! (Alternative syntax)";
else :
  echo "Please log in. (Alternative syntax)";
endif;
echo "\n";

// Alternative syntax with HTML

if ($is_logged_in) : ?>
  <h1>Welcome back!</h1>
<?php else : ?>
  <h1>Please log in.</h1>
<?php endif; ?>

<?php
// Conditional statements with HTML
$is_logged_in = true;
$has_permission = false;
$has_access = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional Statements</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Conditional Statements</h1>
  <?php if ($is_logged_in) : ?>
    <p>Welcome back!</p>
  <?php else : ?>
    <p>Please log in.</p>
  <?php endif; ?>

  <?php if ($is_logged_in && $has_permission) : ?>
    <p>You have access to this page.</p>
  <?php else : ?>
    <p>You do not have permission to access this page.</p>
  <?php endif; ?>
  <?php if ($has_access) : ?>
    <p>You have access to this page.</p>
  <?php else : ?>
    <p>You do not have access to this page.</p>
  <?php endif; ?>
</body>

</html>