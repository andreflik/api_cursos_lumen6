<?php



$router->get('/', function () use ($router) {
    return 'Api Rest para listar cursos' . $router->app->version();
});

$router->group(['prefix' => 'cursos'], function() use($router) {
    $router->get('/', 'CursosController@index');
    $router->get('/{curso}', 'CursosController@show');

    $router->post('/', 'CursosController@store');
    $router->put('/{curso}', 'CursosController@update');

    $router->delete('/{curso}', 'CursosController@destroy');
});


//endpoint: cursos
//get,post,put/patch,delete