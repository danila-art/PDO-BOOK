<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление книги</title>
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
                <a href="DELETE_BOOK.php" class="botr">Удалить книгу</a>
            </div>
            <div class="button_header">
                <a href="../INTERNAL_PAGE/EDIT_BOOK.php" class="botr">Редактировать книгу</a>
            </div>
        </div>
        <div class="image_header">
            <img id="image_book_header" src="../IMAGES/INTERNAL_PAGE_IMAGE/add_book.jpg" alt="">
        </div>
    </div>
    <div class="main_add">
        <div class="form_add">
            <form action="../PHP_PDO/PDO.php" method="post">
                <div class="oglav_form">
                    <h1>Добавление книги</h1>
                </div>
                <div class="text_input">
                    <p>Введите id книги</p>
                </div>
                <div class="add_input">
                    <input type="text" name="id_b">
                </div>
                <div class="text_input">
                    <p>Введите название книги</p>
                </div>
                <div class="add_input">
                    <input type="text" name="name">
                </div>
                <div class="text_input">
                    <p>Введите id Автора</p>
                </div>
                <div class="add_input">
                    <input type="text" name="id_a">
                </div>
                <div class="text_input">
                    <p>Введите ФИО автора</p>
                </div>
                <div class="add_input">
                    <input type="text" name="fio">
                </div>
                <div class="text_input">
                    <p>Введите id второго автора(если есть)</p>
                </div>
                <div class="add_input">
                    <input type="text" name="id_a_2">
                </div>
                <div class="text_input">
                   <p>Введите ФИО второго автора(если есть)</p>
                </div>
                <div class="add_input">
                    <input type="text" name="fio_2">
                </div>
                <div class="button_submit">
                    <input type="submit" class="submit" value="Добавить книгу">
                </div>
            </form>
        </div>
    </div>

    <div class="footer">

    </div>
</div>

</body>
</html>

