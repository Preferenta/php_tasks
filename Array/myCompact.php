<?php
function myCompact($coll) 
{
    $result = [];
    foreach ($coll as $item) {
        if (!is_null($item)) {
            $result[] = $item;
        }
        return $result;
    }
}
print_r(myCompact([0, 1, false, null, true, 'wow', null]));
?>