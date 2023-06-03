<?php
use Framework\Container;
use App\S3FileUploader;

require "dbconnect.php";
try {
    echo ("SELECT * FROM category WHERE category.category_id=".$_GET['id']);
    $result = $conn->query("SELECT * FROM category WHERE category.category_id=".$_GET['id']);
    $row = $result->fetch();
    try {
        if ($row['cat_url']!='https://storage.yandexcloud.net/ourbook/YCAJEeU0w4Ux8nIhkdkmaKE3X/book.png')
            $resource = Container::getFileUploader()->delete($row['cat_url']);
    } catch (S3Exception $e) {
        $_SESSION['msg'] = $e->getMessage();
    }

    $sql = 'DELETE FROM fav_category WHERE category_id=:id; DELETE FROM category WHERE category_id=:id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    echo ("Категория успешно удалена");

} catch (PDOexception $error) {
    echo ("Ошибка удаления категории: " . $error->getMessage());
}
// перенаправление на главную страницу приложения
header('Location: http://OurBook/category');
exit( );