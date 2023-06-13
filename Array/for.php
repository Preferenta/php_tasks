<?php
$userNames = ['petya', 'vasia', 'evgeniy'];

for($i = count($userNames)- 1; $i >= 0; $i--) {;
    print_r("{$userNames[$i]}\n");
};

for($i = 0; $i < count($userNames); $i++) {
    print_r("{$userNames[$i]} \n");
}
?>