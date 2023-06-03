<?php
namespace App\Models;

use Framework\Model;
use Framework\MysqlModel;

class UserModel extends MysqlModel
{
    protected static  $table="user";
//    public function index()
//
//    {
//        $user = new UserModel();
//        $user->create(["username" => "monster"]);
//        return $this->view('index.php',['users'=>$usermodel->all()]);
//    }

//    public function getWhere($conditions)
//    {
//        // TODO: Implement getWhere() method.
//    }

    public function deleteWhere($conditions)
    {
        // TODO: Implement deleteWhere() method.
    }

    public static function updateWhere($conditions)
    {
        // TODO: Implement updateWhere() method.
    }

    public static function create($fields)
    {
        // TODO: Implement create() method.
    }
}