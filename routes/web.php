<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router ->post('register','UsersController@register');
$router ->get('books','bookController@index');
$router ->get('author','authorController@index');
$router ->get('user','userController@index');
$router ->get('genre','genreController@index');
$router ->get('','Controller@index');


// $router->get([
//    'books'=> 'bookController@index',    //each controler here contains the crud functions
//      'user'=> 'userController@index',
// ]);

