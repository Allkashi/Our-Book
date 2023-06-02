<?php

use Framework\Route;
use Framework\Router;

Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET));
Router::addRoute(new Route('user/{user_id}', 'UserController@getById', Route::METHOD_GET));
Router::addRoute(new Route('test_route/{test_data}', 'MyController@index', Route::METHOD_GET));
echo "Маршруты добавлены<br>";
