<?php
//Выполняем подключение к базе данных
$connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');

//Получаем данные
$data = $connection->query("SELECT `book`.`id_b`, `book`.`name`, `author`.`id_a`, `author`.`fio` FROM `book` INNER JOIN `info` ON `info`.`id_a` = `book`.`id_b` INNER JOIN `author` ON `info`.`id_a` = `author`.`id_a`");
//$data_b = $connection->query("SELECT * FROM `book`");
//$data_a = $connection->query("SELECT * FROM `author`");

//Выводим результат
while ($row = $data->fetch()){
    echo "{$row['id_b']}<br>{$row['name']}<br>";
    echo "{$row['id_a']}<br>{$row['fio']}<hr>";
}
