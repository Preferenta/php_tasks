<?php

function getCurrentYear() {
    $d = date('Y-m-d');
    $year = (substr($d, 0, 4));
    return (int) $year;
}