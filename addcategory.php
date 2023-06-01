<?php
session_start();
require "dbconnect.php";

if(!empty($_FILES['filename']['tmp_name'])){
    if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')) {
        //получение расширения
        $ext = explode('.', $_FILES["filename"]["name"]);
        $ext = $ext[count($ext) - 1];
        $filename = 'file' . rand(100000, 999999) . '.' . $ext;

        $resource = Container::getFileUploader()->store($file, $filename);
        $picture_url = $resource['ObjectURL'];
    }
}
else
{
    $picture_url = 'https://storage.yandexcloud.net/ourbook/YCAJEeU0w4Ux8nIhkdkmaKE3X/book.png';
}

try {
    $sql = 'INSERT INTO category(category_name, cat_url) VALUES(:name, :picture_url)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':picture_url', $picture_url);
    $stmt->execute();
    echo ("Категория успешно добавлена");

} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка добавления жанра: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/index.php?page=c');
exit( );
?>
