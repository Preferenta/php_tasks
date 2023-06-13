<?php
$userNames = ['petya', 'vasia', 'evgeniy'];

for($i = count($userNames)- 1; $i >= 0; $i--) {;
    print_r("{$userNames[$i]}\n");
};

for($i = 0; $i < count($userNames); $i++) {
    print_r("{$userNames[$i]} \n");
}
?>
<?php

function addPrefix($names, $prefix) {
    $result = [];
    for($i = 0, $length = count($names); $i < $length; $i++) {
        $result[$i] = "{$prefix} {$names[$i]}";
    }
    return $result;
}