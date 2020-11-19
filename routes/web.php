<?php


use Illuminate\Support\Str;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/key', function () {
//     return Str::random(32);
// });

$router->group([
    'prefix' => 'auth',
], function () use ($router) {
    $router->post('/register', 'UserController@store');
    $router->post('/login', 'UserController@login');
    $router->get('/user', 'UserController@index');
    $router->get('/me', 'UserController@me');
    $router->get('/logout', 'UserController@logout');
});




