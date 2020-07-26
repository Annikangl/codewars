<?php
// Given a year, return the century it is in.
function centuryFromYear(int $year) {
    if ($year % 100 > 0) {
        $century = ceil($year / 100);
    }
    else {
        $century = $year / 100;
    }
    return $century;
}

centuryFromYear(2000);

