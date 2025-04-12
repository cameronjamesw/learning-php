<?php

$palindrome = "chicken";

function isPalindrome($string)
{
  $reversedString = strrev($string);
  return $string === $reversedString;
}

$palindromeChecker = isPalindrome($palindrome);

if ($palindromeChecker) {
  echo "$palindrome is a palindrome.";
} else {
  echo "$palindrome is not a palindrome.";
}
