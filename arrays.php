<?php
// Index Arrays

$languages = array('PHP', 'Python', 'HTML', 'CSS', 'JavaScript');

print_r($languages);

echo $languages[3];

$languages[] = 'Ruby';

print_r($languages);

// Associative Arrays

$friend_ages = [
  'Cam' => 24,
  'Joe' => 24,
  'Jack' => 25,
  'Mark' => 31
];

print_r($friend_ages);

echo $friend_ages['Mark'] . "\n";
echo "Jack is " . $friend_ages['Jack'] . " years old";

// Multidimentional Arrays

$friends = [
  "Cam" => [
    "Age" => 24,
    "Hometown" => "Birmingham",
    "Profession" => "Software Developer"
  ],
  "Jack" => [
    "Age" => 25,
    "Hometown" => "Birmingham",
    "Profession" => "Golfer"
  ],
  "Mark" => [
    "Age" => 31,
    "Hometown" => "West Bromwich",
    "Profession" => "Store Manager"
  ]
];

print_r($friends['Mark']);
echo "\n\n" . $friends['Mark']['Age'];
