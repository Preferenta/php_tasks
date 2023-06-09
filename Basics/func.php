<?php;
$one = "Naharis";
$two = "Mormont";
$three = "Sand";

$part1 = substr($one, 2, 1);
$part2 = substr($two, 1, 1);
$part3 = substr($three, 3, 1);
$part4 = substr($two, 1, 2);

print_r($part1 . $part2 . $part3 . $part4);

?>;