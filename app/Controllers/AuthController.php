<?php
namespace App\Controllers;

use App\Models\UserModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->getPostParams()['login'];
        $password = $request->getPostParams()['password'];
//        echo ($login.' '.$password);
        if (isset($login) and $login != '') {
            $user = UserModel::getWhere('nickname', '=', $login)[0];
            if ($user){
                if (MD5($password) == MD5($user->password)){
                    $_SESSION['nickname'] = $user->nickname;
                    $_SESSION['first_name'] = $user->first_name;
                    $_SESSION['sec_name'] = $user->sec_name;
                    $_SESSION['id'] = $user->user_id;

                    $_SESSION['msg'] = "Вы успешно вошли в систему";
                }
                else $_SESSION['msg'] = "Неправильный пароль";
            }
            else $_SESSION['msg'] = "Неправильный логин";
        }
        header('Location: /page/hello');
        exit();
    }
    public function logout(Request $request){
        $_SESSION = null;
        $_SESSION['msg'] =  "Вы успешно вышли из системы";
        header('Location: /page/hello');
        exit();
    }
}

