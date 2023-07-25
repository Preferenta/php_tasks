<?php

function isContinuousSequence($arr) 
{
    if (count($arr) <= 1) {
        return false;
    }
    $start = $arr[0];
    foreach($arr as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
}
return true;
}
?>