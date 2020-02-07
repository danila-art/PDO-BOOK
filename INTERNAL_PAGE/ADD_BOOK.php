<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление книги</title>
</head>
<body>
<div>
<form action="../PHP_PDO/PDO.php" method="post">
    <ul>
        <li>Введите id книги</li>
        <li><input type="text" name="id_b"></li>
        <li>Введите название книги</li>
        <li><input type="text" name="name"></li>
        <li>Введите id Автора</li>
        <li><input type="text" name="id_a"></li>
        <li>Введите ФИО автора</li>
        <li><input type="text" name="fio"></li>
        <li><input type="submit" value="Добавить книгу"></li>
    </ul>
</form>
</div>
</body>
</html>


