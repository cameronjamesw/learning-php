<?php
// Switch Statements

// Switch statements are used to execute one block of code among many alternatives.
// They are often used when you have multiple conditions to check against a single variable.
// The syntax is as follows:
// switch (variable) {
//   case value1:
//     // code to be executed if variable equals value1
//     break;
//   case value2:
//     // code to be executed if variable equals value2
//     break;
//   ...
//   default:
//     // code to be executed if variable doesn't match any case
// }
//
// Example:
$day = "Monday";
switch ($day) {
  case "Monday":
    echo "Today is Monday.";
    break;
  case "Tuesday":
    echo "Today is Tuesday.";
    break;
  case "Wednesday":
    echo "Today is Wednesday.";
    break;
  case "Thursday":
    echo "Today is Thursday.";
    break;
  case "Friday":
    echo "Today is Friday.";
    break;
  case "Saturday":
    echo "Today is Saturday.";
    break;
  case "Sunday":
    echo "Today is Sunday.";
    break;
  default:
    echo "Invalid day.";
}
echo "\n";

// Example with HTML
$day = "Monday";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Statements</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Switch Statements</h1>
  <p>
    <?php
    switch ($day) {
      case "Monday":
        echo "Today is Monday.";
        break;
      case "Tuesday":
        echo "Today is Tuesday.";
        break;
      case "Wednesday":
        echo "Today is Wednesday.";
        break;
      case "Thursday":
        echo "Today is Thursday.";
        break;
      case "Friday":
        echo "Today is Friday.";
        break;
      case "Saturday":
        echo "Today is Saturday.";
        break;
      case "Sunday":
        echo "Today is Sunday.";
        break;
      default:
        echo "Invalid day.";
    }
    ?>
  </p>
</body>

</html>