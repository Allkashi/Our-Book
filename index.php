<?php
session_start();
date_default_timezone_set('Asia/Yekaterinburg');
require "dbconnect.php";
require "auth.php";
require "menu.php";
switch ($_GET['page']){
    case 'c':
        require "category.php";
        break;
    case 't':
        if (isset($_SESSION['nickname'])){
            require "fav.php";
            require "favform.php";
        }
        else{
            echo 'Войдите в сиситему для просмотра содержимого данного раздела';
        }
        break;
    case 'b':
        if (isset($_SESSION['nickname'])){
            require "occbookform.php";
        }
        else{
            echo 'Войдите в сиситему для просмотра содержимого данного раздела';
        }
        break;
    case 'f':
        if (isset($_SESSION['nickname'])){
            require "freebookform.php";
        }
        else{
            echo 'Войдите в сиситему для просмотра содержимого данного раздела';
        }
        break;
    case 'm':
        if (isset($_SESSION['nickname'])){
            require "mybook.php";
        }
        else{
            echo 'Войдите в сиситему для просмотра содержимого данного раздела';
        }
        break;
}

require "message.php";
$_SESSION['msg'] = '';