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

//если нужно разбить строку по символьно:
$chars = mb_str_split($text);
foreach($chars as $char) {
    print_r($char);
}