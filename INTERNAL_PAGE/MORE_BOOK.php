<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Books&Authors</title>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div class="button_box_header">
            <div class="button_header">
                <a href="ADD_BOOK.php" class="botr">Добавить книгу</a>
            </div>
            <div class="button_header">
                <a href="DELETE_BOOK.php" class="botr">Удалить книгу</a>
            </div>
            <div class="button_header">
                <a href="EDIT_BOOK.php" class="botr">Редактировать книгу</a>
            </div>
        </div>
        <div class="image_header">
            <img id="image_book_header" src="../IMAGES/books-1281581_1280.jpg" alt="">
        </div>
    </div>
    <div class="main">
        <div>
            <table>
                <caption>
                    Просмотр книги и её авторов
                </caption>
                <tr>
                    <th>Название книги</th>
                    <th>Авторы</th>
                </tr>
                <?php
                $id_b = $_POST['id_b'];
                try {
                    $connection = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
                } catch (PDOException $e) {
                    echo 'Подключение не удалось:' . $e->getMessage();
                    exit();
                }
                $book = $connection->query("SELECT `book`.`name` FROM `book` WHERE `book`.`id_b` ='$id_b'");
                while ($row = $book->fetch()) {
                    echo "<td>{$row['name']}</td><br>";
                }
                ?>
                <td><?php
                    $author = $connection->query("SELECT `author`.`fio` FROM `author` INNER JOIN `info` ON `info`.`id_a` = `author`.`id_a` INNER JOIN `book` ON `book`.`id_b` = `info`.`id_b` WHERE `info`.`id_b` = '$id_b';");
                    while ($row = $author->fetch()) {
                        echo "{$row['fio']}<br>";
                    }
                    ?></td>


            </table>
            <div>
                <a href="../index.php" class="back">Вернуться назад</a>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
