<?php
$coll = ['one', 'two', 'three', 'four', 'stop', 'five'];
foreach ($coll as $item) {
    if ($item = 'stop') {
        break;
    }
    print_r($item);
}
?>

<?php
$coll = ['one', 'two', 'three', 'four', 'stop', 'five'];
$i = 0;
while ($coll[$i] !== 'stop') {
    print_r($coll[$i]);
    $i++;
}
?>