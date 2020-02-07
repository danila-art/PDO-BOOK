<?php
//Выполняем подключение к базе данных
$connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');

//Получаем данные
$data = $connection->query("SELECT * FROM `book` INNER JOIN `info` ON `book`.`id_b` INNER JOIN `author` ON `info`.`id_a` = `author`.`id_a` ");
//$data = $connection->query("SELECT * FROM `book`");

//Выводим результат
//foreach ($data as $rows){
//    echo "{$data['id_b']}<br>{$data['fio']}<br>";
//    echo "{$data['id_a']}<br>{$data['name']}<br>";
//}
while ($row = $data->fetch()) {
    echo "{$row['id_b']}{$row['fio']}";
    echo "{$row['id_a']}{$row['name']}";
}