//проверка существования значения
<?php
function get(array $arr, $index, $default = null) {
    return(array_key_exists($index, $arr)) ? $arr[$index] : $default;
}
//array_key_exists проверяет наличие индекса в массиве
//array_key_exists которая первым параметром принимает $index а вторым $array для поиска.
$ages = [3, 2];
if(array_key_exists(3, $ages)) {
    print_r('yes'); 
} else {
    print_r('no');
}

//isset() также проверяет наличие индекса в массиве. Если значение существует но его значение =null то isset вернет false 
//поэтому пнравильнее применять array_key_exists
?>