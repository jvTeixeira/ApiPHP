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

    return $router->app->version() + "svasjdca";
});

$router->get('/cozinhaController', "CozinhaController@obterTodos");
$router->get('/cozinhaController/{id}', "CozinhaController@consultar");
$router->post('/cozinhaController', "CozinhaController@criar");
$router->put('/cozinhaController/{id}', "CozinhaController@atualizar");
$router->delete('/cozinhaController/{id}', "CozinhaController@deletar");
