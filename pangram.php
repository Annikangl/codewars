<?php

function detect_pangram($string) { 
    $alphabet = range('a','z');
    str_split($string);

        if (!in_array($string,$alphabet)) {
          echo "false";
        }
    
    }

    detect_pangram("The quick brown fox jumps over the lazy dog.");
    detect_pangram("1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B");
    detect_pangram("1L%r+f4G!e7w");
    detect_pangram("5E^f!l J3q7u C-c4b H s_v+A^h.f:N w!d K3g5o R^z2d_I2a5e:B j y9M x9p!T");