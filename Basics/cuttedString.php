<?php
function truncate($word, $length) {
    $cuttedString = substr($word, 0, $length);
    return "{$cuttedString}...";
} 