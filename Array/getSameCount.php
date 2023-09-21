<?php

function getSameCount($array1, $array2) {
    $count = 0;
    $arrayUnique1 = array_unique($array1);
    $arrayUnique2 = array_unique($array2);
    foreach ($arrayUnique1 as $item1) {
        foreach ($arrayUnique2 as $item2) {
            if ($item1 === $item2) {
                $count++;
            }
        }
    }
    return $count;
}