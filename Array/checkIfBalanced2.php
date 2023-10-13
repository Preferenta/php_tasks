<?php
function checkIfBalanced(string $expression) : bool 
    {
$stack = [];
for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
    $curr = $expression[$i];
    if ($curr === '(') {
        array_push($stack, $curr);
    } elseif ($curr === ')') {
        if (empty($stack)) {
            return false;
        }
    }
    array_pop($stack);
};
return empty($stack);
    }

?>