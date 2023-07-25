<?php
function calculateMax($coll)
{
    if (empty($coll)) 
    {
        return null;
    }
    $max = 0;
    for ($i = 1; $i < sizeof($coll); $i++)
    {
        if ($coll[$i] > $max) {
            $max = $coll[$i];
        }
    }
    return $max;
}

function  calculateSum($coll) 
{
    $sum = 0;
    foreach($coll as $num) {
        $sum += $num;
    }
    return $sum;
}

function calculateAverage($temperatures) 
{
    if (empty($temperatures)) 
    {
        return 0;
    }
    
    $sum = 0;
    foreach ($temperatures as $num) 
    {
        $sum += $num;
    }
    return $sum / count($temperatures);
}
?>