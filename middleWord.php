<?php

function getMiddle($text) {
    if (strlen($text) % 2 == 0) {
      $start = (strlen($text) / 2)-1;
      return substr($text,$start,2);
    } else {
      $start = ceil(strlen($text) / 2) - 1;
      return substr($text,$start,1);
    }
  }