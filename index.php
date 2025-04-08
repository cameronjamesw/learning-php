<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>

<body>
  <?php
  $user = 'Cameron';
  define('MESSAGE', 'Welcome, how are you today, ')
  ?>
  <div>
    <h1><?php echo MESSAGE, $user; ?></h1>
  </div>
</body>

</html>