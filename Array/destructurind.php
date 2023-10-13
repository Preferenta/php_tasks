<?php
//destructuring
[$x, $y] = $point;
print_r("{$x}, {$y}");

[$x] = $point;
[, $y] = $point;

[, $secondName, ,$fourthName, $fifthName] = [1, 2, 3, 4, 5,6];

$points = [
    [4, 3], 
    [0, -3]
];
foreach ($points as [$x, $y]) {
    print_r([$x, $y]);
}