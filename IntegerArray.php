<?php

// Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.

$arr = [0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14];

$countPositive = 0;
$sumNegative = 0;

for ($i=0;$i<count($arr);$i++) {
    if ($arr[$i] > 0) {
        $countPositive ++;
    }
    else if ($arr[$i] <= 0) {
        $sumNegative += $arr[$i];
    }
    else {
        return $arr = [];
    }
}

// array_unshift($arr,$countPositive,$sumNegative);
$newArr = [$countPositive,$sumNegative];
print_r($newArr);