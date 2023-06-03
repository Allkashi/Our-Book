<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        return $this->view('category.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'category' => CategoryModel::all()]);

    }


}