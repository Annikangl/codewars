<?php

# It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. 
# You're given one parameter, 
# the original string. You don't have to worry with strings with less than two characters.
function remove_char(string $string): string {
    if (strlen($string) >= 2) {
      $strEnd = strlen($string) - 2;
      $newStr =  substr($string,1,$strEnd);
    }
    return $newStr;
  }