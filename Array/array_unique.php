<?php
//intersect/пересечение
$friends1 = ['vasya', 'kolya', 'petya'];
$friends2 = ['igor', 'petya', 'sergey', 'vasya', 'sasha'];
array_intersect($friends1, $friends2);


//merge/ объединение
$friends1 = ['vasya', 'kolya', 'petya'];
$friends2 = ['igor', 'petya', 'sergey', 'vasya', 'sasha'];
$friends = array_merge($friends1, $friends2);
$sharedFriends = array_unique($friends);//убрали дубли
print_r($sharedFriends);


//дополнение/ разность
$friends1 = ['vasya', 'kolya', 'petya'];
$friends2 = ['igor', 'petya', 'sergey', 'vasya', 'sasha'];
array_diff($friends1, $friends2);

//in_array / принадлежность элемента к массиву
$terribleNumbers = [3, 13];
if (in_array(10, $terribleNumbers)) {
    print_r ('Woah!');
}

