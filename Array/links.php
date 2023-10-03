<?php
$numbers = [3, 8, 1];
sort($numbers);
print_r($numbers);

$num = [1, 3, 4];
$result = sort($num);
var_dump($result);

function addValueToArray(&$array, $value)
{
    $array[] = $value;
}