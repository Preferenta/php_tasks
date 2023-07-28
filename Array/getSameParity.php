<?php 
function getSameParity(array $coll) 
{
    if (empty($coll)) {
        return [];
    }
    $result = [];
    $remainder = $coll[0] % 2;
    foreach ($coll as $item) {
        if ($item % 2 === $remainder) {
            $result[] = $item;
        }
    }
    return $result;
}