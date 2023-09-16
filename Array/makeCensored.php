<?php
function makeCensored(string $text, array $stopWords)
{
    $words = explode('', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }
    return implode(' ', $result);
}
?>