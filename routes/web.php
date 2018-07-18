<?php

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


/**
 * Invoices
 */
$router->group([
    // 'middleware' => 'auth',
    'prefix' => 'api/v1',
    'middleware' => \Barryvdh\Cors\HandleCors::class,
], function () use ($router) {

    $router->get('/invoices', 'InvoicesController@index');
    $router->post('/invoices', 'InvoicesController@store');
    $router->get('/invoices/{id}', 'InvoicesController@show');
    $router->put('/invoices/{id}', 'InvoicesController@update');
    $router->delete('/invoices/{id}', 'InvoicesController@delete');
});
