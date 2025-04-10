<?php
// Match Statements
// Match statements are a new feature in PHP 8.0 that provide a more 
// concise and expressive way to handle conditional logic.
// They are similar to switch statements but with some key differences:
// 1. Match statements do not require break statements.
// 2. Match statements can return values.
// 3. Match statements can use strict type comparisons.
// 4. Match statements can handle multiple conditions in a single case.
//
// The syntax is as follows:
// match (expression) {
//   case value1:
//     // code to be executed if expression equals value1
//     break;
//   case value2:
//     // code to be executed if expression equals value2
//     break;
//   ...
//   default:
//     // code to be executed if expression doesn't match any case
// }
//
// Example:
$day = "Monday";
$day_message = match ($day) {
  "Monday" => "Today is Monday.",
  "Tuesday" => "Today is Tuesday.",
  "Wednesday" => "Today is Wednesday.",
  "Thursday" => "Today is Thursday.",
  "Friday" => "Today is Friday.",
  "Saturday" => "Today is Saturday.",
  "Sunday" => "Today is Sunday.",
  default => "Invalid day."
};
echo $day_message . "\n";

// Another example
$age = 25;
$age_group = match (true) {
  $age < 13 => "Child",
  $age < 20 => "Teenager",
  $age < 65 => "Adult",
  default => "Senior"
};
echo "You are in the $age_group age group." . "\n";

// Example with HTML
$day = "Monday";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Match Statements</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Match Statements</h1>
  <div>
    <?php
    $day_message = match ($day) {
      "Monday" => "<h1>Today is Monday.</h1>",
      "Tuesday" => "Today is Tuesday.",
      "Wednesday" => "Today is Wednesday.",
      "Thursday" => "Today is Thursday.",
      "Friday" => "Today is Friday.",
      "Saturday" => "Today is Saturday.",
      "Sunday" => "Today is Sunday.",
      default => "Invalid day."
    };
    echo $day_message;
    ?>
  </div>
  <p>
    <?php
    $age = 25;
    $age_group = match (true) {
      $age < 13 => "Child",
      $age < 20 => "Teenager",
      $age < 65 => "Adult",
      default => "Senior"
    };
    echo "You are in the $age_group age group.";
    ?>
  </p>
</body>

</html>