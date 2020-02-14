<?php
//-----------------------------------------БЛОК ПРОВЕРКИ КНИГИ----------------------------------------------------------
//Выполняем проверку введенных данных в поле name
if (!empty($_POST['delete_book'])) {
    $delete_book = $_POST['delete_book'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $delete_book = null;
    echo 'Введите id книги<br>';
}
//-----------------------------------------БЛОК ПРОВЕРКИ КНИГИ КОНЕЦ----------------------------------------------------
//-----------------------------------------БЛОК ПРОВЕРКИ АВТОР----------------------------------------------------------
if (!empty($_POST['delete_author'])) {
    $delete_author = $_POST['delete_author'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $delete_author = null;
    echo 'Введите id автора<br>';
}
//-----------------------------------------БЛОК ПРОВЕРКИ АВТОР КОНЕЦ----------------------------------------------------
//-----------------------------------------БЛОК УДАЛЕНИЯ ДАННЫХ ИЗ ТАБЛИЦ-----------------------------------------------
//Выполняем подключение к базе данных
try{
    $connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
//    $connection->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Подключение не удалось:'.$e->getMessage();
    exit();
}

//если введенные данные отличные от null, выполняем удаление записи из базы данных
if ($delete_book != null) {
    $delete_info = $connection->query("DELETE FROM `info` WHERE `id_b` = '$delete_book'");
    $delete_b = $connection->query("DELETE FROM `book` WHERE `id_b` = '$delete_book'");
    $delete_a = $connection->query("DELETE FROM `author` WHERE `id_a` = '$delete_author'");
}
//-----------------------------------------БЛОК УДАЛЕНИЯ ДАННЫХ ИЗ ТАБЛИЦ-----------------------------------------------
require_once ('../INTERNAL_PAGE/DELETE_BOOK.php');
if ($delete_book != null && $delete_author != null){
    echo '<script>
alert("Удаление книги успешно выполнено!")
</script>';
}