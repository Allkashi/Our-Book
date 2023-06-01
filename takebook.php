<?php
session_start();
require "dbconnect.php";
try {
    $sql = 'UPDATE book SET user_id =:id WHERE book_id =:bid; INSERT INTO history_books (date_collect, book_id, user_id ) VALUES(:date,:bid,:uid)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->bindValue(':date', date('Y-m-d'));
    $stmt->bindValue(':bid', $_GET['bid']);
    $stmt->bindValue(':uid', $_SESSION['id']);
    $stmt->execute();
    $_SESSION['msg'] = "Книга успешно взята!";


} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка при взятии книги: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=b');
exit();
?>
