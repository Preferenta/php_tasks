<?php
$coll = ['milk', 'butter', 'eggs', 'bread'];
buildList($coll);

$result = '';
foreach ($coll as $item) {
    $result = "{$result}<li>{$item}</li>";
}
$result = "<ul>{$result}</ul>";

//перепишем так:
$parts = [];
foreach ($coll as $item) {
    $parts[] = "<li>{$item}</li>";
}
$innerValue = implode('', $parts);
$result = "<ul>{$innerValue}</ul>";
