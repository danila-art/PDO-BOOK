<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Удаление книги</title>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div class="button_box_header">
            <div class="button_header">
                <a href="../" class="botr">Главная</a>
            </div>
            <div class="button_header">
                <a href="ADD_BOOK.php" class="botr">Добавить книгу</a>
            </div>
            <div class="button_header">
                <a href="#" class="botr">Редактировать книгу</a>
            </div>
        </div>
        <div class="image_header">
            <img id="image_book_header" src="../IMAGES/INTERNAL_PAGE_IMAGE/delete_book.jpg" alt="">
        </div>
    </div>
    <div class="main">
        <div class="form_del">
            <form action="../PHP_PDO/PDO_DELETE.php" method="post">
                <div class="oglav_form">
                    <h1>Удаление книги</h1>
                </div>
                <div class="text_delete">
                    <p>Введите id книги, которую желаете удалить</p>
                </div>
                <div class="delete_input">
                    <input type="text" name="delete_book">
                </div>
                <div class="text_delete">
                  <p>Введите id автора, данной книги</p>
                </div>
                <div class="delete_input">
                   <input type="text" name="delete_author">
                </div>
                <div class="submit_delete">
                    <input type="submit" value="Удалить книгу">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
<ul>
    <li>Введите id книги, которую желаете удалить</li>
    <li><input type="text" name="delete_book"></li>
    <li>Введите id автора, данной книги</li>
    <li><input type="text" name="delete_author"></li>
    <li><input type="submit" value="Удалить книгу"></li>
</ul>
