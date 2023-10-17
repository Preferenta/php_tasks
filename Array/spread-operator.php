<?php 
/* $frenchCities = ['paris', 'marseille'];
$cities = ['milan', 'rome', ...$frenchCities];
//то же самое
$frenchCities = ['paris', 'marseille'];
$cities = array_merge(['milan', 'rome'], $frenchCities); */
//также;
/* $cities = ['milan', ... $frenchCities, 'rome'];
$cities = array_merge(['milan', $frenchCities, ['rome']]);

$frenchCities = ['paris', 'marseille'];
$italianCities = ['rome', 'milan']; 
$cities = [...$frenchCities, ...$italianCities]; */
?>

<?php
// function flatten($coll) 
// {
//     $result = [];
//     foreach ($coll as $item) {
//         if (is_array($item)) {
//         $result = [...$result, ...$item];
//         } else {
//             $result[] = $item;
//         }      
//     }
//     return $result;
// }
//другое решение:

function flatten(array $coll) {
    $result = array();
    foreach ($coll as $item) {
        if (is_array($item)) {
            $result = array_merge($result, $item);
        } else {
            $result[] = $item;
        }
    }
    return $result;
}