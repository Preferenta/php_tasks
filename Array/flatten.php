<?php
function flatten($coll) 
{
    $result = [];
    foreach ($coll as $item) {
        if (is_array($item)) {
            foreach ($item as $subItem) {
                $result[] = $subItem;
            }
        } else {
            $result[] = $item;
        }
    }
    return $result;
}