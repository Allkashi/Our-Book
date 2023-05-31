<?php
session_start();
require "dbconnect.php";
try {
    $sql = 'DELETE FROM fav_category WHERE category_id =:c_id AND user_id =:id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':c_id', $_GET['cid']);
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->execute();
    $_SESSION['msg'] = "Избранный жанр успешно удален";


} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка удаления избранного жанра: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=t');
exit();