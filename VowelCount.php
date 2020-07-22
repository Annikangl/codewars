<?php

function getCount($str) {
    $vowelsCount = 0;
    
    $str = str_split($str);
    
    for ($i=0; $i<count($str); $i++) {
         if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i'|| $str[$i] == 'o' || $str[$i] == 'u') {
             $vowelsCount ++;
         }
    }
    
    return $vowelsCount;
  }