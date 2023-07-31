<?php
function getSuperSeriesWinner($scores)
{
    $result = 0;
    foreach ($scores as $score) {
        $result += $score[0] <=> $score[1];
    }

    if ($result > 0) {
        return 'canada';
    } elseif ($result < 0) {
        return "ussr";
    }
    return null;
}
$scores = [
    [3, 7], // Первая игра
    [4, 1], // Вторая игра
    [4, 4],
    [3, 5],
    [4, 5],
    [3, 2],
    [4, 3],
    [6, 5],
  ];
   
getSuperSeriesWinner($scores);
?>