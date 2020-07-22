<?php

function narcissistic(int $value): bool {
    // Your code here
    $powerValue = ceil(log10($value)+ 1);
    $value = (string)$value;
    str_split($value);
}

$value = 12345631;

var_dump( (string)$value);
echo 371 % 1000;
// echo ceil(log10($value));