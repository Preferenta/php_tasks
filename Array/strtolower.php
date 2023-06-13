<?php

$emails = ['VASYA@gmAil.com', 'iGoR@yandex.RU', 'netiD@hot.CoM'];

for ($i = 0; $i < count($emails); $i++) {
    $emails[$i] = strtolower($emails[$i]); 
}
print_r($emails);

$colors = ['red', 'blue', 'green', 'yellow'];
$length = count($colors);

for ($i = 0; $i < $length; $i++) {
    print_r("{$colors[$i]}");
}

$colors = ['red', 'blue', 'green', 'yellow'];

for ($i = 0; $length = count($colors); $i < $length; print($i), $i++) {
    print_r("{$colors[$i]}\n");
}