<?php include_once '../functions_objects/objects.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Customer Information</h1>
  <h2>Welcome back <?php echo $cam->first_name ?></h2>
  <p>Full Name: <?php echo $cam->getFullName(); ?></p>
  <p>Email: <?php echo $cam->email; ?></p>
  <p>Phone: <?php echo $cam->phone; ?></p>
  <p>Subscribed: <?php echo $cam->is_subscribed ? 'Yes' : 'No'; ?></p>
</body>

</html>