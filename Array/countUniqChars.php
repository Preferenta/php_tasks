<?php
function countUniqChars($text) 
{
    $uniqChars = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }
    return count($uniqChars);
}