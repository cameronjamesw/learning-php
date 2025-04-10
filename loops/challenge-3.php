<?php

// Printing the fibonacci series

$a = 0;
$b = 1;

echo "Fibonacci series: \n";

for ($i = 0; $a < 200; $i++) {
  echo "$a ";
  $c = $a + $b;
  $a = $b;
  $b = $c;
};
