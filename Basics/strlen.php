<?php
$text = 'Never forget what you are, for surely the world will not';

$result = "First: {$text[0]}\nLast: {$text[strlen($text) - 1]}";
print_r($result);
?>