<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Books&Authors</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div class="button_box_header">
            <div class="button_header">
                <a href="INTERNAL_PAGE/ADD_BOOK.php" class="botr">Добавить книгу</a>
            </div>
            <div class="button_header">
                <a href="INTERNAL_PAGE/DELETE_BOOK.php" class="botr">Удалить книгу</a>
            </div>
            <div class="button_header">
                <a href="INTERNAL_PAGE/EDIT_BOOK.php" class="botr">Редактировать книгу</a>
            </div>
        </div>
        <div class="image_header">
            <img id="image_book_header" src="IMAGES/books-1281581_1280.jpg" alt="">
        </div>
    </div>
    <div class="main">

        <div>
            <table>
                <caption>
                    Просмотр книг и их авторов
                </caption>
                <tr>
                    <th>Название книги</th>
                    <th>Цена, руб.</th>
                    <th></th>
                </tr>
                <?php
                //Выполняем подключение к базе данных
                try {
                    $connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
                } catch (PDOException $e) {
                    echo 'Подключение не удалось:' . $e->getMessage();
                    exit();
                }

                //Получаем данные
                $data = $connection->query("SELECT * FROM `book`");
                //$data_b = $connection->query("SELECT * FROM `book`");
                //$data_a = $connection->query("SELECT * FROM `author`");

                //Выводим результат
                while ($row = $data->fetch()) {
                    $basik = rand(10, 1000);
                    echo "
                    <tr>
                        <form action='INTERNAL_PAGE/MORE_BOOK.php' method='post'>
                            <input type='text' class='more_input' value='{$row['id_b']}' name='id_b'><td>{$row['name']}</td>
                        <td>$basik</td>
                        <td><input type='submit' value='Подробнее' id='submit' class='more_submit'></td>
                        </form>
                    </tr>   
              ";

                }


                ?>
            </table>
        </div>

    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
