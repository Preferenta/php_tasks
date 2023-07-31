<?php
$field = [
    array_fill(0, 3, null),
    array_fill(0, 3, null),
    array_fill(0, 3, null),
];

$field[1][2] = 'x';

function check ($field, $symbol) 
{
    foreach ($field as $row) {
        if (in_array($symbol, $row)) {
            return true;
        }
    }
    return false;
}
check($field, 'x');
?>