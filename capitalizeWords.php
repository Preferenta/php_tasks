<?php

function capitalizeWords($sentence) 
{
    $words = explode('', $sentence);
    $capitalizeWords = [];

    foreach($words as $word) {
        $capitalizeWords[] = ucfirst($word);
    }
    return implode(' ', $capitalizeWords);
}

$greeting = 'Hello from Malasia';
print_r(capitalizeWords($greeting));