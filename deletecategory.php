<?php
require "dbconnect.php";
try {
    $sql = 'DELETE FROM category WHERE category_id=:id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    echo ("Категория успешно удалена");

} catch (PDOexception $error) {
    echo ("Ошибка удаления категории: " . $error->getMessage());
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=c');
exit( );