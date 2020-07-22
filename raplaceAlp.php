<?php

$alpha = range('a','z');
$s = "the narwhal bacons at midnight.";
$s = str_split($s);
$c = [];

foreach ($alpha as $key=>$value) {
    foreach ($s as $index=>$char) {
        if ($char == $value) {
            echo $key." ";
        }
    }
}

// Не РЕШЕНО