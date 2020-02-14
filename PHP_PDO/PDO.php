<?php
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле id_b
if (!empty($_POST['id_b'])) {
    //Проверяем если тип данных введённых в поле является int то присваиваем данные в переменную
    if (is_numeric($_POST['id_b'])) {
        $id_b = $_POST['id_b'];
    } //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
    else {
        $id_b = null;
        echo 'ID автора - поле должно состоять только из чисел';
    }
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $id_b = null;
    echo "Заполните поле id_b";
}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле name
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $name = null;
    echo 'Заполните поле Название книги';
}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле id_a
if (!empty($_POST['id_a'])) {
    //Проверяем если тип данных введённых в поле является int то присваиваем данные в переменную
    if (is_numeric($_POST['id_a'])) {
        $id_a = $_POST['id_a'];
    } //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
    else {
        $id_a = null;
        echo 'ID автора - поле должно состоять только из чисел';
    }
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $id_a = null;
    echo "Заполните поле id_a";
}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле name
if (!empty($_POST['fio'])) {
    $fio = $_POST['fio'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $fio = null;
    echo 'Заполните поле ФИО автора';
}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем подключение к базе данных
//try{
$connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
//    $connection->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}catch (PDOException $e){
//        echo 'Подключение не удалось:'.$e->getMessage();
//        exit();
//}
//Заносим введенные и уже проверенные данные в таблицу book
$add_b = $connection->query("INSERT INTO `book` (`id_b`, `name`) VALUES ('$id_b','$name')");

//Заносим введенные и уже проверенные данные в таблицу author
$add_a = $connection->query("INSERT INTO `author` (`id_a`, `fio`) VALUES ('$id_a','$fio')");

//Соединяем две таблицы
$add_info = $connection->query("INSERT INTO `info` (`id_a`, `id_b`) VALUES ('$id_a','$id_b')");

require_once('../INTERNAL_PAGE/ADD_BOOK.php');
if ($id_a != null && $id_b != null && $name != null && $fio != null) {
    echo '<script>
alert("Добавление успешно выполнено");
</script>';

}
//Выполняем проверку введенных данных в поле id_a_2
if (!empty($_POST['id_a_2'])) {
    $id_a_2 = $_POST['id_a_2'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $id_a_2 = null;
}
//Выполняем проверку введенных данных в поле fio_2
if (!empty($_POST['fio_2'])) {
    $fio_2 = $_POST['fio_2'];
} //Если данные не соответствуют условию, то переменной присваиваем null и выводим ошибку
else {
    $fio = null;
}

if ($fio_2 != null) {
    $add_a_2 = $connection->query("INSERT INTO `author` (`id_a`,`fio`) VALUES ('$id_a_2', '$fio_2')");
    $add_a_2_info = $connection->query("INSERT INTO `info` (`id_a`, `id_b`) VALUES ('$id_a_2','$id_b')");
}
