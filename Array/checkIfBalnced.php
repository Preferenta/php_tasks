<?php

function checkIfBalanced(string $expression) : boolean
{
    $stack = [];
    $startSymbols = ['{', '(', '<', '['];
    $pairs = ['{}', '()', '<>', '[]'];

    for ($i = 0; $i < strlen($expression); $i++) {
        $curr = $expression[$i];

        if (in_array($curr, $startSymbols)) {
            array_push($stack, $curr);
        } else {
            $prev = array_pop($stack);
            $pair = "{$prev}{$curr}";
            
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }
    return count($stack) === 0;
}