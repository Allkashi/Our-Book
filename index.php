<?php
session_start();

use Framework\Request;
use Framework\Router;
use Framework\Application;

date_default_timezone_set('Asia/Yekaterinburg');
if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

$request = new Request();
Application::init();
echo (new Router($request))->getContent();


exit();

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