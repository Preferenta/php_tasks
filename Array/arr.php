//проверка существования значения
<?php
function get(array $arr, $index, $default = null) {
    return(array_key_exists($index, $arr)) ? $arr[$index] : $default;
}
?>