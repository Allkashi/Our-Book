<?php
session_start();
require "dbconnect.php";
    try {
        $sql = 'INSERT INTO fav_category(category_id, user_id) VALUES(:cat_id,:user_id)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':cat_id', $_GET['cat_id']);
        $stmt->bindValue(':user_id', $_SESSION['id']);
        $stmt->execute();
        $_SESSION['msg'] = "Избранный жанр успешно добавлен";


    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Ошибка добавления избранного жанра: " . $error->getMessage();
    }
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=t');
exit();