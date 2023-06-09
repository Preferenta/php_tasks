<?php
function getHiddenCard($cardNumber, $starsCount = 4) {
    $visibleNumbers = substr($cardNumber, 12);
    return str_repeat('*', $starsCount) . $visibleNumbers;
}