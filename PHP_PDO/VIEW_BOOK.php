<?php
//Выполняем подключение к базе данных
try{
    $connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
//    $connection->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Подключение не удалось:'.$e->getMessage();
    exit();
}

//Получаем данные
$data = $connection->query("SELECT `book`.`id_b`, `book`.`name`, `author`.`id_a`, `author`.`fio` FROM `book` INNER JOIN `info` ON `info`.`id_a` = `book`.`id_b` INNER JOIN `author` ON `info`.`id_a` = `author`.`id_a`");
//$data_b = $connection->query("SELECT * FROM `book`");
//$data_a = $connection->query("SELECT * FROM `author`");

//Выводим результат
while ($row = $data->fetch()){
    echo "{$row['id_b']}<br>{$row['name']}<br>";
    echo "{$row['id_a']}<br>{$row['fio']}<hr>";

}

