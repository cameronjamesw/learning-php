<?php
// This is a simple for loop
for ($i = 0; $i < 10; $i++) {
  echo "Hello everyone!! This is the $i increment! <br>";
}

?>

<?php

$friends = ["Jack", "Joe", "Mark", "Tom", "Stuart"];

foreach ($friends as $friend) {
  echo "<p> Hello $friend!! </p>";
};
