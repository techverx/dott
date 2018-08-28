<?php

use Illuminate\Routing\Router;

/** @var $router Router */
$router->group(['namespace' => 'dott\controllers', 'prefix' => 'api'], function (Router $router) {
    $router->get('/businesses/search/', ['name' => 'businesses.search', 'uses' => 'BussinessesController@search']);
    $router->get('/businesses', ['name' => 'businesses.index', 'uses' => 'BussinessesController@index']);
    $router->post('/businesses/', ['name' => 'businesses.store', 'uses' => 'BussinessesController@store']);
    $router->get('/businesses/{id}', ['name' => 'businesses.get', 'uses' => 'BussinessesController@get']);
    $router->patch('/businesses/{id}', ['name' => 'businesses.get', 'uses' => 'BussinessesController@get']);
    $router->delete('/businesses/{id}', ['name' => 'businesses.get', 'uses' => 'BussinessesController@get']);
});

// catch-all route
$router->any('{any}', function () {
    return 'four oh four';
})->where('any', '(.*)');
