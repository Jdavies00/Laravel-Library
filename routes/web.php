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
$router->get('id/{id}',function ($id){
    return 'id: '. $id;
});

//Routes for Users
$router ->post('register','UsersController@register');
// $router ->get('');
// $router ->get('');
// $router ->post('');
// $router ->put('');
// $router ->delete('');

//Routes For books
$router ->get('books','bookController@index');
$router ->get('books/{id}','bookController@find');
$router ->post('books/','bookController@create');
$router ->put('books/{id}/edit','bookController@update');
$router ->delete('books/{id}/delete','bookController@delete');

//Routes for Checkout
// $router ->post('');
// $router ->get('');
// $router ->get('');
// $router ->post('');
// $router ->put('');
// $router ->delete('');

//Route to view things
$router ->get('author','authorController@index');
$router ->get('genre','genreController@index');
$router ->get('checkout','checkoutController@index');
$router ->get('user','userController@index');


