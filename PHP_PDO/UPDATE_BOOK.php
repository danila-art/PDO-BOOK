<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
    $connection->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Подключение не удалось:'.$e->getMessage();
    exit();
}
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
} //Если данные не соответствуют условию, то переменной присваиваем null
else {
    $id_b = null;

}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле name
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} //Если данные не соответствуют условию, то переменной присваиваем null
else {
    $name = null;
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
} //Если данные не соответствуют условию, то переменной присваиваем null и
else {
    $id_a = null;
}
//----------------------------------------------------------------------------------------------------------------------
//Выполняем проверку введенных данных в поле name
if (!empty($_POST['fio'])) {
    $fio = $_POST['fio'];
} //Если данные не соответствуют условию, то переменной присваиваем null и
else {
    $fio = null;
}
if ($id_b != null) {
    if ($name != null) {
        $up_book = $connection->query("UPDATE `book` SET `name` = '$name' WHERE `id_b` = '$id_b'");
        require_once('../INTERNAL_PAGE/EDIT_BOOK.php');
        echo '
    <script>
    alert("Редактирование книги выполнено успешно");
    </script>
    ';
    } else {
        require_once('../INTERNAL_PAGE/EDIT_BOOK.php');
        echo '
    <script>
    alert("Вы ввели id_книги, но не ввели новые данные!\nРедактирование не было выполнено!");
</script>
    ';

    }
}

if ($id_a != null) {
    if ($fio != null) {
        $up_author = $connection->query("UPDATE `author` SET `fio` = '$fio' WHERE `id_a`='$id_a' ");
        require_once('../INTERNAL_PAGE/EDIT_BOOK.php');
        echo '
    <script>
    alert("Редактирование автора выполнено успешно");
</script>
    ';
    } else {
        require_once('../INTERNAL_PAGE/EDIT_BOOK.php');
        echo '
    <script>
    alert("Вы ввели id_автора, но не ввели новые данные!\nРедактирование не было выполнено!");
</script>
    ';

    }
}