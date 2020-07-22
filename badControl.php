<?php

$s="aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";


$goodControl = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];
$badControl = ['n','o','p','r','s','t','u','v','w','x','y','z'];
$bad2 = "noprstuvwxyz";
$badCount = 0;

  $s = str_split($s);
//   $strCount = count($s);
  
//   for ($i=0;$i<count($s);$i++) {
//     if (in_array($bad2,$s)) {
//       $badCount++;
//     }
//   }

//   echo $badCount;

print_r(range('a','m'));

