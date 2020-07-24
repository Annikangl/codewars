<?php
function fake_bin(string $s): string {
    $strArr = str_split($s);
    $newStr = "";
  
    foreach ($strArr as $char) {
        if ($char < 5) {
          $char = 0;
          $newStr .= $char;
      }
        else if ($char >= 5) {
          $char = 1;
          $newStr .=$char;
      }
  }
    return $newStr;
  }