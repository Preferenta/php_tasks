<?php

function swap($coll, $center)
//swap - менять
{
    $prevIndex = $center - 1;
    $nextIndex = $center + 1;
    $isSwappable = array_key_exists($prevIndex, $coll) && array_key_exists($nextIndex, $coll);

    if ($isSwappable) {
        $temp = $coll[$prevIndex];
        $coll[$prevIndex] = $coll[$nextIndex];
        $coll[$nextIndex] = $coll[$prevIndex];
    }
    return $coll;
}