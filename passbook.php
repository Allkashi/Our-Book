<?php
session_start();
require "dbconnect.php";
try {
    $sql = 'UPDATE history_books SET date_free =:date WHERE book_id =:bid AND user_id=:id; UPDATE book SET user_id = NULL WHERE book_id =:bid';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->bindValue(':date', date('Y-m-d'));
    $stmt->bindValue(':bid', $_GET['bid']);
    $stmt->execute();
    $_SESSION['msg'] = "Книга успешно возвращена!";


} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка при возврате книги: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=m');
exit();
?>

