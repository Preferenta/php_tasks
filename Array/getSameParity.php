<?php
function getSameParity(array $coll) 
{
    if (empty($coll)) {
        return [];
    }
    $result = [];
    $firstElement = $coll[] % 2;

    foreach ($coll as $item) {
        if ($item % 2 === $firstElement) {
            $result[] = $item;
        }
    }
    return $result;
}
?>