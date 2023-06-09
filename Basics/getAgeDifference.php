<?php

function getAgeDifference($firstDate, $lastDate) {
    $difference = abs($lastDate - $firstDate);
    return "The age difference is {$difference}";
}