<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование книги</title>
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
                <a href="../INTERNAL_PAGE/DELETE_BOOK.php" class="botr">Удалить книгу</a>
            </div>
        </div>
        <div class="image_header">
            <img id="image_book_header" src="../IMAGES/INTERNAL_PAGE_IMAGE/edit_book.jpg" alt="">
        </div>
    </div>
    <div class="main">
        <div class="form_edit">
            <form action="../PHP_PDO/UPDATE_BOOK.php" method="post">
                <div class="oglav_form">
                    <h1>Редактирование книги</h1>
                </div>
                <div class="text_input">
                    <p>Введите id книги, которую желаете редактировать</p>
                </div>
                <div class="add_input">
                    <input type="text" name="id_b">
                </div>
                <div class="text_input">
                    <p>Введите новое название книги</p>
                </div>
                <div class="add_input">
                    <input type="text" name="name">
                </div>
                <div class="text_input">
                    <p>Введите id Автора, которого желаете редактировать</p>
                </div>
                <div class="add_input">
                    <input type="text" name="id_a">
                </div>
                <div class="text_input">
                    <p>Введите новые данные ФИО автора</p>
                </div>
                <div class="add_input">
                    <input type="text" name="fio">
                </div>
                <div class="button_submit">
                    <input type="submit" value="Редактировать">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
