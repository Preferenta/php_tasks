<?php
$numbers = [[3]];
count($numbers);

$numbers = [1, [3, 2], [3, [4]]];
count($numbers);//3

$numbers = [[3]];
$numbers[0][0];//3

$numbers = [1, [3, 2], [3, [4]]];
$numbers[2][1][0];//4

$numbers = [[3]];
$numbers[0] = [2, 10];
$numbers[] = [3, 4, 5];

$numbers = [[3]];
$numbers[0][0] = 5; //[[5]];

$numbers = [[3]];
$numbers[0][] = 10;//[[3, 10]]


?>