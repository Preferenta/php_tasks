<?php

$emails = ['VASYA@gmAil.com', 'iGoR@yandex.RU', 'netiD@hot.CoM'];

for ($i = 0; $i < count($emails); $i++) {
    $emails[$i] = strtolower($emails[$i]); 
}
print_r($emails);