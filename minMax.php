<?php

function maximum($array) {
    $maxValue = null;
    for ($i=0;$i<count($array);$i++) {
        if ($array[$i] > $maxValue || $maxValue === null) {
            $maxValue = $array[$i];
        }
    }
    echo $maxValue;
}

function minimum($array) {
    $minValue = null;
    for ($i=0;$i<count($array);$i++) {
        if ($array[$i] < $minValue || $minValue === null) {
            $minValue = $array[$i];
            
        }
    }
    echo $minValue;
}

$array = [100,-99, 2, 3, 4, 5];

maximum($array);
minimum($array);
