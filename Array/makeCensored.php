<?php
$sentence = 'When you play the game of thrones, you win or you die';


function makeSensored($sentence, $arr) 
{
    foreach ($sentence as $word) {
        $result[] = in_array('die', 'play', $arr) ? '$#%!' : $word;
    } 
    return $result;
} 

makeSensored($sentence, ['die', 'play']);
?>