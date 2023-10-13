<?php
function getIntersectionOfSortedArray($arr1, $arr2) 
{
    $size1 = count($arr1);
    $size2 = count($arr2);
    
    $i = 0;
    $j = 0;
    $result = [];
    while ($i < $size1 && $j < $size2) {
        if ($arr1[$i] === $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
            $j++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j++;
        } else {
            $i++;
        }
    }
    return $result;
}