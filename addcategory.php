<?php
require "dbconnect.php";
try {
    $sql = 'INSERT INTO category(category_name) VALUES(:name)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':name', $_GET['name']);
    $stmt->execute();
    echo ("Категория успешно добавлена");

} catch (PDOexception $error) {
    echo ("Ошибка добавления категории: " . $error->getMessage());
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook');
exit( );
