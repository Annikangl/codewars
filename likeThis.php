<?php

$names = ['Jacob','Alex'];

function likes( $names ) {

    // Your code here...
  if (empty($names)) {
    return "no one likes this";
  }
  else if (count($names) == 1) {
    return $names[0]." "."likes this";
  }
  else if (count($names) == 2) {
    return $names[0]." and ".$names[1]." like this";
  }
  else if (count($names) == 3) {
    return $names[0].", ".$names[1]." and ".$names[2]." like this";
  }
  else if (count($names) == 4) {
    return $names[0].", ".$names[1]." and "."2 others like this";
  }
  else if (count($names) >= 5) {
    $otherLikes = count($names) - 2;
    return $names[0].", ".$names[1]." and ".$otherLikes." others like this";
  }
}



echo likes($names);
