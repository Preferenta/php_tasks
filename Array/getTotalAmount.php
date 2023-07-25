<?php
function getTotalAmount($wallet, $currency) : int 
{
    $total = 0;
    foreach ($wallet as $item) {
        $currentCurrency = substr($item, 0, 3);
        if ($currentCurrency !== $currency) {
            continue;
        }
        $denomination = (int) substr($item, 4);
        $total  += $denomination;
    }
    print_r($total);
}

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
getTotalAmount($money1, 'rub'); 
?>