<?php

if (isset($_POST["login"]) and $_POST["login"]!='')
{
    try {
        $sql = 'SELECT user_id , first_name, sec_name, password FROM user WHERE nickname=(:login)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':login', $_POST['login']);
        $stmt->execute();


    } catch (PDOexception $error) {
        $msg = "Ошибка аутентификации: " . $error->getMessage();
    }
    // если удалось получить строку с паролем из БД
    if ($row=$stmt->fetch(PDO::FETCH_LAZY))
    {
        if (MD5($_POST["password"])!= MD5($row['password'])) $msg = "Неправильный пароль!";
        else {
            // успешная аутентификация
            $_SESSION['nickname'] = $_POST["login"];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['sec_name'] = $row['sec_name'];
            $_SESSION['id'] = $row['user_id'];
            $msg =  "Вы успешно вошли в систему";
        }
    }
    else $msg =  "Неправильное имя пользователя!";

}

if (isset($_GET["logout"]))
{
    session_unset();
    $_SESSION['msg'] =  "Вы успешно вышли из системы";
    header('Location: http://OurBook');
    exit( );
}



?>