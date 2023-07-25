<?php
foreach ($arr as $key => $val) {
    if (!($key % 2)) {
        continue;
    }
    do_something_odd($val);
}

$i = 0;
while ($i++ < 5) {
    echo 'Outside';
    while (1) {
        echo 'Inside';
        while (1) {
            echo 'Inside';
            continue 3;
        }
    echo 'It`s never be done!';
}
echo 'It`s too.';
}
?>

<?php
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    print_r($i);
}
?>


<?php
$userNames = ['petya', 'vasya', 'evgeny'];
$result = [];
foreach ($userNames as $name) {
    if ($name = 'vasya') {
        continue;
    }
    $result[] = $name;
    print_r ($result);
}
?>


<?php
$userNames = ['petya', 'vasya', 'evgeny'];
$result = [];
foreach ($userNames as $name) {
    if ($name = 'vasia') {
        break;
    }
    $result[] = $name;
}
print_r($result);
?>