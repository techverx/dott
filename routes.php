<?php

use Illuminate\Routing\Router;

/** @var $router Router */
$router->group(['namespace' => 'dott\controllers', 'prefix' => 'api'], function (Router $router) {
    $router->get('/', ['name' => 'business.index', 'uses' => 'BusinessesController@index']);
    $router->post('/', ['name' => 'business.store', 'uses' => 'BusinessesController@store']);
});

// catch-all route
$router->any('{any}', function () {
    return 'four oh four';
})->where('any', '(.*)');
