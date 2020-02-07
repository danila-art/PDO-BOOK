<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form action="../PHP_PDO/PDO_DELETE.php" method="post">
        <ul>
            <li>Введите id книги, которую желаете удалить</li>
            <li><input type="text" name="delete_book"></li>
            <li>Введите id автора, данной книги</li>
            <li><input type="text" name="delete_author"></li>
            <li><input type="submit" value="Удалить книгу"></li>
        </ul>
    </form>
</div>
</body>
</html>
<?php
