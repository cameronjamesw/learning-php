<?php

$status = 2;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenge 2</title>
</head>

<body>
  <div>
    <p>
      <?php
      if ($status === 0) :
        echo "You must log in or create an account.";
      elseif ($status === 1) :
        echo "Welcome back!";
      elseif ($status === 2) :
        echo "Welcome back, you have admin access.";
      endif;
      ?>
    </p>
  </div>
</body>

</html>